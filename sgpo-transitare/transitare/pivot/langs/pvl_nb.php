<?php
//Norsk bokm&aring;l (Norwegian Bokm&aring;l)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2nd line.

// Norwegian Bokm�l translation of Pivot lang file
// Created by Hans Fredrik Nordhaug (hans@nordhaug.priv.no), 2004.05.15 (Pivot 1.10)
// Updated by Hans Fredrik Nordhaug (hans@nordhaug.priv.no) for
// Pivot 1.14, 1.20, 1.22, 1.30 and 1.40.
//

// allow for different encoding for non-western languages
$encoding="iso-8859-1";
$langname="nb";


//		General		\\
$lang['general'] = array (
	'yes' => 'Ja',	//affirmative
	'no' => 'Nei',	//negative
	'continue' => 'Fortsett', //proceed 
	'go' => 'G�!',	//proceed

	'minlevel' => 'Du har ikke adgang til dette omr�det i Pivot',
	'email' => 'E-post',
	'url' => 'URL',
	'further_options' => "Videre innstillinger",
	'basic_view' => "Enkel visning",
	'basic_view_desc' => "Vis kun de vanligste feltene",
	'extended_view' => "Utvidet visning",
	'extended_view_desc' => "Vis alle felt som kan endres",
	'toggle_view' => "Skift mellom enkel og utvidet visning",
	'select' => "Velg",
	'cancel' => "Avbryt",
	'delete' => 'Slett',
	'approve' => 'Godkjenn',
	'edit' => 'Endre',
	'welcome' => "Velkommen til %build%.",
	'write' => "Skriv",
	'write_open_error' => "Feil ved skriving. Klarte ikke �pne fil for skriving",
	'write_write_error' => "Feil ved skriving. Klarte ikke skrive til fil",
	'done' => "Ferdig!",
	'shortcuts' => "Snarveier",
	'cantdelete' => "Du har ikke lov til � slette oppf�ring %title%!",
	'cantdothat' => "Du har ikke lov til � gj�re det med oppf�ring %title%!",
	'cantdeletelast' => "Du kan ikke slette den siste oppf�ringen. Du m� f�rste opprette en ny oppf�ring f�r du sletter denne oppf�ringen.",
	'more' => "mer",
	'all' => "alle",
);


$lang['userlevels'] = array (
		'Superadmin', 'Administrator', 'Avansert', 'Normal', 'Moblogger'
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin,
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'null', 'en', 'to', 'tre', 'fire', 'fem', 'seks', 'sju', '�tte', 'ni', 'ti', 'elleve', 'tolv', 'tretten', 'fjorten', 'femten', 'seksten'
);


$lang['months'] = array (
	'januar', 'februar', 'mars', 'april', 'mai', 'juni', 'juli', 'august', 'september', 'oktober', 'november', 'desember'
);


$lang['months_abbr'] = array (
	'jan', 'feb', 'mar', 'apr', 'mai', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'des'
);


$lang['days'] = array (
	's�ndag', 'mandag', 'tirsdag', 'onsdag', 'torsdag', 'fredag', 'l�rdag'
);


$lang['days_abbr'] = array (
	's�n', 'man', 'tir', 'ons', 'tor', 'fre', 'l�r'
);


$lang['days_calendar'] = array (
	'S', 'M', 'T', 'O', 'T', 'F', 'L'
);


$lang['datetime_words'] = array (
	'�r', 'm�ned', 'uke', 'dag', 'time', 'minutt', 'sekund'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => 'Logg inn',
	'name' => 'Brukernavn',
	'pass' => 'Passord',
	'remember' => 'Husk',
	'rchoice' => array (
		'0' => 'Ingenting',
		'1' => 'Mitt brukernavn og passord',
		'2' => 'At jeg vil v�re innlogget'
	),
	'delete_cookies_desc' => 'Hvis du er sikker p� at du bruker riktig brukernavn og passord, men likevel har problemer <br />med � logge inn, kan du pr�ve � slette informasjonskapslene for dette domenet:',
	'delete_cookies' => 'Slett informasjonskapsler',
	'retry' => 'Feil brukernavn/passord',
	'banned' => ' Du har brukt 10 fors�k p� � logge inn. IP-adressen har blitt blokkert fra � logge inn i 12 timer.',

);


//		Main Bar		\\
$lang['userbar'] = array (
	'main' => 'Oversikt',
	'entries' => 'Oppf�ringer',
	'submit' => 'Ny oppf�ring',
	'comments' => 'Kommentarer',
	'trackbacks' => 'Tilbaketr�kk',
	'modify' => 'Endre oppf�ringer',
	'userinfo' => 'Mine opplysninger',
	'u_settings' => 'Mine innstillinger',
	'u_marklet' => 'Skriptbokmerker',
	'files' => 'Behandle mediafiler',
	'upload' => 'Opplasting',
	'stats' => 'Statistikk',
	'admin' => 'Administrasjon',

	'main_title' => 'Hovedoversikt over Pivot',
	'entries_title' => 'Oversikt over oppf�ringer',
	'submit_title' => 'Ny oppf�ring',
	'comments_title' => 'Endre eller slett kommentarer',
	'trackbacks_title' => 'Endre eller slett tilbaketr�kk',
	'modify_title' => 'Endre oppf�ring',
	'userinfo_title' => 'Vis min personlige informasjon',
	'u_settings_title' => 'Endre mine personlige innstillinger',
	'u_marklet_title' => 'Opprett skriptbokmerker',
	'files_title' => 'Behandle og laste opp mediafiler',
	'upload_title' => 'Last opp filer',
	'uploaded_success' => 'Fil er lastet opp',
	'stats_title' => 'Vis logger og statistikk',
	'updatetitles_title' => 'Vis logger og statistikk',
	'admin_title' => 'Oversikt over administrasjon',
	'recent_entries' => 'Nylige oppf�ringer',
	'recent_comments' => 'Nylige kommentarer ',
	'moderate_comments' => 'Moderer kommentarer',
	'moderate_comments_desc' => '%1 kommentar(er) venter p� godkjenning.',
	'moderate_nocomments_desc' => 'Ingen kommentarer venter p� godkjenning..',
	'moderate_autoapprove' => 'Umiddelbart godkjenn kommentarer fra disse registrerte bes�kende i fremtiden.',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	//'trebuild' => 'Rebuild all Files', rolled into maintenance
	'seeusers' => 'Brukere',
	'seecommusers' => 'Registrerte bes�kende',
	'seeconfig' => 'Konfigurasjon',
	'filemappings' => 'Filmapping',
	'templates' => 'Maler',
	'maintenance' => 'Vedlikehold',
	'regen' => 'Gjenoppbygg alle filer',
	'blogs' => 'Blogger',
	'categories' => 'Kategorier',
	'verifydb' => 'Kontroller databasen',
	'buildindex' => 'Oppdater indeksen',
	'buildsearchindex' => 'Oppdater s�keindeksen',
	'buildfrontpage' => 'Oppdater forsiden(e)',
	'sendping' => 'Send ping',


	'backup' => 'Backup',
	'description' => 'Beskrivelse',
	'conversion' => 'Omgj�ring',
	'seeusers_title' => 'Opprett, endre og slette brukere',
	'seecommusers_title' => 'Vis og endre registrerte bes�kende',
	'userfields' => 'Felt for brukerinformasjon',
	'userfields_title' => 'Opprett, endre og slette felt for brukerinformasjon',
	'seeconfig_title' => 'Endre konfigurasjonsfilen',
	'filemappings_title' => 'Oversikt over hvilke filer som blir lagd og brukt av Pivot for de forskjellige bloggene',
	'templates_title' => 'Opprett, endre og slette maler',
	'maintenance_title' => 'Utf�r rutinemessig vedlikehold p� Pivot sine filer',
	'regen_title' => 'Gjenoppbygg filene og arkivet som Pivot lager',
	'blogs_title' => 'Opprett, endre og slette blogger',
	'blogs_edit_title' => 'Endre blogginnstilliger for ',
	'categories_title' => 'Opprett, endre og slette kategorier',
	'verifydb_title' => 'Kontroller integriteten for databasen din',
	'buildindex_title' => 'Gjenoppbygg indeksen for databasen din',
	'buildsearchindex_title' => 'Gjenoppbygg s�keindeks slik at folk kan s�ke i oppf�ringene',
	'buildfrontpage_title' => 'Gjenoppbygg forsiden, de siste arkivene og RSS-filene for hver av bloggene.',
	'backup_title' => 'Opprett en sikkerhetskopi av oppf�ringene dine',
	'backup_db' => 'Opprett en sikkerhetskopi av databasen',
	'backup_db_desc' => 'Dette lar deg laste ned en zip-fil som inneholder databasen din (med alle dine oppf�ringer)',
	'backup_config' => 'Opprett en sikkerhetskopi av konfigurasjonsfilene',
	'backup_config_desc' => 'Dette lar deg laste ned en zip-fil som inneholder alle dine konfigurasjonsfiler.',
	'ipblocks' => 'IP-blokker',
	'ipblocks_title' => 'Vis og endre de blokkerte IP-adressene.',
	'ipblocks_stored' => 'IP-adressene har blitt lagret.',
	'ipblocks_store' => 'Lagre disse IP-adressene',
	'ignoreddomains' => 'Blokkerte uttrykk',
	'ignoreddomains_title' => 'Vis og endre de blokkerte uttrykkene.',
	'ignoreddomains_stored' => 'De blokkerte uttrykkene har blitt lagret.',
	'ignoreddomains_store' => 'Lagre disse blokkerte uttrykkene.',
	'ignoreddomains_asterisk' => 'Oppf�ringer merket med en stjerne (*) blir bare brukt for � blokkere henvisere (referer). Alle andre oppf�ringer brukes likeden for � blokkere henviser-, kommentar- og tilbaketr�kk-spam.',
	'ignoreddomains_global' => 'Globale blokkerte uttrykk',
	'ignoreddomains_global_desc' => 'I tillegg til de blokkerte uttrykkene ovenfor, kan du bruke en oppdatert liste som din Pivot kan hente fra pivotlog.net-tjeneren. For �yeblikket inneholder denne listen f�lgende uttrykk:',
	'ignoreddomains_global_empty' => 'Listen over globale uttrykk er tom',
	'ignoreddomains_global_update' => 'Oppdater listen over globale uttrykk fra pivotlog.net',
	'ignoreddomains_global_delete' => 'Slett listen over globale uttrykk',
	'ignoreddomains_global_success' => 'De globale uttrykkene er lagret.',
	'ignoreddomains_global_failed' => 'De globale uttrykkene kunne ikke lagres. Pr�v igjen seinere!',
	'ignoreddomains_global_deleted' => 'De globale uttrykkene er slettet.',
 	'fileexplore' => 'Filutforsker',
	'fileexplore_title' => 'Vis filer (b�de tekst- og databasefiler)',
	'sendping_title' => 'Send Ping oppdateringssporere.',
	'buildindex_start' => 'Bygger indeks n�. Dette kan ta litt tid, s� ikke avbryt.',
	'buildsearchindex_start' => 'Bygger s�keindeks n�. Dette kan ta litt tid, s� ikke avbryt.',
	'buildindex_finished' => 'Ferdig! Bygging av indeks tok %num% sekunder',

	'filemappings_desc' => 'Nedenfor ser du en oversikt over hver av bloggene i denne Pivot-installasjonen sammen med filer lagd av Pivot og maler som brukes for � lage disse filene. Dette kan v�re nyttig for � finne ut n�yaktig hva som g�r feil ved opprettelse av filer.',

	'debug' => '�pne feils�kingsvindu',

	'latest_pivot_news' => "Siste nyheter om Pivot",
	'remove_setup_header' => "Pivot installasjonsskript tilstede",
	'remove_setup' => "Pivot installasjonsskriptet 'pivot-setup.php' er fortsatt tilstede in foreldremappen. Dette er en potensiell sikkerhetsrisiko. Vi anbefaler at du enten fjerner filen eller setter et blankt passord slik at det ikke kan bli brukt av folk med stygge hensikter.",
	'magic_quotes_header' => "Magic quotes aktivert",
	'magic_quotes' => "Din tjener har satt p� PHP-innstillingen 'Magic quotes'. Dette kan f� Pivot til � virke d�rlig. Les <a href='http://www.pivotlog.net/docs/doku.php?id=servers_with_magic_quotes'>dokumentasjonen</a> for � finne ut hvordan forbedre situasjonen.",
	'register_globals_header' => "Register Globals aktivert",
	'register_globals' => "Din tjener har satt p� PHP-innstillingen 'register globals'. Dette er en (potensielt) usikker innstilling, og du b�r virkelig pr�ve endre innstillingen. Les <a href='http://www.pivotlog.net/docs/doku.php?id=servers_with_register_globals'>dokumentasjonen</a> for � finne ut hvordan forbedre situasjonen.",
	'spamprotection' => "Spambeskyttelse",
	'spamprotection_title' => "Oversikt over spambeskyttelse",
	'spamconfig' => "Spamkonfigurering",
	'spamconfig_title' => "Konfigurer spambeskyttelsesverkt�y (som HashCash og SpamQuiz).",
	'seespamconfig_title' => 'Konfigurer spambeskyttelsesverkt�y',
	'spamwasher' => 'Spamvasker',
	'spamwasher_title' => 'S�k etter spam og slett det fra dine oppf�ringer og tilbaketr�kk.',
	'spamlog' => "Spamlogg",
	'spamlog_title' => "Vis og nullstill spamloggen.",
	'viewspamlog_title' => "Viser spamloggen",
);


