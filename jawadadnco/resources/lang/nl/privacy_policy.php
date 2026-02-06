<?php

return [
    'meta_title' => 'Privacybeleid – Luxway',
    'meta_description' => 'Lees hoe Luxway je persoonsgegevens verzamelt, gebruikt en beschermt, wat je GDPR-rechten zijn, bewaartermijnen en met wie gegevens worden gedeeld.',

    'h1' => 'Privacybeleid – Luxway',
    'last_updated_label' => 'Laatst bijgewerkt:',
    'last_updated_date' => '05/02/2026',

    'intro' => 'Luxway (“wij”, “ons”, “onze”) hecht veel belang aan de bescherming van je persoonsgegevens. Dit beleid legt uit welke gegevens we verzamelen, waarom, hoe lang, met wie we ze delen en wat je rechten zijn, overeenkomstig Verordening (EU) 2016/679 (AVG/GDPR) en de Belgische wet van 30 juli 2018.',

    'sections' => [
        'controller' => [
            'title' => '1) Verwerkingsverantwoordelijke',
            'controller' => 'Verwerkingsverantwoordelijke:',
            'company' => 'Luxway',
            'legal_form' => 'Rechtsvorm:',
            'legal_form_placeholder' => '[BV/NV/…]',
            'address' => 'Adres:',
            'address_placeholder' => '[Volledig adres, België]',
            'vat' => 'KBO-/btw-nummer:',
            'vat_placeholder' => '[BE0xxx.xxx.xxx]',
            'email' => 'E-mail:',
            'email_placeholder' => '[contact@luxway.be] (of [privacy@luxway.be])',
            'phone' => 'Telefoon:',
            'phone_placeholder' => '[+32 …]',
        ],

        'data' => [
            'title' => '2) Gegevens die wij verwerken',
            'intro' => 'Aangezien online reservaties niet beschikbaar zijn, verwerken wij voornamelijk de gegevens die je aan ons bezorgt wanneer je contact opneemt (telefoon, e-mail, formulier, sociale media, WhatsApp).',
            'list' => [
                'identity_contact' => 'Identiteit & contact: voornaam, achternaam, e-mail, telefoonnummer, bedrijf (indien van toepassing).',
                'ride_request' => 'Aanvraag-/ritgegevens: gewenste datum/tijd, ophaal- en afleverlocaties, logistieke voorkeuren (aantal passagiers, bagage, enz.), uitgewisselde berichten.',
                'contact_form' => 'Contactformulier: wanneer je het contactformulier op onze website gebruikt, verwerken wij de gegevens die je invult (bijv. voornaam, achternaam, e-mailadres, telefoonnummer indien gevraagd, onderwerp en inhoud van het bericht). Daarnaast kunnen wij technische gegevens verwerken in verband met het versturen van het formulier (datum/tijd van verzending, technische verbindingsinformatie zoals het IP-adres), uitsluitend voor beveiliging, spampreventie en diagnose.',
                'billing' => 'Facturatie (indien dienst): factuuradres, factuurgegevens, historiek van commerciële uitwisselingen.',
                'technical' => 'Technische gegevens: beveiligingslogs, IP-adres (bijv. antifraude, websitebeveiliging) en cookiegegevens volgens je keuzes (zie sectie 9).',
            ],
            'note_title' => 'Belangrijk:',
            'note_text' => 'bezorg ons geen gevoelige gegevens (bijv. gezondheid, politieke opvattingen, religie), zeker niet via berichten.',
        ],

        'purposes' => [
            'title' => '3) Doeleinden (waarom wij je gegevens gebruiken)',
            'intro' => 'Wij verwerken je gegevens om:',
            'list' => [
                'answer_requests' => 'Op je vragen te antwoorden (informatie, beschikbaarheid, offerte).',
                'organize_service' => 'De chauffeursdienst te organiseren en uit te voeren.',
                'customer_service' => 'Klantenservice te verzekeren (opvolging, klachten, incidenten).',
                'billing_accounting' => 'Facturatie en boekhouding te beheren.',
                'security_fraud' => 'De website te beveiligen en fraude te voorkomen.',
                'analytics' => 'Bezoekersstatistieken te meten en de website te verbeteren (als je de relevante cookies aanvaardt).',
                'contact_form_answer' => 'Je aanvraag via het contactformulier te beantwoorden (informatie, beschikbaarheid, offerte).',
                'relationship_followup' => 'De klantrelatie op te volgen en de continuïteit van de dienstverlening te verzekeren.',
                'anti_spam' => 'Spam te voorkomen en de website te beschermen tegen misbruik.',
            ],
        ],

        'legal_basis' => [
            'title' => '4) Rechtsgrondslagen',
            'intro' => 'Afhankelijk van het geval:',
            'list' => [
                'contract' => 'Precontractuele maatregelen / overeenkomst: verwerking die nodig is om een offerte op te maken en de dienst te leveren, en om een informatie- of offerteaanvraag te behandelen.',
                'legal_obligation' => 'Wettelijke verplichting: boekhouding/facturatie.',
                'legitimate_interest' => 'Gerechtvaardigd belang: beveiliging, fraudepreventie, verbetering van de dienstverlening, spampreventie en efficiënte afhandeling van aanvragen.',
                'consent' => 'Toestemming: bepaalde cookies/trackers en, indien van toepassing, bepaalde marketingcommunicatie.',
            ],
        ],

        'retention' => [
            'title' => '5) Bewaartermijnen',
            'intro' => 'Wij bewaren je gegevens alleen zolang als nodig:',
            'list' => [
                'quotes_contacts' => 'Aanvragen & uitwisselingen (offertes/contact): tot [24 maanden] na het laatste contact (aan te passen).',
                'contact_form_messages' => 'Berichten via het contactformulier: tot [24 maanden] na de laatste uitwisseling (aan te passen aan je behoeften).',
                'client_files' => 'Klantendossiers/diensten: tot [X jaar] na de dienst (aan te passen).',
                'billing' => 'Facturatiegegevens: volgens de toepasselijke wettelijke verplichtingen.',
                'technical' => 'Bijhorende technische gegevens (antispam/beveiliging): doorgaans [6 tot 12 maanden] (aan te passen).',
                'security_logs' => 'Beveiligingslogs: [6 tot 12 maanden] (aan te passen).',
                'cookies' => 'Cookies: afhankelijk van categorie en je keuze (zie sectie 9).',
            ],
        ],

        'sharing' => [
            'title' => '6) Delen van gegevens (incl. WhatsApp)',
            'intro' => 'Wij kunnen bepaalde gegevens delen, enkel indien nodig, met:',

            'drivers_title' => 'a) Chauffeurs (en operationele partners)',
            'drivers_text' => 'Om de rit uit te voeren kunnen chauffeurs informatie ontvangen zoals: voor- en achternaam, tijdstip, locaties en logistieke beperkingen.',

            'whatsapp_title' => 'b) WhatsApp (communicatie en doorgifte van info aan chauffeurs)',
            'whatsapp_intro' => 'Als je met ons communiceert via WhatsApp, of als bepaalde operationele informatie via WhatsApp aan chauffeurs wordt doorgegeven:',
            'whatsapp_list' => [
                'policy' => 'Je gegevens worden verwerkt via WhatsApp, een dienst van WhatsApp/Meta, volgens hun eigen voorwaarden en beleid.',
                'transfers' => 'Dit kan internationale doorgiften inhouden en het gebruik van Standard Contractual Clauses (SCC’s) als doorgiftemechanisme, volgens de door WhatsApp gepubliceerde documenten.',
            ],
            'whatsapp_note_title' => 'Goede praktijk:',
            'whatsapp_note_text' => 'vermijd het versturen van gevoelige of onnodige informatie via WhatsApp (bijv. identiteitsdocumenten). Als je verkiest, kan je vragen om via e-mail te communiceren.',

            'providers_title' => 'c) Technische dienstverleners',
            'providers_text' => 'Hosting (België), onderhoud, berichtgeving, interne tools (indien gebruikt), enz. Deze dienstverleners treden op als verwerkers met vertrouwelijkheids- en beveiligingsverplichtingen.',

            'contact_form_title' => 'Contactformulier (berichtgeving)',
            'contact_form_text' => 'Aanvragen via het contactformulier worden doorgestuurd naar Luxway en kunnen verwerkt worden via onze berichtendienst (mailhost/berichtendienstverlener). Deze dienstverleners treden op als verwerker en verwerken gegevens enkel om de dienst te leveren.',

            'authorities_title' => 'd) Overheden',
            'authorities_text' => 'Als wij daartoe wettelijk verplicht zijn.',
        ],

        'transfers' => [
            'title' => '7) Doorgiften buiten de EER',
            'text' => 'Wij geven de voorkeur aan dienstverleners binnen de EER. Wanneer tools verwerking buiten de EER inhouden (bijv. WhatsApp), nemen wij passende waarborgen (zoals SCC’s) en, indien nodig, bijkomende maatregelen.',
        ],

        'security' => [
            'title' => '8) Beveiliging',
            'text' => 'Wij nemen redelijke technische en organisatorische maatregelen (toegangscontroles, back-ups, beheer van rechten, enz.) om je gegevens te beschermen.',
        ],

        'cookies' => [
            'title' => '9) Cookies en trackers',
            'intro' => 'Onze website gebruikt cookies/trackers:',
            'list' => [
                'necessary' => 'Strikt noodzakelijk (werking van de website): geen toestemming vereist.',
                'analytics_marketing' => 'Publieksmeting/analytics en/of marketing: enkel geplaatst na je toestemming; je kan dit beheren via de cookiebanner en op elk moment wijzigen.',
            ],
            'more' => 'Meer informatie vind je in ons Cookiebeleid:',
            'cookies_policy_link_text' => '[link naar je cookiepagina]',
        ],

        'rights' => [
            'title' => '10) Je rechten',
            'text_1' => 'Je beschikt onder meer over de rechten op inzage, rectificatie, wissing, beperking, bezwaar (incl. marketing) en gegevensoverdraagbaarheid (onder voorwaarden). Je kan je toestemming ook op elk moment intrekken wanneer de verwerking daarop gebaseerd is.',
            'text_2' => 'Om je rechten uit te oefenen: contacteer ons via [email]. Bij redelijke twijfel kunnen wij om een bewijs van identiteit vragen.',
        ],

        'complaint' => [
            'title' => '11) Klacht bij de toezichthoudende autoriteit (België)',
            'intro' => 'Als je vindt dat je rechten niet gerespecteerd worden, kan je een klacht indienen bij de Gegevensbeschermingsautoriteit (GBA/APD):',
            'address_label' => 'Adres:',
            'address' => 'Drukpersstraat 35, 1000 Brussel',
            'phone_label' => 'Tel.:',
            'phone' => '+32 (0)2 274 48 00',
            'email_label' => 'E-mail:',
            'email' => 'contact@apd-gba.be',
        ],

        'changes' => [
            'title' => '12) Wijzigingen aan dit beleid',
            'text' => 'Wij kunnen dit beleid bijwerken om juridische/technische evoluties te weerspiegelen. De datum “Laatst bijgewerkt” bovenaan de pagina geeft de versie aan die van toepassing is.',
        ],
    ],
];
