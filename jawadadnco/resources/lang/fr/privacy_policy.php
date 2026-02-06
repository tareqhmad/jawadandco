<?php

return [
    'meta_title' => 'Politique de confidentialité – Luxway',
    'meta_description' => 'Découvrez comment Luxway collecte, utilise et protège vos données personnelles, vos droits RGPD, la durée de conservation et le partage des données.',

    'h1' => 'Politique de confidentialité – Luxway',
    'last_updated_label' => 'Dernière mise à jour :',
    'last_updated_date' => '05/02/2026',

    'intro' => 'Luxway (« nous », « notre ») attache une grande importance à la protection de vos données à caractère personnel. La présente politique explique quelles données nous collectons, pourquoi, combien de temps, avec qui nous les partageons, et quels sont vos droits, conformément au Règlement (UE) 2016/679 (RGPD) et à la loi belge du 30 juillet 2018.',

    'sections' => [
        'controller' => [
            'title' => '1) Responsable du traitement',
            'controller' => 'Responsable du traitement :',
            'company' => 'Luxway',
            'legal_form' => 'Forme juridique :',
            'legal_form_placeholder' => '[SRL/SA/…]',
            'address' => 'Adresse :',
            'address_placeholder' => '[Adresse complète, Belgique]',
            'vat' => 'N° BCE / TVA :',
            'vat_placeholder' => '[BE0xxx.xxx.xxx]',
            'email' => 'Email :',
            'email_placeholder' => '[contact@luxway.be] (ou [privacy@luxway.be])',
            'phone' => 'Téléphone :',
            'phone_placeholder' => '[+32 …]',
        ],

        'data' => [
            'title' => '2) Données que nous traitons',
            'intro' => 'Comme les réservations en ligne ne sont pas disponibles, nous traitons principalement les données que vous nous communiquez lorsque vous nous contactez (téléphone, email, formulaire, réseaux sociaux, WhatsApp).',
            'list' => [
                'identity_contact' => 'Identité & contact : nom, prénom, email, téléphone, société (si applicable).',
                'ride_request' => 'Informations de demande / course : date/heure souhaitée, lieux de prise en charge et de dépôt, préférences logistiques (nombre de passagers, bagages, etc.), messages échangés.',
                'contact_form' => 'Formulaire de contact : lorsque vous utilisez le formulaire de contact sur notre site, nous traitons les données que vous renseignez (par exemple : nom, prénom, adresse email, numéro de téléphone si demandé, sujet et contenu du message). Nous pouvons également traiter des données techniques liées à l’envoi du formulaire (date/heure d’envoi, informations techniques de connexion telles que l’adresse IP), uniquement à des fins de sécurité, de prévention du spam et de diagnostic.',
                'billing' => 'Facturation (si prestation) : adresse de facturation, informations de facture, historique des échanges commerciaux.',
                'technical' => 'Données techniques : logs de sécurité, adresse IP (ex. anti-fraude, sécurité du site), et données liées aux cookies selon vos choix (voir section 9).',
            ],
            'note_title' => 'Important :',
            'note_text' => 'merci de ne pas nous communiquer de données sensibles (ex. santé, opinions, religion), notamment par message.',
        ],

        'purposes' => [
            'title' => '3) Finalités (pourquoi nous utilisons vos données)',
            'intro' => 'Nous traitons vos données pour :',
            'list' => [
                'answer_requests' => 'Répondre à vos demandes (informations, disponibilité, devis).',
                'organize_service' => 'Organiser et exécuter la prestation de location avec chauffeur.',
                'customer_service' => 'Assurer le service client (suivi, réclamations, incidents).',
                'billing_accounting' => 'Gérer la facturation et la comptabilité.',
                'security_fraud' => 'Sécuriser le site et prévenir la fraude.',
                'analytics' => 'Mesurer l’audience et améliorer le site (si vous acceptez les cookies concernés).',
                'contact_form_answer' => 'Répondre à votre demande envoyée via le formulaire de contact (information, disponibilité, devis).',
                'relationship_followup' => 'Assurer le suivi de la relation client et la continuité du service.',
                'anti_spam' => 'Prévenir le spam et protéger le site contre les usages abusifs.',
            ],
        ],

        'legal_basis' => [
            'title' => '4) Bases légales',
            'intro' => 'Selon les cas :',
            'list' => [
                'contract' => 'Mesures précontractuelles / contrat : traitement nécessaire pour établir un devis et fournir le service, et répondre à une demande d’informations ou de devis.',
                'legal_obligation' => 'Obligation légale : comptabilité/facturation.',
                'legitimate_interest' => 'Intérêt légitime : sécurité, prévention de la fraude, amélioration du service, prévention du spam et gestion efficace des demandes.',
                'consent' => 'Consentement : certains cookies/traceurs et, le cas échéant, certaines communications marketing.',
            ],
        ],

        'retention' => [
            'title' => '5) Durées de conservation',
            'intro' => 'Nous conservons vos données uniquement le temps nécessaire :',
            'list' => [
                'quotes_contacts' => 'Demandes & échanges (devis / contact) : jusqu’à [24 mois] après le dernier contact (à adapter).',
                'contact_form_messages' => 'Messages issus du formulaire de contact : jusqu’à [24 mois] après le dernier échange (à adapter selon vos besoins).',
                'client_files' => 'Dossiers clients / prestations : jusqu’à [X ans] après la prestation (à adapter).',
                'billing' => 'Données de facturation : selon les obligations légales applicables.',
                'technical' => 'Données techniques associées (anti-spam / sécurité) : en général [6 à 12 mois] (à adapter).',
                'security_logs' => 'Logs de sécurité : [6 à 12 mois] (à adapter).',
                'cookies' => 'Cookies : selon la catégorie et votre choix (voir section 9).',
            ],
        ],

        'sharing' => [
            'title' => '6) Partage des données (dont WhatsApp)',
            'intro' => 'Nous pouvons partager certaines données, uniquement si nécessaire, avec :',

            'drivers_title' => 'a) Chauffeurs (et partenaires opérationnels)',
            'drivers_text' => 'Pour exécuter la course, les chauffeurs peuvent recevoir des informations telles que : nom/prénom, heure, lieux, contraintes logistiques.',

            'whatsapp_title' => 'b) WhatsApp (communication et transfert d’infos aux chauffeurs)',
            'whatsapp_intro' => 'Si vous communiquez avec nous via WhatsApp, ou si certaines informations opérationnelles sont transmises aux chauffeurs via WhatsApp :',
            'whatsapp_list' => [
                'policy' => 'Vos données sont traitées via WhatsApp, service fourni par WhatsApp/Meta, selon leurs propres conditions et politiques.',
                'transfers' => 'Cela peut impliquer des transferts internationaux et l’utilisation de clauses contractuelles types (SCC) comme mécanisme de transfert selon les documents publiés par WhatsApp.',
            ],
            'whatsapp_note_title' => 'Bonnes pratiques :',
            'whatsapp_note_text' => 'évitez d’envoyer via WhatsApp des informations sensibles ou inutiles (ex. documents d’identité). Si vous préférez, vous pouvez demander un échange via email.',

            'providers_title' => 'c) Prestataires techniques',
            'providers_text' => 'Hébergement (Belgique), maintenance, messagerie, outils internes (si utilisés), etc. Ces prestataires agissent comme sous-traitants avec des obligations de confidentialité et de sécurité.',

            'contact_form_title' => 'Formulaire de contact (messagerie)',
            'contact_form_text' => 'Les demandes envoyées via le formulaire de contact sont transmises à Luxway et peuvent être traitées via notre solution de messagerie (hébergeur email / prestataire de messagerie). Ces prestataires agissent en tant que sous-traitants et ne traitent les données que pour fournir le service.',

            'authorities_title' => 'd) Autorités',
            'authorities_text' => 'Si une obligation légale nous y contraint.',
        ],

        'transfers' => [
            'title' => '7) Transferts hors EEE',
            'text' => 'Nous privilégions des prestataires dans l’EEE. Lorsque des outils impliquent un traitement hors EEE (ex. WhatsApp), nous mettons en place des garanties appropriées (telles que les SCC) et, si nécessaire, des mesures complémentaires.',
        ],

        'security' => [
            'title' => '8) Sécurité',
            'text' => 'Nous mettons en place des mesures techniques et organisationnelles raisonnables (contrôles d’accès, sauvegardes, gestion des habilitations, etc.) afin de protéger vos données.',
        ],

        'cookies' => [
            'title' => '9) Cookies et traceurs',
            'intro' => 'Notre site utilise des cookies/traceurs :',
            'list' => [
                'necessary' => 'Strictement nécessaires (fonctionnement du site) : pas de consentement requis.',
                'analytics_marketing' => 'Mesure d’audience / analytics et/ou marketing : déposés uniquement après votre consentement, que vous pouvez gérer via le bandeau cookies et modifier à tout moment.',
            ],
            'more' => 'Pour plus d’informations, consultez notre Politique cookies :',
            'cookies_policy_link_text' => '[lien vers votre page cookies]',
        ],

        'rights' => [
            'title' => '10) Vos droits',
            'text_1' => 'Vous disposez notamment des droits : accès, rectification, effacement, limitation, opposition (dont marketing), et portabilité (selon conditions). Vous pouvez aussi retirer votre consentement à tout moment lorsque le traitement est fondé sur celui-ci.',
            'text_2' => 'Pour exercer vos droits : contactez-nous à [email]. Nous pouvons demander une preuve d’identité en cas de doute raisonnable.',
        ],

        'complaint' => [
            'title' => '11) Réclamation auprès de l’autorité de contrôle (Belgique)',
            'intro' => 'Si vous estimez que vos droits ne sont pas respectés, vous pouvez introduire une réclamation auprès de l’Autorité de protection des données (APD/GBA) :',
            'address_label' => 'Adresse :',
            'address' => 'Rue de la Presse 35, 1000 Bruxelles',
            'phone_label' => 'Tél. :',
            'phone' => '+32 (0)2 274 48 00',
            'email_label' => 'Email :',
            'email' => 'contact@apd-gba.be',
        ],

        'changes' => [
            'title' => '12) Modifications de la politique',
            'text' => 'Nous pouvons mettre à jour cette politique afin de refléter des évolutions légales/techniques. La date de “Dernière mise à jour” en haut de page indique la version en vigueur.',
        ],
    ],
];