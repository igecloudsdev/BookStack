/**
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 *
 */

import type {EditorState, NodeKey} from 'lexical';

import {
  $createParagraphNode,
  $getNodeByKey,
  $getRoot,
  $getSelection,
  $isRangeSelection,
  $isTextNode,
} from 'lexical';
import invariant from 'lexical/shared/invariant';
import {Text as YText, YEvent, YMapEvent, YTextEvent, YXmlEvent} from 'yjs';

import {Binding, Provider} from '.';
import {CollabDecoratorNode} from './CollabDecoratorNode';
import {CollabElementNode} from './CollabElementNode';
import {CollabTextNode} from './CollabTextNode';
import {
  $syncLocalCursorPosition,
  syncCursorPositions,
  syncLexicalSelectionToYjs,
} from './SyncCursors';
import {
  $getOrInitCollabNodeFromSharedType,
  $moveSelectionToPreviousNode,
  doesSelectionNeedRecovering,
  syncWithTransaction,
} from './Utils';

// eslint-disable-next-line @typescript-eslint/no-explicit-any
function $syncEvent(binding: Binding, event: any): void {
  const {target} = event;
  const collabNode = $getOrInitCollabNodeFromSharedType(binding, target);

  if (collabNode instanceof CollabElementNode && event instanceof YTextEvent) {
    // @ts-expect-error We need to access the private property of the class
    const {keysChanged, childListChanged, delta} = event;

    // Update
    if (keysChanged.size > 0) {
      collabNode.syncPropertiesFromYjs(binding, keysChanged);
    }

    if (childListChanged) {
      collabNode.applyChildrenYjsDelta(binding, delta);
      collabNode.syncChildrenFromYjs(binding);
    }
  } else if (
    collabNode instanceof CollabTextNode &&
    event instanceof YMapEvent
  ) {
    const {keysChanged} = event;

    // Update
    if (keysChanged.size > 0) {
      collabNode.syncPropertiesAndTextFromYjs(binding, keysChanged);
    }
  } else if (
    collabNode instanceof CollabDecoratorNode &&
    event instanceof YXmlEvent
  ) {
    const {attributesChanged} = event;

    // Update
    if (attributesChanged.size > 0) {
      collabNode.syncPropertiesFromYjs(binding, attributesChanged);
    }
  } else {
    invariant(false, 'Expected text, element, or decorator event');
  }
}

export function syncYjsChangesToLexical(
  binding: Binding,
  provider: Provider,
  events: Array<YEvent<YText>>,
  isFromUndoManger: boolean,
): void {
  const editor = binding.editor;
  const currentEditorState = editor._editorState;

  // This line precompute the delta before editor update. The reason is
  // delta is computed when it is accessed. Note that this can only be
  // safely computed during the event call. If it is accessed after event
  // call it might result in unexpected behavior.
  // https://github.com/yjs/yjs/blob/00ef472d68545cb260abd35c2de4b3b78719c9e4/src/utils/YEvent.js#L132
  events.forEach((event) => event.delta);

  editor.update(
    () => {
      for (let i = 0; i < events.length; i++) {
        const event = events[i];
        $syncEvent(binding, event);
      }

      const selection = $getSelection();

      if ($isRangeSelection(selection)) {
        if (doesSelectionNeedRecovering(selection)) {
          const prevSelection = currentEditorState._selection;

          if ($isRangeSelection(prevSelection)) {
            $syncLocalCursorPosition(binding, provider);
            if (doesSelectionNeedRecovering(selection)) {
              // If the selected node is deleted, move the selection to the previous or parent node.
              const anchorNodeKey = selection.anchor.key;
              $moveSelectionToPreviousNode(anchorNodeKey, currentEditorState);
            }
          }

          syncLexicalSelectionToYjs(
            binding,
            provider,
            prevSelection,
            $getSelection(),
          );
        } else {
          $syncLocalCursorPosition(binding, provider);
        }
      }
    },
    {
      onUpdate: () => {
        syncCursorPositions(binding, provider);
        // If there was a collision on the top level paragraph
        // we need to re-add a paragraph. To ensure this insertion properly syncs with other clients,
        // it must be placed outside of the update block above that has tags 'collaboration' or 'historic'.
        editor.update(() => {
          if ($getRoot().getChildrenSize() === 0) {
            $getRoot().append($createParagraphNode());
          }
        });
      },
      skipTransforms: true,
      tag: isFromUndoManger ? 'historic' : 'collaboration',
    },
  );
}

function $handleNormalizationMergeConflicts(
  binding: Binding,
  normalizedNodes: Set<NodeKey>,
): void {
  // We handle the merge operations here
  const normalizedNodesKeys = Array.from(normalizedNodes);
  const collabNodeMap = binding.collabNodeMap;
  const mergedNodes = [];

  for (let i = 0; i < normalizedNodesKeys.length; i++) {
    const nodeKey = normalizedNodesKeys[i];
    const lexicalNode = $getNodeByKey(nodeKey);
    const collabNode = collabNodeMap.get(nodeKey);

    if (collabNode instanceof CollabTextNode) {
      if ($isTextNode(lexicalNode)) {
        // We mutate the text collab nodes after removing
        // all the dead nodes first, otherwise offsets break.
        mergedNodes.push([collabNode, lexicalNode.__text]);
      } else {
        const offset = collabNode.getOffset();

        if (offset === -1) {
          continue;
        }

        const parent = collabNode._parent;
        collabNode._normalized = true;

        parent._xmlText.delete(offset, 1);

        collabNodeMap.delete(nodeKey);
        const parentChildren = parent._children;
        const index = parentChildren.indexOf(collabNode);
        parentChildren.splice(index, 1);
      }
    }
  }

  for (let i = 0; i < mergedNodes.length; i++) {
    const [collabNode, text] = mergedNodes[i];
    if (collabNode instanceof CollabTextNode && typeof text === 'string') {
      collabNode._text = text;
    }
  }
}

type IntentionallyMarkedAsDirtyElement = boolean;

export function syncLexicalUpdateToYjs(
  binding: Binding,
  provider: Provider,
  prevEditorState: EditorState,
  currEditorState: EditorState,
  dirtyElements: Map<NodeKey, IntentionallyMarkedAsDirtyElement>,
  dirtyLeaves: Set<NodeKey>,
  normalizedNodes: Set<NodeKey>,
  tags: Set<string>,
): void {
  syncWithTransaction(binding, () => {
    currEditorState.read(() => {
      // We check if the update has come from a origin where the origin
      // was the collaboration binding previously. This can help us
      // prevent unnecessarily re-diffing and possible re-applying
      // the same change editor state again. For example, if a user
      // types a character and we get it, we don't want to then insert
      // the same character again. The exception to this heuristic is
      // when we need to handle normalization merge conflicts.
      if (tags.has('collaboration') || tags.has('historic')) {
        if (normalizedNodes.size > 0) {
          $handleNormalizationMergeConflicts(binding, normalizedNodes);
        }

        return;
      }

      if (dirtyElements.has('root')) {
        const prevNodeMap = prevEditorState._nodeMap;
        const nextLexicalRoot = $getRoot();
        const collabRoot = binding.root;
        collabRoot.syncPropertiesFromLexical(
          binding,
          nextLexicalRoot,
          prevNodeMap,
        );
        collabRoot.syncChildrenFromLexical(
          binding,
          nextLexicalRoot,
          prevNodeMap,
          dirtyElements,
          dirtyLeaves,
        );
      }

      const selection = $getSelection();
      const prevSelection = prevEditorState._selection;
      syncLexicalSelectionToYjs(binding, provider, prevSelection, selection);
    });
  });
}