$lang['templates'] = array (
	'rollback' => 'Restaurer',
	'create_template' => 'Opprett mal',
	'create_template_info' => 'Opprett en Pivot-mal fra grunnen av',
	'no_comment' => 'Ingen kommentar',
	'comment' => 'Kommentar*',
	'comment_note' => '(*Merknad: Kommentarer kan bare bli lagret ved <b>f�rste</b> lagring av endringer eller opprettelse)',
	'create' => 'Opprett maler',
	'editing' => 'Endringer',
	'filename' => 'Filenavn',
	'save_changes' => 'Lagre endringer!',
	'save_template' => 'Lagre mal!',
	'aux_template' => 'Hjelpemal',
	'sub_template' => 'Undermal',
	'standard_template' => 'Standardmal',
	'feed_template' => 'Str�mmal',
	'css_template' => 'CSS-fil',
	'txt_template' => 'Tekstfil',
	'php_template' => 'PHP-fil',
);


//		Maintenace		\\
$lang['maint'] = array (
	'title' => 'Vedlikehold',
	'gen_arc_title' => 'Bygg arkiv', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => 'Gjenoppbygg alle dine arkiver', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'Kontroller XML-filef', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'Kontroller (og reparer hvis n�dvendig) integriteten til XML-filene', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => 'Sikkerhetskopiering',
	'backup_text' => 'Opprett en sikkerhetskopi av alle Pivot sine essensielle filer',
);

//		Spam Protection		\\
$lang['spam'] = array (
	'hc_options' => 'HashCash-innstillinger',
	'hc' => 'Bruk HashCash',
	'hc_desc' => "HashCash er den kraftigste, fullstendig usynlige spambeskyttelse som finnes. Den krever Javascript aktivert hos klient. Hvis det ikke er akseptabelt for deg, m� du ikke aktivere denne.",
	'sq_options' => 'SpamQuiz-innstillinger',
	'sq' => 'Bruk SpamQuiz',
	'sq_desc' => "F�r en kommentar sendes, m� brukerne dine svare p� et enkelt sp�rsm�l som alle vet svaret p�. Dette stanser automatisert kommentarspam fordi hver eneste blogg har forskjellig sp�rsm�l (og svar).",
	'sq_question' => 'Sp�rsm�l',
	'sq_question_desc' => "Eksempel: Hva er de to f�rste bokstavene i ordet 'spam'?",
	'sq_answer' => 'Svar',
	'sq_answer_desc' => 'Eksempel: <b>sp</b>',
	'sq_explain' => 'Forklaring',
	'sq_explain_desc' => 'Eksempel: For � unng� automatisert kommentarspam, krever vi at du svarer p� dette vedlig enkle sp�rsm�let.',
	'sq_days' => 'Aldersgrense',
	'sq_days_desc' => 'Aktiver SpamQuiz kun for oppf�ringer eldre enn s� mange dager. Vanligvis blir automatisk kommentarspam kun sendt til gamle oppf�ringer og dermed er det ikke n�dvendig � plage dine vanlige brukere (som gjerne kommenterer innen det har g�tt f.eks. en uke).',
	'ht_options' => "Herdet tilbaketr�kk-innstillinger",
	'ht' => "Bruk herdet tilbaketr�kk",
	'ht_desc' => "Herdet tilbaketr�kk er en kraftig beskyttelse mot spam for tilbaketr�kk. Den krever Javascript aktivert hos klient. Hvis det ikke er akseptabelt for deg, m� du ikke aktivere denne.",
	'tburl_gen' => "Klikk for � generere URL for tilbaketr�kk",
	'tburl_gen_note' => "Merk: Generert URL er kun gyldig 15 minutter og Javascript er n�dvendig!",
	'tburl_gen_javascript' => 'Aktiver Javascript for � generere en URL for tilbaketr�kk.',
	'enable_js_comm' => 'Aktiver Javascript (og last siden p� nytt) for � legge til kommentarer.',
	'empty_log' => "Spamloggen er tom.",
	'reset_log' => "Nullstill spamlogg",
	'reset_log_done' => "Spamlogg nullstilt",
);


//		Stats and referers		\\
$lang['stats'] = array (
	'show_last' => "Vis de siste",
	'20ref' => "20 henvisere",
	'50ref' => "50 henvisere",
	'allref' => "alle henvisere",
	'showunblocked' => "bare ikke-blokkerte linjer",
	'showall' => "b�de blokkerte og ikke-blokkerte linjer",
	'updateref' => "Oppdater tittelhenvisermappingene",
	'hostaddress' => 'Tjeneradresse (IP-adresse)',
	'whichpage' => 'Hvilken side',

	'getting' => 'Henter nye titler',
	'awhile' => 'Dette kan ta litt tid, s� ikke avbryt.',
	'firstpass' => 'F�rste kj�ring',
	'secondpass' => 'Andre kj�ring',
	'nowuptodate' => 'Dine tittelhenvisermappinger er n� oppdatert.',
	'finished' => 'Ferdig',
);


