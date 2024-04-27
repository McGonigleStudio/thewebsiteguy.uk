<?php

return [
    'app' => [
        'name' => 'Winter CMS',
        'tagline' => 'Getting back to basics'
    ],
    'directory' => [
        'create_fail' => 'Kan ikke opprette mappen: :name'
    ],
    'file' => [
        'create_fail' => 'Kan ikke opprette filen: :name'
    ],
    'page' => [
        'invalid_token' => [
            'label' => 'Ugyldig sikkerhets-token',
        ],
    ],
    'combiner' => [
        'not_found' => "Kombinasjonsfilen ':name' ble ikke funnet."
    ],
    'system' => [
        'name' => 'System',
        'menu_label' => 'System',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Div.',
            'logs' => 'Logger',
            'mail' => 'E-post',
            'shop' => 'Shop',
            'team' => 'Team',
            'users' => 'Brukere',
            'system' => 'System',
            'social' => 'Sosialt',
            'events' => 'Hendelser',
            'customers' => 'Kunder',
            'my_settings' => 'Mine innstillinger'
        ]
    ],
    'theme' => [
        'label' => 'Tema',
        'unnamed' => 'Tema uten navn',
        'name' => [
            'label' => 'Navn på tema',
            'help' => 'Navngi temaet ved et unikt navn. For eksempel, Winter.Vanilla'
        ],
    ],
    'themes' => [
        'install' => 'Installer tema',
        'search' => 'søk etter temaer å installere...',
        'installed' => 'Installerte temaer',
        'no_themes' => 'Det er ingen installerte temaer fra markedsplassen.',
        'recommended' => 'Anbefalt',
        'remove_confirm' => 'Vil du virkelig slette dette temaet?'
    ],
    'plugin' => [
        'label' => 'Plugin',
        'unnamed' => 'Plugin uten navn',
        'name' => [
            'label' => 'Navn på plugin',
            'help' => 'Navngi pluginen ved et unikt navn. For eksempel, Winter.Blog'
        ]
    ],
    'plugins' => [
        'manage' => 'Administrere plugins',
        'enable_or_disable' => 'Aktivere eller deaktivere',
        'enable_or_disable_title' => 'Aktivere eller deaktivere plugins',
        'install' => 'Installer plugins',
        'install_products' => 'Installer produkter',
        'search' => 'søk etter plugins å installere...',
        'installed' => 'Installerte plugins',
        'no_plugins' => 'Det er ingen installerte plugins fra markedsplassen.',
        'recommended' => 'Anbefalt',
        'remove' => 'Fjern',
        'refresh' => 'Oppdater',
        'disabled_label' => 'Deaktivert',
        'disabled_help' => 'Deaktiverte plugins blir ignorert av applikasjonen.',
        'frozen_label' => 'Frys oppdaterionger',
        'frozen_help' => 'Fryste plugins blir ignorert ved oppdatering.',
        'selected_amount' => 'Valgte plugins: :amount',
        'remove_confirm' => 'Er du sikker?',
        'remove_success' => 'Plugins har blitt fjernet fra systemet.',
        'refresh_confirm' => 'Er du sikker?',
        'refresh_success' => 'Plugins har blitt oppdatert i systemet.',
        'disable_confirm' => 'Er du sikker?',
        'disable_success' => 'Plugins har blitt deaktivert.',
        'enable_success' => 'Plugins har blitt aktivert.',
        'unknown_plugin' => 'Plugins har blitt fjernet fra systemet.'
    ],
    'project' => [
        'name' => 'Prosjekt',
        'owner_label' => 'Eier',
        'attach' => 'Tilkoble prosjekt',
        'detach' => 'Avkoble prosjekt',
        'none' => 'Ingen',
        'id' => [
            'label' => 'Prosjekt-ID',
            'help' => 'Hvordan finne din prosjekt-ID',
            'missing' => 'Vennligst spesifiser en prosjekt-ID.'
        ],
        'detach_confirm' => 'Vil du virkelig avkoble dette prosjektet?',
        'unbind_success' => 'Prosjektet har blitt avkoblet.'
    ],
    'settings' => [
        'menu_label' => 'Innstillinger',
        'not_found' => 'Fant ikke spesifiserte innstilling.',
        'missing_model' => 'Innstillingssiden mangler en modell-definisjon.',
        'update_success' => 'Innstillingene for :name har blitt lagret.',
        'return' => 'Tilbake til systeminnstillinger',
        'search' => 'Søk'
    ],
    'mail' => [
        'log_file' => 'Loggfil',
        'menu_label' => 'E-postinnstillinger',
        'menu_description' => 'Administrere e-postinnstillinger.',
        'general' => 'Generelt',
        'method' => 'E-postmetode',
        'sender_name' => 'Avsendernavn',
        'sender_email' => 'Avsenderens e-postadresse',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP-adresse',
        'smtp_authorization' => 'SMTP-autentisering kreves',
        'smtp_authorization_comment' => 'Kryss av dersom SMTP-tjeneren krever autentisering.',
        'smtp_username' => 'Brukernavn',
        'smtp_password' => 'Passord',
        'smtp_port' => 'SMTP-port',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail-sti',
        'sendmail_path_comment' => 'Vennligst oppgi stien til sendmail-programmet.',
    ],
    'mail_templates' => [
        'menu_label' => 'E-postmaler',
        'menu_description' => 'Modifisere e-postmalene som blir sendt til brukere og administratorer, administrere e-postlayouts.',
        'new_template' => 'Ny mal',
        'new_layout' => 'Ny layout',
        'template' => 'Mal',
        'templates' => 'Maler',
        'menu_layouts_label' => 'E-postlayouts',
        'layout' => 'Layout',
        'layouts' => 'Layouts',
        'no_layout' => '-- ingen layout --',
        'name' => 'Navn',
        'name_comment' => 'Unikt navn som tilknyttes denne layouten',
        'code' => 'Code',
        'code_comment' => 'Unik kode som tilknyttes denne malen',
        'subject' => 'Emne',
        'subject_comment' => 'Emnet til e-posten',
        'description' => 'Beskrivelse',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Ren tekst',
        'test_send' => 'Send testmelding',
        'test_success' => 'Testmeldingen er sendt.',
        'test_confirm' => 'Sender testmelding til :email. Fortsette?',
        'creating' => 'Oppretter mal...',
        'creating_layout' => 'Oppretter layout...',
        'saving' => 'Lagrer mal...',
        'saving_layout' => 'Lagrer layout...',
        'delete_confirm' => 'Slette denne malen?',
        'delete_layout_confirm' => 'Slette denne layouten?',
        'deleting' => 'Sletter mal...',
        'deleting_layout' => 'Sletter layout...',
        'sending' => 'Sender testmelding...',
        'return' => 'Tilbake til mallisten'
    ],
    'install' => [
        'project_label' => 'Tilkoble prosjekt',
        'plugin_label' => 'Installér',
        'theme_label' => 'Installér tema',
        'missing_plugin_name' => 'Vennligst oppgi pluginens navn.',
        'missing_theme_name' => 'Oppgi tema-navn for å installere.',
        'install_completing' => 'Fullfører installasjonen',
        'install_success' => 'Plugin har blitt installert.'
    ],
    'updates' => [
        'title' => 'Administrer oppdateringer',
        'name' => 'Programvareoppdateringer',
        'menu_label' => 'Oppdateringer',
        'menu_description' => 'Oppdatere systemet, administrer og installere plugins og temaer.',
        'return_link' => 'Tilbake til oppdateringer',
        'check_label' => 'Se etter oppdateringer',
        'retry_label' => 'Prøv igjen',
        'plugin_name' => 'Navn',
        'plugin_code' => 'Kode',
        'plugin_description' => 'Beskrivelse',
        'plugin_version' => 'Versjon',
        'plugin_author' => 'Utgiver',
        'plugin_not_found' => 'Plugin not found',
        'core_current_build' => 'Nåværende build',
        'core_build' => 'Build :build',
        'core_build_help' => 'Siste build er tilgjengelig.',
        'core_downloading' => 'Laster ned applikasjonsfiler',
        'core_extracting' => 'Pakker ut applikasjonsfiler',
        'plugins' => 'Plugins',
        'themes' => 'Teamer',
        'disabled' => 'Deaktivert',
        'plugin_downloading' => 'Laster ned plugin: :name',
        'plugin_extracting' => 'Pakker ut plugin: :name',
        'plugin_version_none' => 'Ny plugin',
        'plugin_current_version' => 'Nåværende versjon',
        'theme_new_install' => 'Ny tema-installasjon.',
        'theme_downloading' => 'Laster ned tema: :name',
        'theme_extracting' => 'Pakker ut tema: :name',
        'update_label' => 'Oppdatér programvare',
        'update_completing' => 'Ferdiggjør oppdatering',
        'update_loading' => 'Henter tilgjengelige oppdateringer...',
        'update_success' => 'Oppdatering har fullført.',
        'update_failed_label' => 'Oppdateringen mislyktes',
        'force_label' => 'Tving update',
        'found' => [
            'label' => 'Fant nye oppdateringer!',
            'help' => 'Klikk på Oppdatér programvare for å oppdatere.'
        ],
        'none' => [
            'label' => 'Ingen oppdateringer',
            'help' => 'Ingen nye oppdateringer ble funnet.'
        ],
        'important_action' => [
            'empty' => 'Velg handling',
            'confirm' => 'Bekreft oppdatering',
            'skip' => 'Hopp over plugin (bare denne gangen)',
            'ignore' => 'Hopp over plugin (alltid)',
        ],
        'important_action_required' => 'Velg handling',
        'important_view_guide' => 'Vis oppgraderingsguide',
        'important_alert_text' => 'Noen oppdateringer krever ettersyn.',
        'details_title' => 'Plugin detaljer',
        'details_view_homepage' => 'Vis nettside',
        'details_readme' => 'Dokumentasjon',
        'details_readme_missing' => 'Ingen dokumentasjon å vise.',
        'details_upgrades' => 'Oppgraderingsguide',
        'details_upgrades_missing' => 'Det er ingen instruksjoner å vise.',
        'details_current_version' => 'Nåværende versjon',
        'details_author' => 'Forfatter',
    ],
    'server' => [
        'connect_error' => 'Kunne ikke koble til serveren.',
        'response_not_found' => 'Oppdateringsserveren ble ikke funnet.',
        'response_invalid' => 'Feilaktig respons fra serveren.',
        'response_empty' => 'Tom respons fra serveren.',
        'file_error' => 'Serveren kunne ikke levere pakken.',
        'file_corrupt' => 'Pakken fra serveren er korrupt.'
    ],
    'behavior' => [
        'missing_property' => 'Klassen :class må definere egenskapen $:property som brukes av :behavior -egenskapen.'
    ],
    'config' => [
        'not_found' => 'Fant ikke konfigurasjonsfilen :file definert for for :location.',
        'required' => "Konfigurasjon brukt i :location må angi verdien ':property'."
    ],
    'zip' => [
        'extract_failed' => "Kunne ikke pakke opp core-fil ':file'."
    ],
    'event_log' => [
        'hint' => 'Denne loggen viser en liste over potensielle feilmeldinger som oppstår i applikasjonen, for eksempel unntak og debugginginformasjon.',
        'menu_label' => 'Hendelseslogg',
        'menu_description' => 'Se systemloggmeldinger med registrert tid og detaljer.',
        'empty_link' => 'Tøm hendelseslogg',
        'empty_loading' => 'Tømmer hendelseslogg...',
        'empty_success' => 'Hendelsesloggen er tømt.',
        'return_link' => 'Tilbake til hendelseslogg',
        'id' => 'ID',
        'id_label' => 'Hendelses-ID',
        'created_at' => 'Tid',
        'message' => 'Melding',
        'level' => 'Nivå',
        'preview_title' => 'Hendelse'
    ],
    'request_log' => [
        'hint' => 'Denne loggen viser en liste over nettleserforespørsler som kan kreve oppmerksomhet. For eksempel, hvis en bruker besøker en side som ikke eksisterer, vil det bli oppført her med statuskode 404.',
        'menu_label' => 'Forespørselslogg',
        'menu_description' => 'Se feilaktige forespørsler, for eksempel Ikke funnet (404).',
        'empty_link' => 'Tøm forespørselslogg',
        'empty_loading' => 'Tømmer forespørselslogg...',
        'empty_success' => 'Forespørselsloggen er tømt.',
        'return_link' => 'Tilbake til forespørselslogg',
        'id' => 'ID',
        'id_label' => 'Logg-ID',
        'count' => 'Antall',
        'referer' => 'Referers',
        'url' => 'URL',
        'status_code' => 'Status',
        'preview_title' => 'Forespørsel'
    ],
    'permissions' => [
        'name' => 'System',
        'manage_system_settings' => 'Administrer systeminnstillinger',
        'manage_software_updates' => 'Administrer programvareoppdateringer',
        'access_logs' => 'Se systemlogger',
        'manage_mail_templates' => 'Administrer e-postmaler',
        'manage_mail_settings' => 'Administrer e-postinnstillinger',
        'manage_other_administrators' => 'Administrer andre administratorer',
        'manage_preferences' => 'Administrer backend-innstillinger',
        'manage_editor' => 'Administrer kodeeditor-innstillinger',
        'view_the_dashboard' => 'Se dashboard',
        'manage_branding' => 'Tilpasse backend'
    ],
    'media' => [
        'invalid_path' => "Ugyldig filsti: ':path'.",
        'folder_size_items' => 'fil(er)',
    ],
];
