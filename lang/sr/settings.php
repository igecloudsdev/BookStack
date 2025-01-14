<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Подешавања',
    'settings_save' => 'Сачувај подешавања',
    'system_version' => 'Верзија система',
    'categories' => 'Категорије',

    // App Settings
    'app_customization' => 'Прилгођавање',
    'app_features_security' => 'Својства и сигурност',
    'app_name' => 'Назив апликације',
    'app_name_desc' => 'Ово име се приказује у заглављу и у свим системским порукама е-поште.',
    'app_name_header' => 'Прикажи назив у заглављу',
    'app_public_access' => 'Javni pristup',
    'app_public_access_desc' => 'Омогућавање ове опције ће омогућити посетиоцима, који нису пријављени, да приступе садржају у вашој Боокстак инстанци.',
    'app_public_access_desc_guest' => 'Приступ за јавне посетиоце може се контролисати преко корисника „Гост“.',
    'app_public_access_toggle' => 'Дозволи јавни приступ',
    'app_public_viewing' => 'Дозволити јавно гледање?',
    'app_secure_images' => 'Веће безбедност отпремања слика',
    'app_secure_images_toggle' => 'Омогућите већу безбедност отпремања слика',
    'app_secure_images_desc' => 'Из разлога перформанси, све слике су јавне. Ова опција додаје насумичан низ који је тешко погодити испред Урл-ова слике. Уверите се да индекси директоријума нису омогућени да бисте спречили лак приступ.',
    'app_default_editor' => 'Подразумевани уређивач страница',
    'app_default_editor_desc' => 'Изаберите који уређивач ће се подразумевано користити приликом уређивања нових страница. Ово се може заменити на нивоу странице где дозволе дозвољавају.',
    'app_custom_html' => 'Прилагођени ХТМЛ садржај заглавља',
    'app_custom_html_desc' => 'Сваки садржај који је додат овде биће уметнут у дно <head> одељка сваке странице. Ово је згодно за надјачавање стилова или додавање кода за анализу.',
    'app_custom_html_disabled_notice' => 'Прилагођени садржај заглавља ХТМЛ-а је онемогућен на овој страници са подешавањима како би се осигурало да се све неоправдане промене могу поништити.',
    'app_logo' => 'Логотип апликације',
    'app_logo_desc' => 'Ово се користи у траци заглавља апликације, између осталих области. Висина ове слике треба да буде 86 пиксела. Велике слике ће бити смањене.',
    'app_icon' => 'Икона апликације',
    'app_icon_desc' => 'Ова икона се користи за картице претраживача и иконе пречица. Ово би требало да буде квадратна ПНГ слика величине 256 пиксела.',
    'app_homepage' => 'Почетна страница апликације',
    'app_homepage_desc' => 'Изаберите приказ који ће се приказати на почетној страници уместо подразумеваног приказа. Дозволе за страницу се занемарују за изабране странице.',
    'app_homepage_select' => 'Изаберите страницу',
    'app_footer_links' => 'Везе у подножју',
    'app_footer_links_desc' => 'Додајте везе које ће се приказати у подножју сајта. Они ће бити приказани на дну већине страница, укључујући и оне које не захтевају пријаву. Можете користити ознаку "trans::<key>" да бисте користили системски дефинисане преводе. На пример: Коришћење "trans::common.privacy_policy"ће обезбедити преведени текст „Политика приватности“, а "trans::common.terms_of_service" ће обезбедити преведени текст „Услови коришћења услуге“.',
    'app_footer_links_label' => 'Ознака линка',
    'app_footer_links_url' => 'УРЛ линка',
    'app_footer_links_add' => 'Додај везу у подножју',
    'app_disable_comments' => 'Онемогући коментаре',
    'app_disable_comments_toggle' => 'Онемогући коментаре',
    'app_disable_comments_desc' => 'Онемогућава коментаре на свим страницама у апликацији. <br> Постојећи коментари нису приказани.',

    // Color settings
    'color_scheme' => 'Шема боја апликације',
    'color_scheme_desc' => 'Подесите боје које ће се користити у корисничком интерфејсу апликације. Боје се могу засебно конфигурисати за тамне и светле режиме како би најбоље одговарале теми и осигурале читљивост.',
    'ui_colors_desc' => 'Подесите примарну боју апликације и подразумевану боју везе. Примарна боја се углавном користи за банер заглавља, дугмад и декорацију интерфејса. Подразумевана боја везе се користи за везе и радње засноване на тексту, како унутар писаног садржаја, тако и у интерфејсу апликације.',
    'app_color' => 'Примарна боја',
    'link_color' => 'Подразумевана боја везе',
    'content_colors_desc' => 'Подесите боје за све елементе у хијерархији организације страница. За читљивост се препоручује одабир боја сличне осветљености као и подразумеване боје.',
    'bookshelf_color' => 'Боја полице',
    'book_color' => 'Боја књиге',
    'chapter_color' => 'Боја поглавља',
    'page_color' => 'Боја странице',
    'page_draft_color' => 'Боја нацрта странице',

    // Registration Settings
    'reg_settings' => 'Регистрација',
    'reg_enable' => 'Дозволи регистрацију',
    'reg_enable_toggle' => 'Омогући регистрацију',
    'reg_enable_desc' => 'Када је регистрација омогућена, корисник ће моћи да се пријави као корисник апликације. Након регистрације добијају јединствену, подразумевану корисничку улогу.',
    'reg_default_role' => 'Подразумевана корисничка улога након регистрације',
    'reg_enable_external_warning' => 'Горња опција се занемарује док је активна екстерна ЛДАП или САМЛ аутентификација. Кориснички налози за непостојеће чланове биће аутоматски креирани ако је аутентификација, против спољашњег система који се користи, успешна.',
    'reg_email_confirmation' => 'Потврђивање е-поште',
    'reg_email_confirmation_toggle' => 'Захтевајте потврду е-поштом',
    'reg_confirm_email_desc' => 'Ако се користи ограничење домена, биће потребна потврда путем е-поште и ова опција ће бити занемарена.',
    'reg_confirm_restrict_domain' => 'Ограничени домени',
    'reg_confirm_restrict_domain_desc' => 'Унесите листу домена е-поште одвојене зарезима на које желите да ограничите регистрацију. Корисницима ће бити послата е-порука да потврде своју адресу пре него што им буде дозвољено да комуницирају са апликацијом. <br> Имајте на уму да ће корисници моћи да промене своје адресе е-поште након успешне регистрације.',
    'reg_confirm_restrict_domain_placeholder' => 'Нема постављених ограничења',

    // Maintenance settings
    'maint' => 'Одржавање',
    'maint_image_cleanup' => 'Чишћење слика',
    'maint_image_cleanup_desc' => 'Скенира садржај странице и ревидира садржај да би проверио које слике и цртежи су тренутно у употреби и које су слике сувишне. Уверите се да сте направили пуну базу података и резервну копију слике пре него што ово покренете.',
    'maint_delete_images_only_in_revisions' => 'Такође избришите слике које постоје само у старим ревизијама странице',
    'maint_image_cleanup_run' => 'Покрени чишћење',
    'maint_image_cleanup_warning' => ':count пронађене су потенцијално неискоришћене слике. Да ли сте сигурни да желите да избришете ове слике?',
    'maint_image_cleanup_success' => ':count potentially unused images found and deleted!',
    'maint_image_cleanup_nothing_found' => 'No unused images found, Nothing deleted!',
    'maint_send_test_email' => 'Send a Test Email',
    'maint_send_test_email_desc' => 'This sends a test email to your email address specified in your profile.',
    'maint_send_test_email_run' => 'Send test email',
    'maint_send_test_email_success' => 'Email sent to :address',
    'maint_send_test_email_mail_subject' => 'Test Email',
    'maint_send_test_email_mail_greeting' => 'Email delivery seems to work!',
    'maint_send_test_email_mail_text' => 'Congratulations! As you received this email notification, your email settings seem to be configured properly.',
    'maint_recycle_bin_desc' => 'Deleted shelves, books, chapters & pages are sent to the recycle bin so they can be restored or permanently deleted. Older items in the recycle bin may be automatically removed after a while depending on system configuration.',
    'maint_recycle_bin_open' => 'Open Recycle Bin',
    'maint_regen_references' => 'Regenerate References',
    'maint_regen_references_desc' => 'This action will rebuild the cross-item reference index within the database. This is usually handled automatically but this action can be useful to index old content or content added via unofficial methods.',
    'maint_regen_references_success' => 'Reference index has been regenerated!',
    'maint_timeout_command_note' => 'Note: This action can take time to run, which can lead to timeout issues in some web environments. As an alternative, this action be performed using a terminal command.',

    // Recycle Bin
    'recycle_bin' => 'Recycle Bin',
    'recycle_bin_desc' => 'Here you can restore items that have been deleted or choose to permanently remove them from the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'recycle_bin_deleted_item' => 'Deleted Item',
    'recycle_bin_deleted_parent' => 'Parent',
    'recycle_bin_deleted_by' => 'Deleted By',
    'recycle_bin_deleted_at' => 'Deletion Time',
    'recycle_bin_permanently_delete' => 'Permanently Delete',
    'recycle_bin_restore' => 'Restore',
    'recycle_bin_contents_empty' => 'The recycle bin is currently empty',
    'recycle_bin_empty' => 'Empty Recycle Bin',
    'recycle_bin_empty_confirm' => 'This will permanently destroy all items in the recycle bin including content contained within each item. Are you sure you want to empty the recycle bin?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item from the system, along with any child elements listed below, and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Items to be Destroyed',
    'recycle_bin_restore_list' => 'Items to be Restored',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_restore_parent' => 'Restore Parent',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Audit Log',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Event Filter',
    'audit_event_filter_no_filter' => 'No Filter',
    'audit_deleted_item' => 'Избрисана ставка',
    'audit_deleted_item_name' => 'Name: :name',
    'audit_table_user' => 'Корисник',
    'audit_table_event' => 'Догађај',
    'audit_table_related' => 'Related Item or Detail',
    'audit_table_ip' => 'ИП адреса',
    'audit_table_date' => 'Датум активности',
    'audit_date_from' => 'Date Range From',
    'audit_date_to' => 'Date Range To',

    // Role Settings
    'roles' => 'Улоге',
    'role_user_roles' => 'User Roles',
    'roles_index_desc' => 'Roles are used to group users & provide system permission to their members. When a user is a member of multiple roles the privileges granted will stack and the user will inherit all abilities.',
    'roles_x_users_assigned' => ':count user assigned|:count users assigned',
    'roles_x_permissions_provided' => ':count permission|:count permissions',
    'roles_assigned_users' => 'Assigned Users',
    'roles_permissions_provided' => 'Provided Permissions',
    'role_create' => 'Create New Role',
    'role_delete' => 'Delete Role',
    'role_delete_confirm' => 'Ово ће избрисати улогу са именом \':roleName\'.',
    'role_delete_users_assigned' => 'Ова улога има :userCount корисника који су јој додељени. Ако желите да мигрирате кориснике са ове улоге, изаберите нову улогу испод.',
    'role_delete_no_migration' => "Немојте мигрирати кориснике",
    'role_delete_sure' => 'Да ли сте сигурни да желите да избришете ову улогу?',
    'role_edit' => 'Уреди улогу',
    'role_details' => 'Детаљи улоге',
    'role_name' => 'Назив улоге',
    'role_desc' => 'Кратак опис улоге',
    'role_mfa_enforced' => 'Захтева вишефакторску аутентификацију',
    'role_external_auth_id' => 'External Authentication IDs',
    'role_system' => 'System Permissions',
    'role_manage_users' => 'Manage users',
    'role_manage_roles' => 'Manage roles & role permissions',
    'role_manage_entity_permissions' => 'Manage all book, chapter & page permissions',
    'role_manage_own_entity_permissions' => 'Manage permissions on own book, chapter & pages',
    'role_manage_page_templates' => 'Manage page templates',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'Manage app settings',
    'role_export_content' => 'Export content',
    'role_import_content' => 'Import content',
    'role_editor_change' => 'Change page editor',
    'role_notifications' => 'Receive & manage notifications',
    'role_asset' => 'Asset Permissions',
    'roles_system_warning' => 'Be aware that access to any of the above three permissions can allow a user to alter their own privileges or the privileges of others in the system. Only assign roles with these permissions to trusted users.',
    'role_asset_desc' => 'These permissions control default access to the assets within the system. Permissions on Books, Chapters and Pages will override these permissions.',
    'role_asset_admins' => 'Admins are automatically given access to all content but these options may show or hide UI options.',
    'role_asset_image_view_note' => 'This relates to visibility within the image manager. Actual access of uploaded image files will be dependant upon system image storage option.',
    'role_all' => 'All',
    'role_own' => 'Own',
    'role_controlled_by_asset' => 'Controlled by the asset they are uploaded to',
    'role_save' => 'Save Role',
    'role_users' => 'Users in this role',
    'role_users_none' => 'No users are currently assigned to this role',

    // Users
    'users' => 'Users',
    'users_index_desc' => 'Create & manage individual user accounts within the system. User accounts are used for login and attribution of content & activity. Access permissions are primarily role-based but user content ownership, among other factors, may also affect permissions & access.',
    'user_profile' => 'User Profile',
    'users_add_new' => 'Add New User',
    'users_search' => 'Search Users',
    'users_latest_activity' => 'Latest Activity',
    'users_details' => 'User Details',
    'users_details_desc' => 'Set a display name and an email address for this user. The email address will be used for logging into the application.',
    'users_details_desc_no_email' => 'Set a display name for this user so others can recognise them.',
    'users_role' => 'User Roles',
    'users_role_desc' => 'Select which roles this user will be assigned to. If a user is assigned to multiple roles the permissions from those roles will stack and they will receive all abilities of the assigned roles.',
    'users_password' => 'User Password',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 8 characters long.',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Send user invite email',
    'users_external_auth_id' => 'External Authentication ID',
    'users_external_auth_id_desc' => 'When an external authentication system is in use (such as SAML2, OIDC or LDAP) this is the ID which links this BookStack user to the authentication system account. You can ignore this field if using the default email-based authentication.',
    'users_password_warning' => 'Only fill the below if you would like to change the password for this user.',
    'users_system_public' => 'This user represents any guest users that visit your instance. It cannot be used to log in but is assigned automatically.',
    'users_delete' => 'Delete User',
    'users_delete_named' => 'Delete user :userName',
    'users_delete_warning' => 'This will fully delete this user with the name \':userName\' from the system.',
    'users_delete_confirm' => 'Are you sure you want to delete this user?',
    'users_migrate_ownership' => 'Migrate Ownership',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'No user selected',
    'users_edit' => 'Edit User',
    'users_edit_profile' => 'Edit Profile',
    'users_avatar' => 'User Avatar',
    'users_avatar_desc' => 'Select an image to represent this user. This should be approx 256px square.',
    'users_preferred_language' => 'Preferred Language',
    'users_preferred_language_desc' => 'This option will change the language used for the user-interface of the application. This will not affect any user-created content.',
    'users_social_accounts' => 'Social Accounts',
    'users_social_accounts_desc' => 'View the status of the connected social accounts for this user. Social accounts can be used in addition to the primary authentication system for system access.',
    'users_social_accounts_info' => 'Here you can connect your other accounts for quicker and easier login. Disconnecting an account here does not revoke previously authorized access. Revoke access from your profile settings on the connected social account.',
    'users_social_connect' => 'Connect Account',
    'users_social_disconnect' => 'Disconnect Account',
    'users_social_status_connected' => 'Connected',
    'users_social_status_disconnected' => 'Disconnected',
    'users_social_connected' => ':socialAccount account was successfully attached to your profile.',
    'users_social_disconnected' => ':socialAccount account was successfully disconnected from your profile.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_desc' => 'Create and manage the access tokens used to authenticate with the BookStack REST API. Permissions for the API are managed via the user that the token belongs to.',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',
    'users_mfa' => 'Multi-Factor Authentication',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token created :timeAgo',
    'user_api_token_updated' => 'Token updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_index_desc' => 'Webhooks are a way to send data to external URLs when certain actions and events occur within the system which allows event-based integration with external platforms such as messaging or notification systems.',
    'webhooks_x_trigger_events' => ':count trigger event|:count trigger events',
    'webhooks_create' => 'Create New Webhook',
    'webhooks_none_created' => 'No webhooks have yet been created.',
    'webhooks_edit' => 'Edit Webhook',
    'webhooks_save' => 'Save Webhook',
    'webhooks_details' => 'Webhook Details',
    'webhooks_details_desc' => 'Provide a user friendly name and a POST endpoint as a location for the webhook data to be sent to.',
    'webhooks_events' => 'Webhook Events',
    'webhooks_events_desc' => 'Select all the events that should trigger this webhook to be called.',
    'webhooks_events_warning' => 'Keep in mind that these events will be triggered for all selected events, even if custom permissions are applied. Ensure that use of this webhook won\'t expose confidential content.',
    'webhooks_events_all' => 'All system events',
    'webhooks_name' => 'Webhook Name',
    'webhooks_timeout' => 'Webhook Request Timeout (Seconds)',
    'webhooks_endpoint' => 'Webhook Endpoint',
    'webhooks_active' => 'Webhook Active',
    'webhook_events_table_header' => 'Events',
    'webhooks_delete' => 'Delete Webhook',
    'webhooks_delete_warning' => 'This will fully delete this webhook, with the name \':webhookName\', from the system.',
    'webhooks_delete_confirm' => 'Are you sure you want to delete this webhook?',
    'webhooks_format_example' => 'Webhook Format Example',
    'webhooks_format_example_desc' => 'Webhook data is sent as a POST request to the configured endpoint as JSON following the format below. The "related_item" and "url" properties are optional and will depend on the type of event triggered.',
    'webhooks_status' => 'Webhook Status',
    'webhooks_last_called' => 'Last Called:',
    'webhooks_last_errored' => 'Last Errored:',
    'webhooks_last_error_message' => 'Last Error Message:',

    // Licensing
    'licenses' => 'Licenses',
    'licenses_desc' => 'This page details license information for BookStack in addition to the projects & libraries that are used within BookStack. Many projects listed may only be used in a development context.',
    'licenses_bookstack' => 'BookStack License',
    'licenses_php' => 'PHP Library Licenses',
    'licenses_js' => 'JavaScript Library Licenses',
    'licenses_other' => 'Other Licenses',
    'license_details' => 'License Details',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'cy' => 'Cymraeg',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fi' => 'Suomi',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nb' => 'Norsk (Bokmål)',
        'nn' => 'Nynorsk',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'uz' => 'O‘zbekcha',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