//		User Info		\\
$lang['userinfo'] = array (
	'editfields' => 'Endre felt for brukere',
	'desc_editfields' => 'Endrer feltene som brukere kan bruke til � beskrive seg selv',
	'username' => 'Brukernavn',
	'pass1' => 'Passord',
	'pass2' => 'Passord (bekreft)',
	'email' => 'E-post',
	'nickname' => 'Kallenavn',
	'url' => 'URL',
	'verified' => 'Verifisert',
	'verified_desc' => 'Verifiser denne kontoen for brukeren.',
	'disabled' => 'Deaktivert',
	'disabled_desc' => 'Deaktivere denne kontoen (s� ingen kommentarer kan bli postet med dette navnet).',
	'userlevel' => 'Brukerniv�',
	'userlevel_desc' => 'Brukerniv� avgj�r hvilke handlinger brukeren kan utf�re i Pivot.',
	'language' => 'Spr�k',
	'lastlogin' => 'Siste innlogging',
	'users' => 'Brukere',
	'commusers' => 'Registrerte bes�kende',
	'edituser' => 'Endre bruker',
	'editcommuser' => 'Endre registrerte bes�kende',
	'edituserinfo' => 'Endre brukerinformasjon',
	'selfreg' => 'Selvregistrering',
	'newuser' => 'Opprett ny bruker',
	'desc_newuser' => 'Opprett en ny innloggingskonto for Pivot som tillater dem � poste til en blogg.',
	'newuser_button' => 'Opprett',
	'edituser_button' => 'Endre',
	'pass_too_short' => 'Passord m� ha minst 4 tegn.',
	'pass_equal_name' => 'Passordet kan ikke v�re det samme som brukernavnet.',
	'pass_dont_match' => 'Passordene er ulike',
	'username_in_use' => 'Brukernavn er allerede i bruk',
	'username_too_short' => 'Navnet m� v�re tre bokstaver eller lenger',
	'username_not_valid' => 'Brukernavn kan kun inneholde alfanumeriske tegn (A-Z, 0-9) og understreker (_).',
	'not_good_email' => 'Det er ingen gyldig e-postadresse',
	'c_admin_title' => 'Bekreft opprettelse av en '.$lang['userlevels']['1'],
	'c_admin_message' => 'En '.$lang['userlevels']['1'].' har full tilgang til Pivot, kan endre alle oppf�ringer, kommentarer og innstillinger. Er du sikker p� at du vil gj�re %s til en '.$lang['userlevels']['1'].'?',
);


//		Config Page		\\
$lang['config'] = array (
	'save' => 'Lagre innstillinger',

	'sitename' => 'Nettstedets navn',
	'defaultlanguage' => 'Standard spr�k',
	'defaultencoding' => 'Bruk koding',
	'defaultencoding_desc' => 'Dette definerer kodingen som er brukt (f.eks utf-8 eller iso-8859-1). Du b�r la dette feltet v�re �pent hvis du ikke vet hva du gj�r. Hvis du lar feltet v�re blankt, velges samme koding som oppgitt i spr�k(filen) du bruker.',
	'defaulttheme' => 'Tema',
	'selfreg' => 'Tillat selvregistrering',
	'selfreg_desc' => 'Hvis denne settes til ja, kan folk registrere seg som (vanlig) brukere og poste oppf�ringer. (Dette er ikke en "kommentar"-bruker.)',
	'xmlrpc' => 'Tillat XML-RPC',
	'xmlrpc_desc' => 'Hvis denne settes til ja, kan du poste fra et bloggprogram p� datamaskinen din (ved hjelp av MetaWeblog API-en).',
	'siteurl' => 'Nettstedets URL',
	'header_fileinfo' => 'File Info',
	'localpath' => 'Lokalsti',
	'debug_options' => 'Feils�kealternativ ',
	'debug' => 'Feils�kemodus',
	'debug_desc' => 'Vis vilk�rlig feils�keinformasjon',
	'log' => 'Loggfiler',
	'log_desc' => 'Lag loggfiler for forskjellige aktiviteter',

	'unlink' => 'Koble fra filer',
	'unlink_desc' => 'Noen tjenere som har safe_mode (PHP) aktivert, krever kanskje at man leker med denne innstillingen. P� de fleste tjenere har denne innstillingen ingen virkning',
	'chmod' => 'Endre filrettigheter (chmod) til',
	'chmod_desc' => 'Noen tjenere krever at opprettede filer f�r satt rettighetene (chmod) p� en spesiell m�te. Vanlige verdier er \'0644\' og \'0755\'. Ikke endre denne, hvis du ikke er helt sikker p� hva du gj�r',
	'header_uploads' => 'Filopplasting',
	'upload_path' => 'Filopplastingssti',
	'upload_accept' => 'Aksepterte filtyper',
	'upload_extension' => 'Standard filetternavn',
	'upload_save_mode' => 'Skriv over',
	'make_safe' => 'Rene filnavn',
	'c_upload_save_mode' => 'Inkrementelle filnavn',
	'max_filesize' => 'Maksimum filst�rrelse',
	'header_datetime' => 'Dato/Tid',
	'timeoffset_unit' => 'Tidsavvikenhet',
	'timeoffset' => 'Tidsavvik',
	'header_extra' => 'Forskjellige innstillinger',
	'wysiwyg' => 'Bruk Wysiwyg-redigering',
	'wysiwyg_desc' => 'Avgj�r om Wysiwyg-redigering er standard. Individuelle brukere kan endre dette under \'Mine innstillinger\'',
	'basic_view' => 'Bruk enkel visning',
	'basic_view_desc' => 'Avgj�r om nye oppf�ringer �pnes med enkel eller utvidet visning.',
	'def_text_processing' => 'Standard tekstbehandling',
	'text_processing' => 'Tekstbehandling',
	'text_processing_desc' => 'Avgj�r standard tekstbehandling n�r en bruker ikke har valgt Wysiwyg redigering. \'Omgj�r linjeskift\' endrer kun linjeskift til en &lt;br&gt;-tagg. <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> er en kraftig, men likevel lett � l�re, markeringsstil.',
	'none' => 'Ingen',
	'convert_br' => 'Omgj�r linjeskift til &lt;br /&gt;',
	'textile' => 'Textile',
	'markdown' => 'Markdown',
	'markdown_smartypants' => 'Markdown og Smartypants',

	'allowed_cats' => 'Tillatte kategorier',
	'allowed_cats_desc' => 'Denne brukeren har lov � poste oppf�ringer i de valgte kategoriene.',
	'delete_user' => 'Slett bruker',
	'delete_user_desc' => 'Du kan slette denne brukeren hvis du vil. Alle deres oppf�ringer vil best�, men de vil ikke lenger kunne logge inn.',
	'delete_user_confirm' => 'Du er i ferd med � fjerne tilgangen for %s. Er du sikker p� at du vil gj�re dette?',
	'delete_commuser' => "Slett registrert bes�kende",
	'delete_commuser_desc' => "Du kan slette denne registrerte bes�kende hvis du vil. Alle deres kommentarer blir bevart.",
	'delete_commuser_confirm' => 'Du er i ferd med � slette kontoen for %s. Er du sikker p� at du vil gj�re dette?',

	'setup_ping' => 'Ping-oppsett ',
	'ping_use' => 'Ping oppdateringssporere',
	'ping_use_desc' => 'Avgj�r om oppdateringssporere som weblogs.com skal automatisk varsles av Pivot n�r du poster en ny oppf�ring. Tjenester som blogrolling.com avhenger av slike varsler.',
	'ping_urls' => 'Send ping til f�lgende URL-er',
	'ping_urls_desc' => 'Du kan liste flere URL-er som det skal sendes ping til. Ikke ta med \'http://\'-delen, ellers virker det ikke. Plasser hver tjener p� en ny linje. Noen vanlige tjener er:<br /><b>rpc.weblogs.com/RPC2</b> (kanskje den mest brukte)<br /><b>pivotlog.net/pinger</b> (ikke i bruk enda)<br /><b>rcs.datashed.net/RPC2</b> <br /><b>ping.blo.gs</b> <br />',

	'setup_tb' => 'Tilbaketr�kk-oppsett',
	'tb_email' => 'Epost',
	'tb_email_desc' => 'Hvis oppgitt, s� vil en e-post bli sendt til denne adressen n�r et tilbaketr�kk blir lagt til.',

	'new_window' => '�pne lenker i nye vinduer',
	'emoticons' => 'Bruk f�leikon',
	'javascript_email' => 'Kod/skjul e-postadresser?',
	'new_window_desc' => 'Avgj�r om alle lenker i en oppf�ring vil �pnes i et nytt nettleservindu.',

	'mod_rewrite' => 'Bruk Mod_rewrite',
        'mod_rewrite_desc' => 'Hvis du bruker Apache sin Mod_rewrite-innstilling, s� vil Pivot lage URL-er som www.mysite.com/archive/2003/05/30/fin_tur, i steden for www.mysite.com/pivot/entry.php?id=134. Les <a href="http://www.pivotlog.net/docs/doku.php?id=using_apache_s_mod_rewrite">Using Apache\'s Mod_rewrite</a> i manualen for mer informasjon.',
	'mod_rewrite_1' => 'Ja, som /archive/2005/04/28/title_of_entry',
	'mod_rewrite_2' => 'Ja, som /archive/2005-04-28/title_of_entry',
	'mod_rewrite_3' => 'Ja, som /entry/1234',
	'mod_rewrite_4' => 'Ja, som /entry/1234/title_of_entry',

	'search_index' => 'Oppdater s�keindeks automatisk',
	'search_index_desc' => 'Avgj�r om s�keindeksfilene automatisk opdateres hver gang du poster en ny oppf�ring eller endrer en oppf�ring.',

	'default_allow_comments' => 'Tillatt kommentarer som standard',
	'default_allow_comments_desc' => 'Avgj�r om oppf�ringer er satt til � tillate kommentarer eller ikke.',
	'moderate_comments' => 'Moderer kommentarer',
	'moderate_comments_desc' => 'Avgj�r om kommentarer m� godkjennes f�r de vises.',

	'maxhrefs' => 'Antall lenker',
	'maxhrefs_desc' => 'Maksimalt antall lenker tillatt i kommentarer. Nyttig for � bli kvitt de plagsomme kommentar-spammerne. Sett til 0 for ubegrenset antall lenker.',
	'rebuild_threshold' => 'Gjennoppbyggingsgrense',
	'rebuild_threshold_desc' => 'Antall sekund det tar f�r Pivot oppdaterer siden. Standardverdien er 28 sekunder, men hvis du har problemer pr�v � senke verdien til 10.',
	'default_introduction' => 'Standard introduksjon/kropp',
	'default_introduction_desc' => 'Bestemmer standardverdiene for introduksjon og kropp for en ny oppf�ring. Vanligvis er dette et tomt avsnitt, som gir mest mening semantisk.',

	'upload_autothumb'	=> 'Automatiske miniatyrer',
	'upload_thumb_width' => 'Miniatyrbredde',
	'upload_thumb_height' => 'Miniatyrh�yde',
	'upload_thumb_remote' => 'Eksternt beskj�ringsskript',
	'upload_thumb_remote_desc' => 'Hvis tjeneren din ikke har de n�dvendig bibliotek installert, kan du bruke et eksternt beskj�ringsskript',

        'extensions_header' => 'Katalog for utvidelser',
        'extensions_desc'   => '\'Utvidelser\'-katalogen er plassen hvor du lagrer dine tillegg til Pivot. Dette gj�r oppdatering av Pivot mye enklere - se dokumentasjon for mer informasjon.',
        'extensions_path'   => 'Stien til katalogen for utvidelser',

	'tag_options' 	=> 'Innstillinger for merkelapper',
	'tag_cache' 	=> 'Varighet for hurtiglager',
	'tag_cache_desc' => 'Antall minutter mellom oppdatering av hurtiglageret for merkelappsidens innhold.',
	'tag_flickr' 	=> 'Vis Flickr-bilder',
	'tag_flickr_desc' => 'Hvis satt til \'Ja\', s� vil Pivot hente bilder med denne merkelappen fra Flickr.com.',
	'tag_flickr_amount' => 'Antall bilder',
	'tag_flickr_amount_desc' => 'Antall bilder som skal hentes fra Flickr.',
	'tag_fetcher' 	=> 'Vis str�mmer',
	'tag_fetcher_desc' => 'Hvis satt til \'Ja\', s� vil Pivot vise ikonene for � hente str�mmer med denne markelappen fra forskjellig kilder.',
	'tag_fetcher_amount' => 'Antall oppf�ringer',
	'tag_fetcher_amount_desc' => 'Antall oppf�ringer som skal hentes fra hver kilde.',
	'tag_min_font' => 'Minimum st�rrelse',
	'tag_max_font' => 'Maksimum st�rrelse',
	'tag_max_font_desc' => 'St�rrelsen (i piksler) brukt til visning av skyen med merkelapper. Merkelapper som brukes oftere vises med en st�rre skrift.',

);


