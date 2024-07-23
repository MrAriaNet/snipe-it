<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Domena Active Directory',
    'ad_domain_help'			=> 'To je včasih enako kot vaša domena e-pošte, vendar ne vedno.',
    'ad_append_domain_label'    => 'Dodaj ime domene',
    'ad_append_domain'          => 'Dodaj ime domene polju z uporabniškim imenom',
    'ad_append_domain_help'     => 'Uporabniku ni potrebno vnesti "uporabnisko-ime@domena.local", vnesejo lahko le "uporabnisko-ime".',
    'admin_cc_email'            => 'E-pošta v vednost',
    'admin_cc_email_help'       => 'V kolikor želite poslati kopijo sprejemne/izdajne e-pošte poslane uporabnikom tudi na dodaten e-poštni račun, ga vnesite tu. V nasprotnem primeru pustite polje prazno.',
    'admin_settings'            => 'Admin Settings',
    'is_ad'				        => 'To je strežnik Active Directory',
    'alerts'                	=> 'Alerts',
    'alert_title'               => 'Update Notification Settings',
    'alert_email'				=> 'Pošlji opozorila na',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'Opozorila e-pošte so omogočena',
    'alert_interval'			=> 'Prag za opozorilo pri poteku (v dneh)',
    'alert_inv_threshold'		=> 'Prag za opozorilo pri inventuri',
    'allow_user_skin'           => 'Dovoli uporabniške preobleke',
    'allow_user_skin_help_text' => 'Potrditev tega polja bo uporabnikom omogočila spremembo preobleke uporabniškega vmesnika z drugo.',
    'asset_ids'					=> 'ID sredstva',
    'audit_interval'            => 'Revizijski interval',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Prag za opozorilo o reviziji',
    'audit_warning_days_help'   => 'Koliko dni vnaprej vas opozorimo, kdaj so sredstva namenjena za revizijo?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Predpona (neobvezno)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Varnostna kopija',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Nastavitve črtne kode',
    'confirm_purge'			    => 'Potrdi čiščenje',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'CSS po meri',
    'custom_css_help'			=> 'Vnesite CSS po meri, ki bi jih radi uporabili. Ne vključite &lt;style&gt;&lt;/style&gt; oznake.',
    'custom_forgot_pass_url'	=> 'URL za ponastavitev gesla po meri',
    'custom_forgot_pass_url_help'	=> 'S tem se nadomešča vgrajeni URL za pozabljeni geslo na zaslonu za prijavo, ki je uporaben za usmerjanje ljudi v notranje ali gostiteljsko funkcijo ponastavitve gesla LDAP. Učinkovito bo onemogočil lokalno uporabniško pozabljeno geslo.',
    'dashboard_message'			=> 'Sporočilo nadzorne plošče',
    'dashboard_message_help'	=> 'To besedilo bo prikazano na nadzorni plošči za vse, ki imajo dovoljenje za ogled nadzorne plošče.',
    'default_currency'  		=> 'Privzeta valuta',
    'default_eula_text'			=> 'Privzeta EULA',
    'default_language'			=> 'Privzeti jezik',
    'default_eula_help_text'	=> 'Prav tako lahko povežete EULA po meri z določenimi kategorijami sredstev.',
    'acceptance_note'           => 'Add a note for your decision (Optional)',
    'display_asset_name'        => 'Prikaži ime sredstva',
    'display_checkout_date'     => 'Prikaže datum izdaje',
    'display_eol'               => 'Prikaz EOL v pogledu tabele',
    'display_qr'                => 'Prikaži kvadratne kode',
    'display_alt_barcode'		=> 'Prikaži 1D črtno kodo',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> 'Tip 2D črtne kode',
    'alt_barcode_type'			=> 'Tip 1D črtne kode',
    'email_logo_size'       => 'Square logos in email look best. ',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> 'Nastavitve EULA',
    'eula_markdown'				=> 'Ta EULA dovoljuje <a href="https://help.github.com/articles/github-flavored-markdown/">Github z okusom markdowna</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Dodatno besedilo noge ',
    'footer_text_help'          => 'To besedilo bo prikazano v desnem delu noge. Povezave so dovoljene z uporabo <a href="https://help.github.com/articles/github-flavored-markdown/">Gothub okusno markdown</a>. Prelomi vrstic, glave, slike itd. Lahko povzročijo nepredvidljive rezultate.',
    'general_settings'			=> 'Splošne nastavitve',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula, gravatar, tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Ustvari varnostno kopiranje',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => 'Barva glave',
    'info'                      => 'Te nastavitve vam omogočajo prilagoditev določenih vidikov vaše namestitve.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Laravel Version',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'no_default_group'          => 'No Default Group',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'Omogočen LDAP',
    'ldap_integration'          => 'Integracija LDAP',
    'ldap_settings'             => 'Nastavitve LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
    'ldap_location'             => 'LDAP Location',
