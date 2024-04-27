<?php

return [
    'app' => [
        'name' => 'Winter CMS',
        'tagline' => 'Getting back to basics'
    ],
    'directory' => [
        'create_fail' => 'Kan ikke oprette mappen: :name'
    ],
    'file' => [
        'create_fail' => 'Kan ikke oprette filen: :name'
    ],
    'page' => [
        'invalid_token' => [
            'label' => 'Ugyldig sikkerhedstoken',
        ],
    ],
    'combiner' => [
        'not_found' => "Kombineringsfilen ':name', kunne ikke findes."
    ],
    'system' => [
        'name' => 'System',
        'menu_label' => 'System',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Andet',
            'logs' => 'Logs',
            'mail' => 'Mail',
            'shop' => 'Butik',
            'team' => 'Team',
            'users' => 'Brugere',
            'system' => 'System',
            'social' => 'Social',
            'events' => 'Begivenheder',
            'customers' => 'Kunder',
            'my_settings' => 'Mine Indstillinger'
        ]
    ],
    'theme' => [
        'label' => 'Tema',
        'unnamed' => 'Unavngivet tema',
        'name' => [
            'label' => 'Temanavn',
            'help' => 'Navngiv temaet med en unik kode. Feks., Winter.Vanilla'
        ],
    ],
    'themes' => [
        'install' => 'Installer temaer',
        'search' => 'Søg efter temaer',
        'installed' => 'Installerede temaer',
        'no_themes' => 'Der er ikke installeret nogle temaer fra markedspladsen.',
        'recommended' => 'Anbefalede',
        'remove_confirm' => 'Er du sikker på at du vil fjerne dette tema?'
    ],
    'plugin' => [
        'label' => 'Plugin',
        'unnamed' => 'Unavngivet plugin',
        'name' => [
            'label' => 'Pluginnavn',
            'help' => 'Navngiv pluginet med en unik kode. Feks., Winter.Blog'
        ]
    ],
    'plugins' => [
        'manage' => 'Administrer plugins',
        'enable_or_disable' => 'Aktiver eller deaktiver',
        'enable_or_disable_title' => 'Aktiver eller deaktiver plugins',
        'install' => 'Installer plugins',
        'install_products' => 'Install produkter',
        'search' => 'Søg efter plugins...',
        'installed' => 'Installerede plugins',
        'no_plugins' => 'Der er ikke installeret nogle plugins fra markedspladsen.',
        'recommended' => 'Anbefalede',
        'remove' => 'Fjern',
        'refresh' => 'Opdater',
        'disabled_label' => 'Deaktiveret',
        'disabled_help' => 'Plugins der er deaktiverede, bliver ignoreret af applikationen.',
        'frozen_label' => 'Frys opdateringer',
        'frozen_help' => 'Plugins der er frossede, bliver ignoreret i opdateringsprocessen.',
        'selected_amount' => 'Antal plugins valgt: :amount',
        'remove_confirm' => 'Er du sikker på at du vil fjerne dette plugin?',
        'remove_success' => 'Disse plugins blev fjernet fra systemet.',
        'refresh_confirm' => 'Er du sikker?',
        'refresh_success' => 'Disse plugins blev opdateret i systemet.',
        'disable_confirm' => 'Er du sikker?',
        'disable_success' => 'Disse plugins blev deaktiveret.',
        'enable_success' => 'Disse plugins blev aktiveret.',
        'unknown_plugin' => 'Pluginet er blevet fjernet fra filsystemet.'
    ],
    'project' => [
        'name' => 'Projekt',
        'owner_label' => 'Ejer',
        'attach' => 'Tilknyt Projekt',
        'detach' => 'Frakobl Projekt',
        'none' => 'Ingen',
        'id' => [
            'label' => 'Projekt ID',
            'help' => 'Sådan findes dit projekt ID',
            'missing' => 'Specificer venligst et projekt ID.'
        ],
        'detach_confirm' => 'Er du sikker på at du vil frakoble dette projekt?',
        'unbind_success' => 'Projektet er blevet frakoblet.'
    ],
    'settings' => [
        'menu_label' => 'Indstillinger',
        'not_found' => 'De ønskede indstillinger kunne ikke findes.',
        'missing_model' => 'Indstillingssiden mangler en Model definition.',
        'update_success' => ':name indstillinger opdateret',
        'return' => 'Tilbage til systemindstillinger',
        'search' => 'Søg'
    ],
    'mail' => [
        'log_file' => 'Logfil',
        'menu_label' => 'Mail indstillinger',
        'menu_description' => 'Administrer email konfiguration.',
        'general' => 'Generelt',
        'method' => 'Mail metode',
        'sender_name' => 'Afsender navn',
        'sender_email' => 'Afsender email',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP adresse',
        'smtp_authorization' => 'SMTP authorization påkrævet',
        'smtp_authorization_comment' => 'Sæt kryds her hvis din SMTP server kræver authorization.',
        'smtp_username' => 'Brugernavn',
        'smtp_password' => 'Adgangskode',
        'smtp_port' => 'SMTP port',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail sti',
        'sendmail_path_comment' => 'Angiv venligst stien til sendmail programmet.',
    ],
    'mail_templates' => [
        'menu_label' => 'Mail skabeloner',
        'menu_description' => 'Rediger og administrer mailskabelonerne.',
        'new_template' => 'Ny skabelon',
        'new_layout' => 'Nyt layout',
        'template' => 'Skabelon',
        'templates' => 'Skabeloner',
        'menu_layouts_label' => 'Mail layouts',
        'layout' => 'Layout',
        'layouts' => 'Layouts',
        'no_layout' => '-- Intet layout --',
        'name' => 'Navn',
        'name_comment' => 'Unikt navn der bruges til at referere til denne skabelon',
        'code' => 'Kode',
        'code_comment' => 'Unik kode der bruges til at referere til denne skabelon',
        'subject' => 'Emne',
        'subject_comment' => 'Email emne',
        'description' => 'Beskrivelse',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Fritekst',
        'test_send' => 'Send testbesked',
        'test_success' => 'Testbesked blev afsendt.',
        'test_confirm' => 'Send testbesked til :email. Fortsæt?',
        'creating' => 'Opretter skabelon...',
        'creating_layout' => 'Opretter Layout...',
        'saving' => 'Gemmer Skabelon...',
        'saving_layout' => 'Gemmer Layout...',
        'delete_confirm' => 'Slet denne skabelon?',
        'delete_layout_confirm' => 'Slet dette layout?',
        'deleting' => 'Sletter Skabelon...',
        'deleting_layout' => 'Sletter Layout...',
        'sending' => 'Sender test besked...',
        'return' => 'Tilbage til skabelonoversigt'
    ],
    'install' => [
        'project_label' => 'Tilknyt til Projekt',
        'plugin_label' => 'Installer Plugin',
        'theme_label' => 'Installer Tema',
        'missing_plugin_name' => 'Angiv venligst et pluginnavn, at installere.',
        'missing_theme_name' => 'Angiv venligst et temanavn, at installere.',
        'install_completing' => 'Afslutter installationsproces',
        'install_success' => 'Plugin blev installeret'
    ],
    'updates' => [
        'title' => 'Administrer Opdateringer',
        'name' => 'Softwareopdatering',
        'menu_label' => 'Opdateringer & Plugins',
        'menu_description' => 'Opdater systemet, og administrer og installer plugins og temaer.',
        'return_link' => 'Tilbage til systemopdateringer',
        'check_label' => 'Check for opdateringer',
        'retry_label' => 'Prøv igen',
        'plugin_name' => 'Navn',
        'plugin_code' => 'Kode',
        'plugin_description' => 'Beskrivelse',
        'plugin_version' => 'Version',
        'plugin_author' => 'Ejer',
        'plugin_not_found' => 'Plugin not found',
        'core_current_build' => 'Nuværende build',
        'core_build' => 'Build :build',
        'core_build_help' => 'Seneste build er tilgængelig.',
        'core_downloading' => 'Downloader applikationsfiler',
        'core_extracting' => 'Pakker applicationsfiler ud',
        'plugins' => 'Plugins',
        'themes' => 'Temaer',
        'disabled' => 'Deaktiveret',
        'plugin_downloading' => 'Downloader plugin: :name',
        'plugin_extracting' => 'Udpakker plugin: :name',
        'plugin_version_none' => 'Nyt plugin',
        'plugin_current_version' => 'Nuværende version',
        'theme_new_install' => 'Ny tema installation.',
        'theme_downloading' => 'Downloader tema: :name',
        'theme_extracting' => 'Udpakker tema: :name',
        'update_label' => 'Opdater software',
        'update_completing' => 'Afslutter opdateringsproces',
        'update_loading' => 'Loader tilgængelige opdateringer...',
        'update_success' => 'Opdateringsprocess afsluttet',
        'update_failed_label' => 'Opdatering fejlede',
        'force_label' => 'Tvangsopdater',
        'found' => [
            'label' => 'Ny opdateringer blev fundet!',
            'help' => 'Tryk opdater software, for at begynde opdateringsprocessen.'
        ],
        'none' => [
            'label' => 'Ingen opdateringer',
            'help' => 'Der blev ikke fundet nogle nye opdateringer.'
        ],
        'important_action' => [
            'empty' => 'Vælg handling',
            'confirm' => 'Bekræft opdatering',
            'skip' => 'Skip dette plugin (Kun en gang)',
            'ignore' => 'Skip dette plugin (altid)',
        ],
        'important_action_required' => 'Handling påkrævet',
        'important_view_guide' => ' se opgraderingsguide',
        'important_alert_text' => 'Nogle opdatering kræver din opmærksomhed.',
        'details_title' => 'Plugindetaljer',
        'details_view_homepage' => 'Se hjemmeside',
        'details_readme' => 'Dokumentation',
        'details_readme_missing' => 'Der er ingen dokumentation tilgængelig.',
        'details_upgrades' => 'Opgraderingsguide',
        'details_upgrades_missing' => 'Der er ikke nogle opgraderingsinstruktioner.',
        'details_current_version' => 'Nuværende version',
        'details_author' => 'Ejer',
    ],
    'server' => [
        'connect_error' => 'Fejl i forbindelse til server.',
        'response_not_found' => 'Opdateringsserveren kunne ikke findes.',
        'response_invalid' => 'Ugyldigt svar fra serveren.',
        'response_empty' => 'Tomt svar fra serveren.',
        'file_error' => 'Det lykkedes ikke serveren at sende pakken.',
        'file_corrupt' => 'Filen fra serveren er beskadiget.'
    ],
    'behavior' => [
        'missing_property' => 'Klassen :class skal definere instansvariablen $:property, som bliver brugt af :behavior behavioren.'
    ],
    'config' => [
        'not_found' => 'Kunne ikke finde konfigurationsfilen :file defineret for :location.',
        'required' => "Konfiguration brugt i :location skal angive værdien for ':property'."
    ],
    'zip' => [
        'extract_failed' => "Kunne ikke udpakke corefilen ':file'."
    ],
    'event_log' => [
        'hint' => 'Denne log viser en liste af potentielle fejl i applikationen.',
        'menu_label' => 'Begivenhedslog',
        'menu_description' => 'Se system logbeskeder.',
        'empty_link' => 'Tøm eventloggen',
        'empty_loading' => 'Tømmer eventloggen...',
        'empty_success' => 'Eventloggen blev tømt.',
        'return_link' => 'Tilbage til eventloggen',
        'id' => 'ID',
        'id_label' => 'Event ID',
        'created_at' => 'Dato & Tid',
        'message' => 'Besked',
        'level' => 'Grad',
        'preview_title' => 'Event'
    ],
    'request_log' => [
        'hint' => 'Denne log viser en liste af browserrequests som måske kræver din opmærksomhed. Feks. hvis en gæst åbner en CMS side der ikke findes, bliver der oprettet en record med statuskode 404.',
        'menu_label' => 'Requestlog',
        'menu_description' => 'Vis forkerte og redirectede requests, som feks. 404 requests.',
        'empty_link' => 'Tøm requestloggen',
        'empty_loading' => 'Tømmer requestloggen...',
        'empty_success' => 'Requestloggen blev tømt.',
        'return_link' => 'Tilbage til requestloggen.',
        'id' => 'ID',
        'id_label' => 'Log ID',
        'count' => 'Tæller',
        'referer' => 'Referers',
        'url' => 'URL',
        'status_code' => 'Status',
        'preview_title' => 'Request'
    ],
    'permissions' => [
        'name' => 'System',
        'manage_system_settings' => 'Administrer systemindstillinger',
        'manage_software_updates' => 'Administrer softwareopdateringer',
        'access_logs' => 'Vis systemlogs',
        'manage_mail_templates' => 'Administrer mailskabeloner',
        'manage_mail_settings' => 'Administrer mailindstillinger',
        'manage_other_administrators' => 'Administrer andre backendbrugere',
        'manage_preferences' => 'Administrer backendindstillinger',
        'manage_editor' => 'Administrer kode redigeringsværktøjets indstillinger',
        'view_the_dashboard' => 'Vis administratorpanelet',
        'manage_branding' => 'Tilpas backenden'
    ],
    'media' => [
        'invalid_path' => "Ugyldig sti: ':path'.",
        'folder_size_items' => 'ting',
    ],
];