//		Weblog Config	\\
$lang['weblog_config'] = array (
	'edit_weblog' => 'Endre blogg ',
	'edit_blog' => 'Endre blogger',
	'new_weblog' => 'Ny blogg',
	'new_weblog_desc' => 'Legg til en ny blogg',
	'del_weblog' => 'Slett blogg',
	'del_this_weblog' => 'Slett denne bloggen.',
	'create_new' => 'Opprett ny blogg',
	'subw_heading' => 'For hver av underbloggene som ble funnet kan du bestemme hvilke maler de bruker og hvilke kategorier som ksla publiseres i dem',
	'create' => 'Fullf�r',

	'create_1' => 'Opprett / endre blogg, steg 1 av 3',
	'create_2' => 'Opprett / endre blogg, steg 2 av 3',
	'create_3' => 'Opprett / endre blogg, steg 3 av 3',

	'name' => 'Bloggnavn',
	'payoff' => 'Undertittel',
	'payoff_desc' => 'Undertittel eller kort beskrivelse for bloggen din (payoff)',
	'url' => 'URL til bloggen',
	'url_desc' => 'Pivot avgj�r URL-en til bloggen din hvis feltet er tomt. Hvis du bruker bloggen din som en del av et rammesett (frameset) eller som en SSI (serverside include), s� kan du bruke dette feltet til � overstyre Pivot.',
	'index_name' => 'Forside (Index)',
	'index_name_desc' => 'Filnavnet for index-fila. Vanligvis \'index.html\' eller \'index.php\'.',

	'ssi_prefix' => 'SSI-prefiks',
	'ssi_prefix_desc' => 'Hvis bloggen din bruker SSI (som ikke er anbefalt), kan du bruke denne til � prefikse Pivot sine filnavn med filnavnet brukt for SSI-en (\'index.shtml?p=\'). Hvis du ikke er 100% sikker p� hva du gj�r b�r du la dette feltet st� tomt.',

	'front_path' => 'Sti til forsiden',
	'front_path_desc' => 'Den relative eller absolutte stien til katalogen hvor Pivot vil opprette forsiden for denne bloggen.',
	'file_format' => 'Filnavn',
	'entry_heading' => 'Innstillinger for oppf�ringer',
	'entry_path' => 'Stil til oppf�ringer',
	'entry_path_desc' => 'Den relative eller absolutte stien til katalogen hvor Pivot vil opprette enslige oppf�ringssider (hvis du velger � ikke bruke \'Levende oppf�ringer\')',
	'live_comments' => 'Levende oppf�ringer',
	'live_comments_desc' => 'Hvis du bruker \'Levende oppf�ringer\', trenger ikke Pivot � lage filer for hver enkelt oppf�ring. Dette er den foretrukne innstillingen.',
	'readmore' => '\'Les videre\'-tekst',
	'readmore_desc' => 'Teksten som forteller at det er mer � lese i denne oppf�ringen en det som er vist p� forsiden. Hvis tom, vil Pivot bruke standarden definert av det valgte spr�ket.',

	'arc_heading' => 'Arkivinnstillinger',
	'arc_index' => 'Indeksfil',
	'arc_path' => 'Arkivsti',
	'archive_amount' => 'Arkivst�rrelse',
	'archive_unit' => 'Arkivtype',
	'archive_format' => 'Arkivformat',
	'archive_none' => 'Ingen arkiv',
	'archive_weekly' => 'Ukentlige arkiv',
	'archive_monthly' => 'M�nedlige arkiv',
	'archive_yearly' => '�rlige arkiv',

	'archive_link' => 'Arkivlenke',
	'archive_linkfile' => 'Arkivlistformat',
	'archive_order' => 'Arkivrekkef�lge',
	'archive_ascending' => 'Eldste f�rst',
	'archive_descending' => 'Nyeste f�rst',

	'templates_heading' => 'Maler',
	'frontpage_template' => 'Forsidemal',
	'frontpage_template_desc' => 'Malen som bestemmer utseende p� forsiden for denne bloggen.',
	'archivepage_template' => 'Arkivsidemal',
	'archivepage_template_desc' => 'Malen som bestestemmer utseende p� arkivene. Dette kan v�re det samme som \'Forsidemal\'.',
	'entrypage_template' => 'Oppf�ringssidemal',
	'entrypage_template_desc' => 'Malen som bestestemmer utseende p� enslige oppf�ringer (p� egen side).',
	'extrapage_template' => 'Ekstra mal',
	'extrapage_template_desc' => 'Malen som bestestemmer utseende p� de dynamiske arkivsidene og s�kesiden .',

	'shortentry_template' => 'Kortoppf�ringsmal',
	'shortentry_template_desc' => 'Malen  som bestemmer utseende p� enslige oppf�ringer slik de er vist i selve bloggen eller arkivet.',
	'num_entries' => 'Antall oppf�ringer',
	'num_entries_desc' => 'Antall oppf�ringer i denne underbloggen som vil bli vist p� forsiden.',
	'offset' => 'Forskyving',
	'offset_desc' => 'Hvis forskyving er satt til et tall, s� vil den mengden av oppf�ringer hoppes over n�r siden lages. Du kan bruke dette til � lage en \'Tidligere oppf�ringer\'-liste for eksempel.',
	'comments' => 'Tillat kommentarer?',
	'comments_desc' => 'Avgj�r om bes�kende/brukere er i stand til � legge igjen kommentarer i denne underbloggen.',

	'publish_cats' => 'Publis�r disse kategoriene',

	'setup_rss_head' => 'RSS- og Atom-konfigurasjon',
	'rss_use' => 'Lag str�mmer',
	'rss_use_desc' => 'Avgj�r om Pivot automatisk lager en RSS- og Atom-str�m for denne bloggen.',
	'rss_filename' => 'RSS-filnavn',
	'atom_filename' => 'Atom-filnavn',
	'rss_path' => 'Sti til str�mmer',
	'rss_path_desc' => 'Den relative eller absolutte stien til katalogen hvor Pivot vil opprette str�mfilene.',
//	'rss_size' => 'Feed Entry Length',	/* DEPRECATED */
//	'rss_size_desc' => 'The length (in characters) of an entry in the Feed files', /* DEPRECATED */
	'rss_full' => 'Lag fullstendige str�mmer',
	'rss_full_desc' => 'Avgj�r om Pivot lager fullstendige Atom- eller RSS-str�mmer. Hvis satt til \'nei\', vil Pivot lage str�mmer som kun inneholder korte beskrivelse og dermed gj�re str�mmene dine mindre nyttige.',
	'rss_link' => 'Str�mlenke',
	'rss_link_desc' => 'Lenken som sendes sammen med str�mmen for � peke til hovedsiden. Hvis du ikke oppgir en lenke, vil Pivot sende bloggens startside som lenke.',
	'rss_img' => 'Str�mbilde',
	'rss_img_desc' => 'Du kan oppgi et bilde som sendes sammen med str�mmen. Noen str�mleser vil vise dette bildet vedsiden av str�mmen din. Oppgi fullstendig URL eller ingenting.',

	'lastcomm_head' => 'Innstillinger for siste kommentarer',
	'lastcomm_amount' => 'Vis hvor mange',
	'lastcomm_length' => 'Kutt ved lengde',
	'lastcomm_format' => 'Format',
	'lastcomm_format_desc' => 'Bestemmer utseende for \'Siste kommentarer\' p� webloggens forside.',
	'lastcomm_nofollow' => 'Bruk \'Nofollow\'',
	'lastcomm_nofollow_desc' => 'For � motkjempe henvisningsspam, kan du velge � legge attributtet rel="nofollow" til alle lenker i kommentarer og henvisere, siden dette vil hindre spammere til � f� en bedre siderangering (pagerank) hos Google.',

	'lastref_head' => 'Innstillinger for siste henvisere',
	'lastref_amount' => 'Vis hvor mange',
	'lastref_length' => 'Kutt ved lengde',
	'lastref_format' => 'Format',
	'lastref_format_desc' => 'Bestemmer utseende for \'Siste henvisere\' p� webloggens forside.',
	'lastref_graphic' => 'Bruk grafikk',
	'lastref_graphic_desc' => 'Avgj�r om siste henvisere bruker sm� ikoner for de mest vanlige s�kemotoren som bes�kende kan komme via.',
	'lastref_redirect' => 'Omadresser henvisere',
	'lastref_redirect_desc' => 'For � motkjempe henvisningsspam, kan du velge � omadressere utg�ende lenker til henvisere, siden dette ikke vil hjelpe spammere til � f� en bedre siderangering (pagerank) hos Google.',

	'various_head' => 'Forskjellige innstillinger',
	'emoticons' => 'Bruk f�leikon',
	'emoticons_desc' => 'Avgj�r om f�leikon som :-) blir transformert til sine grafiske ekvivalenter.',
	'encode_email_addresses' => 'Kode e-postadresser',
	'encode_email_addresses_desc' => 'Avgj�r om e-postadresser kodes i javascript for � beskytte mot e-postsamlere (spam).',
	'target_blank' => 'Target Blank',
	'xhtml_workaround' => 'XHTML-fiks',
	'target_blank_desc' => 'Hvis \'Ja\', s� vil alle lenker i dine oppf�ringer bli �pnet i et nytt nettleservindu. Hvis \'XHTML-fiks\', s� vil alle lenker ha en rel="external" attributt, som ikke �delegger velformet XHTML',
	'search_format' => "Formatering av s�keresultat",
	'search_format_desc' => "Denne bestemmer formatering av s�keresultatene p� s�kesiden. Den best�r av fem deler (separert av linjene '----'): Topp, sammendrag, starten av s�keresultatene, hvert s�keresultat og slutten av s�keresultatene. Du kan finne alle detaljene rundt formateringen i <a href='http://pivotlog.net/docs/doku.php?id=working_with_search_results'>dokumentasjonen</a>.",

	'date_head' => 'Datovisningsinnstillinger',
	'full_date' => 'Fullt datoformat',
	'full_date_desc' => 'Bestemmer formatet for full dato og tid. Som regel brukt p� toppen av en enslig oppf�ringsside',
	'entry_date' => 'Oppf�ringsdato',
	'diff_date' => 'Diff Date',
	'diff_date_desc' => '\'Diff Date\' er vanligvis brukt i forbindelse med \'Oppf�ringsdato\'. Oppf�ringsdatoen blir vist p� hver oppf�ring i bloggen, mens \'Diff Date\' bare blir vist hvis datoen er forskjellig fra forrige oppf�ring.',
	'language' => 'Spr�k',
	'language_desc' => 'Bestemmer p� hvilket spr�k datoene og tallene blir vist, og hvilket tegnsett som blir brukt.',

	'comment_head' => 'Kommentarinnstillinger',
	'comment_sendmail' => 'Sende e-post?',
	'comment_sendmail_desc' => 'Etterat en kommentar har blitt plassert, kan e-post bli sendt til bloggeieren.',
	'comment_emailto' => 'Send til',
	'comment_emailto_desc' => 'Oppgi e-postadressen(e) til den som skal motta melding. (Skill adressene med komma.)',
	'comment_texttolinks' => 'Tekst til lenker',
	'comment_texttolinks_desc' => 'Avgj�r om URL-er og e-postadresse skal gj�res klikkbare.',
	'comment_wrap' => 'Bryt linjene i kommentarer etter',
	'comment_wrap_desc' => 'For � hindre at lange tekststrenger �delegger sideoppsettet ditt, vil teksten bli brutt etter det oppgitte antall tegn.',
	'comments_text_0' => 'Tekst for \'ingen kommentarer\'',
	'comments_text_1' => 'Tekst for \'en kommentar\'',
	'comments_text_2' => 'Tekst for \'X kommentarer\'',
	'comments_text_2_desc' => 'Teksten som forteller hvor mange kommentarer det er. Hvis du lar feltet v�re tomt, vil Pivot bruke standard for det valgte spr�ket.',

	'comment_pop' => 'Kommentarsprettopp?',
	'comment_pop_desc' => 'Avgj�r om kommentarside (eller \'enslig oppf�ring\') vises i et sprettoppvindu eller i det original nettleservinduet.',
	'comment_width' => 'Sprettoppbredde',
	'comment_height' => 'Sprettopph�yde',
	'comment_height_desc' => 'Oppgi bredde og h�yde (i piksler) for kommentarsprettoppene.',

	'comment_format' => "Formatering av kommentarer",
	'comment_format_desc' => "Denne bestemmer formatering av kommentarer p� siden for oppf�ringer.",

	'comment_reply' => "Formatering av 'svar ..'",
	'comment_reply_desc' => "Denne bestemmer formatering av lenka som bes�kende kan bruke for � svare p� en spesifikk kommentar.",
	'comment_forward' => "Formatering av 'svar fra ..'",
	'comment_forward_desc' => "Denne bestemmer formatering av teksten som vises n�r en kommentar er besvart med en annen kommentar.",
	'comment_backward' => "Formatering av 'svar p� ..'",
	'comment_backward_desc' => "Denne bestemmer formatering av teksten som vises n�r en kommentar er svar p� en annen kommentar.",

	'comment_textile' => 'Tillat Textile',
	'comment_textile_desc' => 'Hvis \'Ja\', s� har bes�kende lov til � bruke <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> kommentarene sine.',
	'save_comment' => 'Lagre kommentar',
	'comment_gravatardefault' => 'Standard gravatar',
	'comment_gravatardefault_desc' => 'URL til standard gravatar-bilde.  Starter med http://',
	'comment_gravatarhtml' => 'Gravatar-HTML',
	'comment_gravatarhtml_desc' => 'HTML som skal settes inn for en gravatar. %img% byttes ut med URL-en til bildet.',
	'comment_gravatarsize' => 'Gravatar-st�rrelse',
	'comment_gravatarsize_desc' => 'St�rrelse (i piksler) for gravatar-bildet. Standardverdien er 48.',
	
	'trackback_head' => 'Tilbaketr�kkinnstillinger',
	'trackback_sendmail' => 'Sende e-post?',
	'trackback_sendmail_desc' => 'Etterat et tilbaketr�kk har blitt plassert, kan e-post bli sendt til bloggeieren.',
	'trackback_emailto' => 'Send til',
	'trackback_emailto_desc' => 'Oppgi e-postadressen(e) til den som skal motta melding. (Skill adressene med komma.)',
	'trackbacks_text_0' => 'Tekst for \'ingen tilbaketr�kk\'',
	'trackbacks_text_1' => 'Tekst for \'ett tilbaketr�kk\'',
	'trackbacks_text_2' => 'Tekst for \'X tilbaketr�kk\'',
	'trackbacks_text_2_desc' => 'Teksten som forteller hvor mange tilbaketr�kk det er. Hvis du lar feltet v�re tomt, vil Pivot bruke standard for det valgte spr�ket.',
	'trackback_pop' => 'Tilbaketr�kksprettopp?',
	'trackback_pop_desc' => 'Avgj�r om tilbaketr�kkside (eller \'enslig oppf�ring\') vises i et sprettoppvindu eller i det original nettleservinduet.',
	'trackback_width' => 'Sprettoppbredde',
	'trackback_height' => 'Sprettopph�yde',
	'trackback_height_desc' => 'Oppgi bredde og h�yde (i piksler) for tilbaketr�kksprettoppene.',
	'trackback_format' => "Formatering av tilbaketr�kk",
	'trackback_format_desc' => "Denne bestemmer formatering av tilbaketr�kk p� siden for oppf�ringer.",
	'trackback_link_format' => "Formatering av tilbaketr�kklenke",
	'save_trackback' => 'Lagre tilbaketr�kk',

	'saved_create' => 'Den nye bloggen har blitt opprettet.',
	'saved_update' => 'Bloggen har blitt oppdatert.',
	'deleted' => 'Bloggen har blitt slettet.',
	'confirm_delete' => 'Du er iferd med � slette bloggen  %1. Er du sikker?',

	'blogroll_heading' => 'Blogroll-innstillinger',
	'blogroll_id' => 'Blogrolling ID #',
	'blogroll_id_desc' => 'Du kan frivillig inkludere en <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a>-blogroll i bloggen din. Blogrolling er en fremragende tjeneste for � vedlikeholde en liste av lenker, som viser hvor nylig de var oppdatert. Hvis du ikke �nsker dette, kan du bare hoppe over disse feltene.',
        'blogroll_fg' => 'Tekstfarge',
	'blogroll_bg' => 'Bakgrunnsfarge',
	'blogroll_line1' => 'Linjefarge 1',
	'blogroll_line2' => 'Linjefarge 2',
	'blogroll_c1' => 'Farge 1',
	'blogroll_c2' => 'Farge 2',
	'blogroll_c3' => 'Farge 3',
	'blogroll_c4' => 'Farge 4',
	'blogroll_c4_desc' => 'Disse fargene avgj�r hvordan blogroll-en din vil se ut. Farge 1 til 4 gir en visuell indikasjon p� hvor nylig en lenke er oppdatert.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => 'Fullstendig listeforh�ndsvisning',
	'thumbs' => 'Miniatyrforh�ndsvisning',
	'create_thumb' => '(Lag miniatyr)',
	'title' => 'Filer',
	'thisfile' => 'Last opp en ny fil:',
	'button' => 'Last opp',
	'filename' => 'Filnavn',
	'thumbnail' => 'Miniatyr',
	'date' => 'Dato',
	'filesize' => 'Filst�rrelse',
	'dimensions' => 'Bredde x h�yde',
	'delete_title' => 'Slette bilde',
	'areyousure' => 'Er du sikker p� at du vil slette filen %s?',
	'picheader' => 'Slette dette bildet?',
	'create' => 'opprett',
	'edit' => 'endre',

	'insert_image' => 'Sett inn et bilde',
	'insert_image_desc' => 'For � sette inn et bilde m� du laste opp et bilde eller velge ett bilde som allerede er lastet opp.',
	'insert_image_popup' => 'Sett inn et sprettoppbilde',
	'insert_image_popup_desc' => 'For � lage en sprettopp for et bilde m� du laste opp et bilde eller velge ett bilde som allerede er lastet opp. S� m� du velge tekst eller miniatyr som utl�ser sprettoppen',
	'choose_upload' => 'last opp',
	'choose_select' => 'eller velg',
	'imagename' => 'Bildenavn',
	'alt_text' => 'Alternativ tekst (alt-tagg)',
	'align' => 'Align',
	'border' => 'Bord',
	'pixels' => 'piksler',
	'uploaded_as' => 'Filen din ble lastet opp som \'%s\'.',
	'not_uploaded' => 'Filen din ble ikke lastet opp, og f�lgende feil oppstod:',
	'center' => 'Senter (standard)',
	'left' => 'Venstre',
	'right' => 'H�yre',
	'inline' => 'Inline',
	'notice_upload_first' => 'Du m� f�rst velge eller laste opp et bilde',
	'select_image' => 'Velge bilde',
	'select_file' => 'Velge fil',

	'for_popup' => 'For sprettopp',
	'use_thumbnail' => 'Bruk miniatyr',
	'edit_thumbnail' => 'endre miniatyr',
	'use_text' => 'Bruk tekst',
	'insert_download' => 'Sett inn en nedlasting',
	'insert_download_desc' => 'For � lage en filnedlasting, m� du laste opp en fil eller velge en tidligere opplastet fil. S� velger du om du vil bruke et ikon, tekst eller en miniatyr for � starte nedlastingen.',
	'use_icon' => 'Bruk ikon',
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => 'Sett inn ei lenke',
	'insert_link_desc' => 'Sett inn ei lenke, ved � skrive en URL i feltet under. Be�skende vil se tittelen n�r de har musa over lenka.',
	'url' => 'URL',
	'title' => 'Tittel',
	'text' => 'Tekst',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => 'Sett hvem som kan redigere i kategorien \'%s\'',
	'name' => 'Navn',
	'users' => 'Brukere',
	'make_new' => 'Opprett ny kategori',
	'create' => 'Opprett kategori',
	'canpost' => 'Velg brukerne du vil at skal ha lov til � post i denne kategorien',
	'same_name' => 'En kategori med dette navnet fins allerede',
	'need_name' => 'Denne kategorien trenger et navn',

	'allowed' => 'Tillatt',
	'allow' => 'Tillat',
	'denied' => 'Forbudt',
	'deny' => 'Forby',
	'edit' => 'Endre kategori',

	'delete' => 'Slette kategori',
	'delete_desc' => 'Velg \'ja\', hvis du vil slette denne kategorien',

	'delete_message' => 'I denne utgaven av Pivot slettes bare kategorinavnet. I senere utgaver kan du velge hva du vil gj�re med oppf�ringene i kategorien.',
	'search_index_newctitle'   => 'Indeks�r denne kategorien',
	'search_index_newcdesc'    => 'Sett til \'Nei\' bare hvis du ikke vil at bes�kende skal kunne s�ke i denne kategorien.',
	'search_index_editcheader' => 'Indeks�r kategori',

	'order' => 'Sorteringsregler',
	'order_desc' => 'Kategorier med lav sorteringsverdi vil vises h�yere i lista. Hvis alle nummerne er de samme, s� sorteres kategoriene alfabetisk.',
	'public' => 'Offentlig kategori',
	'public_desc' => 'Hvis satt til \'Nei\', s� vil denne kategorien kunne v�re synlig for registrerte bes�kende. (Gjelder kun for levende sider.)',
	'hidden' => 'Skjult kategori',
	'hidden_desc' => 'Hvis satt til \'Ja\', s� vil denne kategorien bli skjult i arkivoppf�ringene. (Gjelder kun for levende sider.)',
		
);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "Send oppf�ring",
	'preview_entry' => "Forh�ndsvis oppf�ring",
	'edit_entry' => "Endre oppf�ring",
	'edit_entry_desc' => "Endre denne oppf�ringen",

	'first' => 'f�rst',
	'last' => 'sist',
	'next' => 'neste',
	'previous' => 'forrige',

	'jumptopage' => 'hopp til side (%num%)',
	'filteron' => 'filtrer med (%name%)',
	'filteroff' => 'filtrering av',
	'title' => 'Tittel',
	'subtitle' => 'Undertittel',
	'introduction' => 'Introduksjon',
	'body' => 'Kropp',
	'publish_on' => 'Publisert p�',
	'status' => 'Status',
	'post_status' => 'Status for oppf�ring',
	'category' => 'Kategori',
	'select_multi_cats' => '(Ctrl-klikk for � velge flere kategorier samtidig)',
	'last_edited' => "Sist endret p�",
	'created_on' => "Opprettet p�",
	'date' => 'Dato',
	'author' => 'Forfatter',
	'code' => 'Kode',
	'comm' => '# komm',
	'track' => '# tr�kk',
	'name' => 'Navn',
	'allow_comments' => 'Tillatt kommentarer',

	'delete_entry' => "Slett oppf�ring",
	'delete_entry_desc' => "Slett denne oppf�ringen og korresponderende kommentarer",
	'delete_one_confirm' => "Er du sikker p� at du vil slette denne oppf�ringen?",
	'delete_multiple_confirm' => "Er du sikker p� at du vil slette disse oppf�ringene?",

	'convert_lb' => 'Omgj�r linjeskift',
	'always_off' => '(Denne er alltid avsl�tt under Wysiwyg-redigering)',
	'be_careful' => '(V�r forsiktig med denne!)',
	'edit_comments' => 'Endre kommentarer',
	'edit_comments_desc' => 'Endre kommentarene som har blitt postet p� denne oppf�ringen',
	'edit_comment' => 'Endre kommentar',
	'delete_comment' => 'Slett kommentar',
	'report_comment' => 'Rapporter kommentar',
	'edit_trackback' => 'Endre tilbaketr�kk',
	'edit_trackback_desc' => 'Endre tilbaketr�kk som har blitt postet p� denne oppf�ringen',
	'delete_trackback' => 'Slett tilbaketr�kk',
	'report_trackback' => 'Rapporter tilbaketr�kk',
	'block_single' => 'Blokker IP %s',
	'block_range' => 'Blokker IP-omr�de %s',
	'unblock_single' => 'Avblokker IP %s',
	'unblock_range' => 'Avblokker IP-omr�de %s',
	'trackback' => 'Tilbaketr�kk-ping',
	'trackback_desc' => 'Send tilbaketr�kk-pinger til f�lgende URL(-er). For � sende til flere URL-er, plasser hver URL p� en separat linje.',
	'keywords' => 'N�kkelord',
	'keywords_desc' => 'Bruk denne for � sette n�kkelord som kan s�kes etter for � finne denne oppf�ringen, eller for � sette en enklere URL for denne oppf�ringen.',
	'vialink' => "Via-lenke ",
	'viatitle' => "Via-tittel",
	'via_desc' => 'Bruk denne for � sette en lenke til kilden for denne oppf�ringen.',
	'entry_catnopost' => 'Du har ikke lov til � poste i kategorien: \'%s\'.',
	'entry_saved_ok' => 'Din oppf�ring \'%s\' ble lagret uten problemer.',
	'entry_ping_sent' => 'En tilbaketr�kk-ping har blitt sendt til \'%s\'.',
	'encoding_warning' =>'Du skriver denne oppf�ringen i %s mens minst en av bloggene dine bruker et annet tegnsett. For � forhindre slike problemer, b�r du forsikre deg om at alle brukere og blogger bruker samme tegnsett.',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'Kryss av alle',
	'c_none' => 'Fjern alle kryss',
	'choose' => '- velg et alternativ -',
	'publish' => 'Sett status til \'publisert\'',
	'hold' => 'Sett status til \'vent\'',
	'delete' => 'Slett dem',
	'generate' => 'Publiser og generer',

	'with_checked_entries' => "Med de avkryssede oppf�ringene, utf�r:",
	'with_checked_files' => "Med de avkryssede filene, utf�r:",
	'with_checked_templates' => 'Med de avkryssede malene, utf�r:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => 'kan ikke �pne katalog, kontroller dine rettigheter.',
	'path_read' => 'kan ikke lese katalog, kontroller dine rettigheter.',
	'path_write' => 'kan ikke skrive til katalog, kontroller dine rettigheter.',

	'file_open' => 'kan ikke �pne fil, kontroller dine rettigheter.',
	'file_read' => 'kan ikke lese fil, kontroller dine rettigheter.',
	'file_write' => 'kan ikke skrive til fil, kontroller dine rettigheter.',

	'reg_required' => 'Registrering kreves',
	'entry_404' => 'Oppf�ringen eksisterer ikke!',  
	'entry_404_desc' => "Denne oppf�ringen eksisterer ikke eller har ikke blitt publisert enda.",  
	'category_404' => 'Kategorien eksisterer ikke!',  
	'category_404_desc' => "Denne kategorien eksisterer ikke eller publiseres ikke av noen weblogg.",  
);