'ldap_location_help'             => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help'      => 'Vnesite veljavno uporabniško ime in geslo za LDAP iz osnovnega DN, ki ste ga navedli zgoraj, da preizkusite, ali je vaša prijava LDAP konfigurirana pravilno. Najprej morate shraniti posodobljene nastavitve za LDAP.',
    'ldap_login_sync_help'      => 'To samo testira, če lahko LDAP pravilno sinhronizira. Če vaša poizvedba LDAP Authentication ni pravilna, se uporabniki morda še vedno ne morejo prijaviti. Najprej morate shraniti posodobljene nastavitve za LDAP.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'Strežnik LDAP',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted) or ldaps:// (for TLS or SSL)',
    'ldap_server_cert'			=> 'Validacija potrdila SSL LDAP',
    'ldap_server_cert_ignore'	=> 'Dovoli neveljavno potrdilo SSL',
    'ldap_server_cert_help'		=> 'Izberite to potrditveno polje, če uporabljate samo-podpisano potrdilo SSL in želite sprejeti neveljavno potrdilo SSL.',
    'ldap_tls'                  => 'Uporabi TLS',
    'ldap_tls_help'             => 'To je treba preveriti le, če na vašem strežniku LDAP uporabljate STARTTLS. ',
    'ldap_uname'                => 'Uporabniško ime za povezavo z LDAP',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP uporabniško geslo',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP Filter',
    'ldap_pw_sync'              => 'LDAP sinhronizacija gesla',
    'ldap_pw_sync_help'         => 'Počistite polje, če ne želite, da se gesla LDAP sinhronizirajo z lokalnimi gesli. Če funkcijo onemogočite, se vaši uporabniki morda ne bodo mogli prijaviti, če vaš strežnik LDAP iz neznanega razloga ni dosegljiv.',
    'ldap_username_field'       => 'Uporabniško polje',
    'ldap_lname_field'          => 'Priimek',
    'ldap_fname_field'          => 'LDAP ime',
    'ldap_auth_filter_query'    => 'Poizvedba za preverjanje pristnosti LDAP',
    'ldap_version'              => 'Različica LDAP',
    'ldap_active_flag'          => 'Aktivna zastava LDAP',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'LDAP številka zaposlenega',
    'ldap_email'                => 'E-pošta LDAP',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Licenca za programsko opremo',
    'load_remote'               => 'Load Remote Avatars',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load avatars from Gravatar or other outside sources.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Success?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Opomba za prijavo',
    'login_note_help'           => 'Na zaslonu za prijavo lahko dodate še nekaj stavkov, na primer za pomoč ljudem, ki so našli izgubljeno ali ukradeno napravo. To polje sprejema <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'login_remote_user_text'    => 'Remote User login options',
    'login_remote_user_enabled_text' => 'Enable Login with Remote User Header',
    'login_remote_user_enabled_help' => 'This option enables Authentication via the REMOTE_USER header according to the "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disable other authentication mechanisms',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will get redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logotip',
    'logo_print_assets'         => 'Use in Print',
    'logo_print_assets_help'    => 'Use branding on printable asset lists ',
    'full_multiple_companies_support_help_text' => 'Omejevanje uporabnikov (tudi administratorjev), dodeljenih podjetjem za sredstva podjetja.',
    'full_multiple_companies_support_text' => 'Popolna podpora podjetij',
    'show_in_model_list'   => 'Prikaži v spustnem meniju Modeli',
    'optional'					=> 'Opcijsko',
    'per_page'                  => 'Rezultatov na stran',
    'php'                       => 'PHP različica',
    'php_info'                  => 'PHP info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Za prikaz QR kod morate namestiti php-gd, glejte navodila za namestitev.',
    'php_gd_warning'            => 'PHP Obdelava slik in vtičnik GD nista nameščena.',
    'pwd_secure_complexity'     => 'Zapletenost gesla',
    'pwd_secure_complexity_help' => 'Izberite katera pravila zapletenosti gesel želite uveljaviti.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Minimalni znaki gesla',
    'pwd_secure_min_help'       => 'Najmanjša dovoljena vrednost je 8',
    'pwd_secure_uncommon'       => 'Preprečevanje pogostega gesla',
    'pwd_secure_uncommon_help'  => 'S tem uporabniki ne bodo mogli uporabljati pogostih gesel izmed 10.000 gesel, prijavljenih v kršitvah.',
    'qr_help'                   => 'Najprej omogočite QR kodo da nastavite to',
    'qr_text'                   => 'Besedilo QR kode',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Nastavitev',
    'settings'                  => 'Nastavitve',
    'show_alerts_in_menu'       => 'Pokaži opozorila v zgornjem meniju',
    'show_archived_in_list'     => 'Arhivirana sredstva',
    'show_archived_in_list_text'     => 'Prikaz arhiviranih sredstva v seznamu "vsa sredstva"',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Ime mesta',
    'integrations'               => 'Integrations',
    'slack'                     => 'Slack',
    'general_webhook'           => 'General Webhook',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Test to Save',
    'webhook_title'               => 'Update Webhook Settings',
    'webhook_help'                => 'Integration settings',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Channel',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Settings',
    'webhook_test'                 =>'Test :app integration',
    'webhook_integration_help'    => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button'    => 'Once you have saved your :app information, a test button will appear.',
    'webhook_test_help'           => 'Test whether your :app integration is configured correctly. YOU MUST SAVE YOUR UPDATED :app SETTINGS FIRST.',
    'snipe_version'  			=> 'Snipe-IT različica',
    'support_footer'            => 'Povezava do podpore v nogi ',
    'support_footer_help'       => 'Določite, kdo vidi povezave do informacij o podpori Snipe-IT in uporabniškega priročnika',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who sees the Snipe-IT version and build number.',
    'system'                    => 'Sistemske informacije',
    'update'                    => 'Posodobi nastavitve',
    'value'                     => 'Vrednost',
    'brand'                     => 'Branding',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'O nastavitvah',
    'about_settings_text'       => 'Te nastavitve vam omogočajo prilagoditev določenih vidikov vaše namestitve.',
    'labels_per_page'           => 'Nalepke na stran',
    'label_dimensions'          => 'Dimenzije nalepk (inch)',
    'next_auto_tag_base'        => 'Naslednje samodejno povečanje',
    'page_padding'              => 'Robovi strani (inch)',
    'privacy_policy_link'       => 'Link to Privacy Policy',
    'privacy_policy'            => 'Privacy Policy',
    'privacy_policy_link_help'  => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge'                     => 'Počisti izbrisane zapise',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Oznaka spodnjega kanala',
    'labels_display_sgutter'    => 'Oznaka stranskega kanala',
    'labels_fontsize'           => 'Velikost pisave nalepke',
    'labels_pagewidth'          => 'Širina lista nalepk',
    'labels_pageheight'         => 'Višina lista nalepk',
    'label_gutters'        => 'Razmik med nalepkami (inch)',
    'page_dimensions'        => 'Dimenzije strani (inch)',
    'label_fields'          => 'Vidna polja nalepke',
    'inches'        => 'inch',
    'width_w'        => 'š',
    'height_h'        => 'v',
    'show_url_in_emails'                => 'Povezava na Snipe-IT v e-poštnih sporočilih',
    'show_url_in_emails_help_text'      => 'Počistite polje, če se ne želite povezati z namestitvijo Snipe-IT v njenih e-poštnih podnožjih. Uporabno, če se večina uporabnikov nikoli ne prijavlja. ',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max višina sličice',
    'thumbnail_max_h_help'   => 'Maksimalna višina v slikovnih pikah, sličic ki se lahko prikažejo v pogledu seznama. Min 25, največ 500.',
    'two_factor'        => 'Dvo-stopna avtentikacija',
    'two_factor_secret'        => 'Dvo-stopna koda',
    'two_factor_enrollment'        => 'Dvo-stopni vpis',
    'two_factor_enabled_text'        => 'Omogoči dvostopenjsko avtentikacijo',
    'two_factor_reset'        => 'Ponastavi dvo-stopenjsko skrivnost',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with their authenticator app again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Dvostopenjska naprava je bila uspešno ponastavljena',
    'two_factor_reset_error'          => 'Ponastavitev dvostopenjskih naprav ni uspela',
    'two_factor_enabled_warning'        => 'Omogočanje dvostopenjske avtentifikacije, če trenutno ni omogočeno, vas bo takoj prisililo, da se potrdite s storitvijo Google Auth. Imeli boste možnost vpisati svojo napravo, če niste včlanjeni.',
    'two_factor_enabled_help'        => 'S pomočjo storitve Google Authenticator se bo vklopilo dvostopenjsko preverjanje pristnosti.',
    'two_factor_optional'        => 'Selektivno (uporabniki lahko dovolijo ali onemogočijo, če imajo dovoljeno to funkcijo)',
    'two_factor_required'        => 'Zahtevano za vse uporabnike',
    'two_factor_disabled'        => 'Onemogočeno',
    'two_factor_enter_code'	=> 'Vnesite dvo-stopenjsko kodo',
    'two_factor_config_complete'	=> 'Pošlji kodo',
    'two_factor_enabled_edit_not_allowed' => 'Vaš skrbnik vam ne dovoli urejanja te nastavitve.',
    'two_factor_enrollment_text'	=> "Zahtevano je dvo-stopenjsko preverjanje pristnosti, vendar vaša naprava še ni bila včlanjena. Odprite aplikacijo Google Authenticator in si oglejte spodnjo kodo QR, če želite vnesti svojo napravo. Ko vnesete napravo, vnesite spodnjo kodo",
    'require_accept_signature'      => 'Zahtevaj podpis',
    'require_accept_signature_help_text'      => 'Če omogočite to funkcijo, se bodo uporabniki morali fizično odjaviti ob sprejemu sredstva.',
    'left'        => 'levo',
    'right'        => 'desno',
    'top'        => 'na vrh',
    'bottom'        => 'na dno',
    'vertical'        => 'navpično',
    'horizontal'        => 'vodoravno',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => 'Dolžina oznak sredstev, vključno z zerofilom',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
    'oauth_title' => 'OAuth API Settings',
    'oauth_clients' => 'OAuth Clients',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'oauth_no_clients' => 'You have not created any OAuth clients yet.',
    'oauth_secret' => 'Secret',
    'oauth_authorized_apps' => 'Authorized Applications',
    'oauth_redirect_url' => 'Redirect URL',
    'oauth_name_help' => ' Something your users will recognize and trust.',
    'oauth_scopes' => 'Scopes',
    'oauth_callback_url' => 'Your application authorization callback URL.',
    'create_client' => 'Create Client',
    'no_scopes' => 'No scopes',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email Alerts & Audit Settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Label sizes &amp; settings',
    'purge_keywords' => 'permanently delete',
    'purge_help' => 'Počisti izbrisane zapise',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Employee Number',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
    'label2_enable'           => 'New Label Engine',
    'label2_enable_help'      => 'Switch to the new label engine. <b>Note: You will need to save this setting before setting others.</b>',
    'label2_template'         => 'Template',
    'label2_template_help'    => 'Select which template to use for label generation',
    'label2_title'            => 'Naslov',
    'label2_title_help'       => 'The title to show on labels that support it',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Use Asset Logo',
    'label2_asset_logo_help'  => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type'          => '1D Barcode Type',
    'label2_1d_type_help'     => 'Format for 1D barcodes',
    'label2_2d_type'          => 'Tip 2D črtne kode',
    'label2_2d_type_help'     => 'Format for 2D barcodes',
    'label2_2d_target'        => '2D Barcode Target',
    'label2_2d_target_help'   => 'The URL the 2D barcode points to when scanned',
    'label2_fields'           => 'Field Definitions',
    'label2_fields_help'      => 'Fields can be added, removed, and reordered in the left column. For each field, multiple options for Label and DataSource can be added, removed, and reordered in the right column.',
    'help_asterisk_bold'    => 'Text entered as <code>**text**</code> will be displayed as bold',
    'help_blank_to_use'     => 'Leave blank to use the value from <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default'               => 'Default',
    'none'                  => 'None',
    'google_callback_help' => 'This should be entered as the callback URL in your Google OAuth app settings in your organization&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Google Workspace Login Settings',
    'enable_google_login'  => 'Enable users to login with Google Workspace',
    'enable_google_login_help'  => 'Users will not be automatically provisioned. They must have an existing account here AND in Google Workspace, and their username here must match their Google Workspace email address. ',
    'mail_reply_to' => 'Mail Reply-To Address',
    'mail_from' => 'Mail From Address',
    'database_driver' => 'Database Driver',
    'bs_table_storage' => 'Table Storage',
    'timezone' => 'Timezone',
    'profile_edit'          => 'Edit Profile',
    'profile_edit_help'          => 'Allow users to edit their own profiles.',
    'default_avatar' => 'Upload custom default avatar',
    'default_avatar_help' => 'This image will be displayed as a profile if a user does not have a profile photo.',
    'restore_default_avatar' => 'Restore <a href=":default_avatar" data-toggle="lightbox" data-type="image">original system default avatar</a>',
    'restore_default_avatar_help' => '',

];