//		Notices			\\
$lang['notice'] = array (
	'comment_saved' => "Kommentaren har blitt lagret.",
	'comment_deleted' => "Kommentaren har blitt slettet.",
	'comment_none' => "Denne oppf�ringen har ingen kommentarer.",
	'trackback_saved' => "Tilbaketr�kket har blitt lagret.",
	'trackback_deleted' => "Tilbaketr�kket har blitt slettet.",
	'trackback_none' => "Denne oppf�ringen har ingen tilbaketr�kk.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => 'Stem \'%val%\' p� denne oppf�ringen',
	'good' => 'Bra',
	'bad' => 'D�rlig',
	'already' => 'Du har allerede stemt p� denne oppf�ringen',
	'register' => 'Din stemme for  \'%val%\' har blitt registrert',
);


$lang['comment'] = array (
	'register' => 'Din kommentar har blitt lagret.',
	'preview' => 'Forh�ndsvisning av kommentaren din. Klikk \'Send kommentar\' for � lagre den.',
	'duplicate' => 'Kommentaren din har ikke bli lagret, siden den ser ut til � v�re en duplikat av en tidligere oppf�ring',
	'no_name' => 'Du m� skrive navnet ditt (eller et alias) i \'navn\'-feltet. Klikk \'Send kommentar\' for � lagre den permanent.',
	'no_comment' => 'Du m� skrive noe i \'kommentar\'-feltet. Klikk \'Send kommentar\' for � lagre den permanent.',
	'too_many_hrefs' => 'Maksimalt antall lenker oversteget. Stopp spamming.',
	'email_subject_comm' => '[Kommentar]',
	'email_subject_notify' => '[P�minnelse]',
	'email_posted_comm' => "'%s' postet f�lgende kommentar",
	'email_comm_on' => "Dette er en kommentar til oppf�ringen '%s'",
	'email_allow_comm' => "Tillatt denne kommentaren",
	'email_delete_comm' => "Slett denne kommentaren",
	'email_view_comm' => "Vis denne kommentaren",
	'email_edit_comm' => "Rediger denne kommentaren",
	'email_posted_entry' => "'%s' postet f�lgende oppf�ring",
	'email_view_entry' => "Vis denne oppf�ringen",
	'email_view_fullentry' => "Vis den komplette oppf�ringen",
	'email_view_settings' => "Vis dine innstillinger",
	'email_sent_to' => "Denne e-posten ble sendt til",
	'email_notified' => "P�minnelser ble sendt til",
	'email_posted_tb' => "'%s' postet f�lgende tilbaketr�kk",
	'email_tb_on' => "Dette er et tilbaketr�kk p� oppf�ringen '%s'",
	'email_edit_tb' => "Rediger dette tilbaketr�kket",
	'email_block_ip' => "Blokker denne IP-en",
	'notifications' => "p�minnelser",
	'oneclickdelete' => "Slett med ett klikk.", 
	'oneclickreport' => "Rapporter og slett med ett klikk.", 
	'moderated' => "Moderert",
	'moderate_queue_on' => "Kommentarmoderasjon er aktivert p� dette nettstedet. Dette betyr at din kommentar ikke vil bli synlig f�r den har blitt godkjent av en redakt�r.",
	'moderate_stored' => "Din kommentar er lagret. Fordi kommentarmoderasjon er aktivert, venter den n� p� godkjenning fra en redakt�r.",
	'moderate_waiting' => "En eller flere kommentarer venter p� godkjenning fra en redakt�r",
);


$lang['comments_text'] = array (
	'0' => "Ingen kommentarer",
	'1' => "Bare en kommentar",
	'2' => "Allerede %num% kommentarer",
);

$lang['trackbacks_text'] = array (
	'0' => "Ingen tilbaketr�kk",
	'1' => "Bare et tilbaketr�kk",
	'2' => "Allerede %num% tilbaketr�kk",
);

$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "Arkiv",
	'next_archive' => "Neste arkiv",
	'previous_archive' => "Forrige arkiv",
	'last_comments' => "Siste kommentarer",
	'last_referrers' => "Siste henvisere",
	'calendar' => "Kalender",
	'links' => "Lenker",
	'xml_feed' => "XML: RSS-str�m (2.0)",
        'atom_feed' => "XML: Atom-str�m",
	'powered_by' => "Drevet av",
	'blog_name' => "Bloggnavn",
	'title' => "Tittel",
	'excerpt' => "Utdrag",
	'name' => "Navn",
	'email' => "E-post",
	'url' => "URL",
	'date' => "Dato",
	'comment' => "Kommentar",
	'ip' => "IP-adresse",
	'yes' => "Ja",
	'no' => "Nei",
	'emoticons' => "F�leikon",
	'emoticons_reference' => "�pne referanse for f�leikon",
	'textile' => "Textile",
	'textile_reference' => "�pne referanse for Textile",
	'post_comment' => "Send kommentar",
	'preview_comment' => "Forh�ndsvis kommentar",
	'remember_info' => "Husk personlig info?",
        'notify' => "Varsling",
	'notify_yes' => "Ja, send meg en e-post n�r noen svarer.",
	'register' => "Registrer ditt brukernavn / logg inn",
	'registered' => "Registert",
	'disclaimer' => "<b>Merk:</b> Alle HTML-tagger utenom &lt;b&gt; og &lt;i&gt; fjernes fra kommentarer. Du kan lage lenker ved � skrive URLen eller e-postadressen rett inn i teksten.",
	'search_title' => "S�keresultat",
	'search' => "S�k!",
	'nomatches' => "Ingen treff for '%name%'. Pr�v med noe annet.",
	'matches' => "Treff for '%name%':",
	'about' => "Om",
	'stuff' => "Diverse",
	'linkdump' => "Lenkedump",
	'discreet' => "Skjul e-post",
	'discreet_yes' => "Ja, skjul min e-postadresse.",
	'moderated' => "Moderert",
	'waiting_moderation' => "Denne kommentar er enda ikke moderert.",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Endre brukerfelt',
	'edit' => 'Endre',
	'create' => 'Opprette',

	'dispname' => 'Visningsnavn',
	'intname' => 'Internt navn',
	'intname_desc' => 'Internt navn er navnet p� dette feltet slik det vil vises n�r du forteller Pivot � vise det i en mal.',
	'size' => 'St�rrelse',
	'rows' => 'Rekker',
	'cols' => 'Kolonner',
	'maxlen' => 'Maksimum lengde',
	'minlevel' => 'Min. brukerniv�',
	'filter' => 'Filtrer med',
	'filter_desc' => 'Ved � filtrere dette feltet, kan du begrense hva slags inndata som kan bli brukt',
	'no_filter' => 'Ingenting',
	'del_title' => 'Bekreft sletting',
	'del_desc' => 'Sletting av dette brukerfeltet (<b>%s</b>) vil ogs� slette all data som brukerne har lagret i det, samt at alle instanser av det i malen vil vises tomt.',

	'already' => 'Dette navnet er allerede i bruk',
	'int' => 'Internt navn m� v�re lenger enn 3 tegn',
	'short_disp' => 'Visningsnavn m� v�re lenger enn 3 tegn',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'Skriptbokmerker',
	'bm_add' => 'Legg til skriptbokmerke',
	'bm_withlink' => 'Pivot � Ny (med lenke)',
	'bm_withlink_desc' => 'Dette skriptbokmerket �pner et vindu med en ny oppf�ring som inneholder en lenke til siden den ble �pnet fra.',

	'bm_nolink' => 'Pivot � Ny',
	'bm_nolink_desc' => 'Dette skriptbokmerket �pner et vindu med en ny tom oppf�ring.',

	'bookmarklets_info' => 'Du kan bruke skriptbokmerker for � raskt skrive nye oppf�ringer med Pivot. For � legge til et skriptbokmerke i en nettleser, bruk en av de f�lgende valgene: (Eksakt tekst varierer fra nettleser til nettleser.)',
	'bookmarklets_info_1' => 'Klikk og dra skriptbokmerket til din lenkeverkt�ylinje eller din nettlesers \'Bokmerker\'-knapp.',
	'bookmarklets_info_2' => 'H�yreklikk p� skriptbokmerket og velg \'Legg til i bokmerker\'.',
);

// Accessibility - These are used for form fields, labels, fieldsets etc.
// for Web Content Accessibility Guidelines & 508 compliancy issues.
// see: http://bobby.watchfire.com/bobby/html/en/index.jsp
// JM =*=*= 2004/10/04
// 2004/11/25 =*=*= JM - minor correction for tim
$lang['accessibility'] = array(
        'search_idname'      => 's�k',
        'search_formname'    => 'S�k etter ord brukt i oppf�ringer p� dette nettstedet',
        'search_fldname'     => 'Skriv inn s�keord her:',
        'search_placeholder' => 'Skriv inn s�keord',

        'calendar_summary'   => 'Denne tabellen representerer en kalender over oppf�ringene i webloggen med lenker p� dager med oppf�ringer.',
        'calendar_noscript'  => 'Denne kalenderen gj�r det mulig � velge oppf�ringer i denne webloggen',
        /*
        2-letter language code, used to designate the principal language used on the site
        see: http://www.oasis-open.org/cover/iso639a.html
        */

        'lang' => $langname,
) ;


$lang['snippets_text'] = array (
    'word_plural'     => 'ord',
    'image_single'    => 'bilde',
    'image_plural'    => 'bilder',
    'download_single' => 'fil',
    'download_plural' => 'filer',
);

$lang['trackback'] = array (
    'register' => 'Ditt tilbaketr�kk har blitt lagret.',
    'duplicate' => 'Tilbaketr�kket ditt har ikke bli lagret, siden den ser ut til � v�re en duplikat.',
    'too_many_hrefs' => 'Maksimalt antall lenker oversteget. Stopp spamming.',
    'noid'      => 'Ingen tilbaketr�kk-ID (tb_id)',
    'nourl'     => 'Ingen URL (url)',
    'tracked'   => 'Tilbaketr�kket',
    'email_subject' => '[Tilbaketr�kk]',
);

$lang['commentuser'] = array (
    'title'             => 'Pivot brukerinnlogging',
    'header'            => 'Logg inn som registrert bes�kende',
    'logout'            => 'Logg ut.',
    'loggedout'         => 'Logget ut',
    'login'             => 'Logg inn',
    'loggedin'          => 'Logget inn',
    'loggedinas'        => 'Logget inn som',
    'pass_forgot'       => 'Glemt passordet?',
    'register_new'      => 'Registrer et nytt brukernavn.',
    'register'          => 'Registrer som en bes�kende',
    'register_info'     => 'Fyll ut f�lgende informasjon. <strong>V�r sikker p� at e-postadressen er gyldig</strong>, fordi vi sender e-post med verifikasjonsdata til den adressen.',
    'pass_note'         => 'Merk: Det er mulig for eieren av dette nettstedet � se passordet ditt. <br /> <em>Ikke</em> bruk et passord som du er redd for eller bruker andre steder!',
    'show_email'        => 'Vis e-postadressen min sammen med kommentaren',
    'notify'            => 'Varsle om nye oppf�ringer p� e-post',
    'def_notify'        => 'Standard varsling ved svar',
    'register'          => 'Registrer',
    'pass_invalid'      => 'Ugyldig passord',
    'user_disabled'     => 'Bruker deaktivert',
    'nouser'            => 'Ukjent brukernavn',
    'change_info'       => 'Her kan du endre informasjonen din.',
    'pref_edit'         => 'Endre dine innstillinger.',
    'pref_change'       => 'Endre innstillinger',
    'options'           => 'Innstillinger',
    'user_exists'       => 'Brukernavn eksisterer allerede - velg et annet navn.',
    'email_note'        => 'Du m� oppgi en gyldig e-postadresse, slik at vi kan verifisere kontoen din. Du kan ogs� velge � vise e-postadressen din etter kommentarene du skriver.',
    'stored'            => 'Endringene har blitt lagret',
    'verified'          => 'Kontoen er verifisert. Logg inn.',
    'not_verified'      => 'Verifikasjonskoden ser ut til � v�re ugyldig.',
    'pass_sent'         => 'Passord er sendt til e-postadressen du oppga.',
    'user_pass_nomatch' => 'Brukernavn og passord stemmer ikke overens.',
    'user_stored'       => 'Bruker lagret!',
    'user_stored_failed' => 'Klarte ikke lagre ny bruker!',
    'pass_send'         => 'Send passord',
    'pass_send_desc'    => 'Hvis du har glemt passordet ditt, fyll inn brukernavn og e-postadresse og s� vil Pivot sende deg passordet p� e-post.',
    'oops'              => 'Oops',
    'back'              => 'Tilbake til',
    'back_login'        => 'Tilbake til innlogging',
    'forgotten_pass_mail' => "Ditt glemte passord for Pivot '%name%' er: \n\n%pass%\n\nIkke glem det igjen ;-)\n\nFor � logge inn p� din konto, bruk f�lgende lenke:\n %link%",
    'registered'        => "Du har registrert deg som en ny bruker p� Pivot '%s'",
    'reg_confirmation'  => 'Bekreftelse av registrering',
    'reg_verify_short'  => 'Verifiser kontoen din',
    'reg_verify_long'   => "For � verifisere kontoen din, klikk f�lgende lenke:\n %s",
    'reg_verification'  => 'E-postverifisering sendt til %s. Sjekk e-posten din om ett minutt eller to for � bekrefte kontoen din.'
);

$lang['tags'] = array (
    'tag'               => "Merkelapp",
    'tags'              => "Merkelapper",
    'tags_in_posting'	=> "Merkelapper brukt i denne oppf�ringen",
    'click_for_universe'	=> "G� til siden med det lokale merkelappuniverset. ",
    'localcosmos_description'	=> "Dette er det lokale merkelappuniverset for denne bloggen. Jo st�rre merkelapp, jo flere oppf�ringer i bloggene er relatert til den. Merkelappene er sortert alfabetisk. Klikk en merkelapp for � finne ut mer.<br/><br/>",
    'tagoverview_header'	=> "Merkelapp oversikt for: ",
    'entries_with_tag'	=> "Oppf�ringer i denne bloggen med ",
    'related_tags'	=> "Relaterte merkelapper",
    'no_related_tags'	=> "Ingen relaterte merkelapper",
    'latest_on'	        => "Siste p�",
    'flickr_images'	=> "Flickr-bilder for",
    'external_feeds'	=> "Eksterne str�mmer for",
    'nothing_on'	=> "Ingenting om",
    'click_icon'	=> "Klikk ikon for en liste med lenker om",
    'on'                => "om",
    'for'               => "for",
    'found_on'	        => "funnet om",
    'tag_ext_link'      => "Merket ekstern lenke:",
    'other_posts_with_tag'	=> "Andre oppf�ringer om",
    'used_tags'		=> "Brukte merkelapper",
    'suggested_tags' 	=> "Foresl�tte merkelapper",
    'insert_tag' 	=> "Sett inn en merkelapp",
    'insert_tag_desc' 	=> "Sett in en merkelapp i oppf�ringen din med en valgfri lenke. Du kan ogs� velge en merkelapp fra den (ukomplette) skyen med merkelapper nedenfor." 
);


// A little tool to help you check if the file is correct..
if (count(get_included_files())<2) {

	$groups = count($lang);
	$total = 0;
	foreach ($lang as $langgroup) {
		$total += count($langgroup);
	}
	echo "<h2>Language file is correct!</h2>";
	echo "This file contains $groups groups and a total of $total labels.";

}

?>
