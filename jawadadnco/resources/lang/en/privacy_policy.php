<?php

return [
    'meta_title' => 'Privacy Policy – Luxway',
    'meta_description' => 'Learn how Luxway collects, uses and protects your personal data, your GDPR rights, retention periods and data sharing.',

    'h1' => 'Privacy Policy – Luxway',
    'last_updated_label' => 'Last updated:',
    'last_updated_date' => '05/02/2026',

    'intro' => 'Luxway (“we”, “our”) attaches great importance to the protection of your personal data. This policy explains what data we collect, why, for how long, with whom we share it, and what your rights are, in accordance with Regulation (EU) 2016/679 (GDPR) and the Belgian law of 30 July 2018.',

    'sections' => [
        'controller' => [
            'title' => '1) Data controller',
            'controller' => 'Data controller:',
            'company' => 'Luxway',
            'legal_form' => 'Legal form:',
            'legal_form_placeholder' => '[SRL/SA/…]',
            'address' => 'Address:',
            'address_placeholder' => '[Full address, Belgium]',
            'vat' => 'Company/VAT number:',
            'vat_placeholder' => '[BE0xxx.xxx.xxx]',
            'email' => 'Email:',
            'email_placeholder' => '[contact@luxway.be] (or [privacy@luxway.be])',
            'phone' => 'Phone:',
            'phone_placeholder' => '[+32 …]',
        ],

        'data' => [
            'title' => '2) Data we process',
            'intro' => 'As online bookings are not available, we mainly process the data you provide when you contact us (phone, email, form, social media, WhatsApp).',
            'list' => [
                'identity_contact' => 'Identity & contact: first name, last name, email, phone number, company (if applicable).',
                'ride_request' => 'Request/ride details: desired date/time, pick-up and drop-off locations, logistical preferences (number of passengers, luggage, etc.), exchanged messages.',
                'contact_form' => 'Contact form: when you use the contact form on our website, we process the data you enter (e.g., first name, last name, email address, phone number if requested, subject and message content). We may also process technical data related to sending the form (date/time sent, technical connection information such as IP address), solely for security, spam prevention and diagnostics.',
                'billing' => 'Billing (if a service is provided): billing address, invoice details, history of commercial exchanges.',
                'technical' => 'Technical data: security logs, IP address (e.g., anti-fraud, website security), and cookie-related data according to your choices (see section 9).',
            ],
            'note_title' => 'Important:',
            'note_text' => 'please do not send us sensitive data (e.g., health data, political opinions, religion), especially via messages.',
        ],

        'purposes' => [
            'title' => '3) Purposes (why we use your data)',
            'intro' => 'We process your data to:',
            'list' => [
                'answer_requests' => 'Respond to your requests (information, availability, quote).',
                'organize_service' => 'Organise and deliver the chauffeur-driven rental service.',
                'customer_service' => 'Provide customer service (follow-up, complaints, incidents).',
                'billing_accounting' => 'Manage billing and accounting.',
                'security_fraud' => 'Secure the website and prevent fraud.',
                'analytics' => 'Measure audience and improve the website (if you accept the relevant cookies).',
                'contact_form_answer' => 'Respond to your request sent via the contact form (information, availability, quote).',
                'relationship_followup' => 'Ensure customer relationship follow-up and service continuity.',
                'anti_spam' => 'Prevent spam and protect the website against abusive use.',
            ],
        ],

        'legal_basis' => [
            'title' => '4) Legal bases',
            'intro' => 'Depending on the case:',
            'list' => [
                'contract' => 'Pre-contractual measures / contract: processing necessary to provide a quote and deliver the service, and to respond to an information or quote request.',
                'legal_obligation' => 'Legal obligation: accounting/invoicing.',
                'legitimate_interest' => 'Legitimate interest: security, fraud prevention, service improvement, spam prevention and efficient request handling.',
                'consent' => 'Consent: certain cookies/trackers and, where applicable, certain marketing communications.',
            ],
        ],

        'retention' => [
            'title' => '5) Retention periods',
            'intro' => 'We keep your data only for as long as necessary:',
            'list' => [
                'quotes_contacts' => 'Requests & exchanges (quotes/contact): up to [24 months] after the last contact (to be adapted).',
                'contact_form_messages' => 'Messages from the contact form: up to [24 months] after the last exchange (to be adapted to your needs).',
                'client_files' => 'Customer files/services: up to [X years] after the service (to be adapted).',
                'billing' => 'Billing data: according to applicable legal obligations.',
                'technical' => 'Associated technical data (anti-spam/security): generally [6 to 12 months] (to be adapted).',
                'security_logs' => 'Security logs: [6 to 12 months] (to be adapted).',
                'cookies' => 'Cookies: depending on category and your choices (see section 9).',
            ],
        ],

        'sharing' => [
            'title' => '6) Data sharing (including WhatsApp)',
            'intro' => 'We may share certain data, only if necessary, with:',

            'drivers_title' => 'a) Drivers (and operational partners)',
            'drivers_text' => 'To deliver the ride, drivers may receive information such as: first/last name, time, locations, logistical constraints.',

            'whatsapp_title' => 'b) WhatsApp (communication and transfer of info to drivers)',
            'whatsapp_intro' => 'If you communicate with us via WhatsApp, or if certain operational information is shared with drivers via WhatsApp:',
            'whatsapp_list' => [
                'policy' => 'Your data is processed via WhatsApp, a service provided by WhatsApp/Meta, under their own terms and policies.',
                'transfers' => 'This may involve international transfers and the use of Standard Contractual Clauses (SCCs) as a transfer mechanism, according to documents published by WhatsApp.',
            ],
            'whatsapp_note_title' => 'Best practice:',
            'whatsapp_note_text' => 'avoid sending sensitive or unnecessary information via WhatsApp (e.g., identity documents). If you prefer, you can request an exchange via email.',

            'providers_title' => 'c) Technical service providers',
            'providers_text' => 'Hosting (Belgium), maintenance, messaging, internal tools (if used), etc. These providers act as processors with confidentiality and security obligations.',

            'contact_form_title' => 'Contact form (messaging)',
            'contact_form_text' => 'Requests sent via the contact form are forwarded to Luxway and may be processed through our messaging solution (email host/messaging provider). These providers act as processors and only process data to deliver the service.',

            'authorities_title' => 'd) Authorities',
            'authorities_text' => 'If we are legally required to do so.',
        ],

        'transfers' => [
            'title' => '7) Transfers outside the EEA',
            'text' => 'We prioritise providers in the EEA. When tools involve processing outside the EEA (e.g., WhatsApp), we implement appropriate safeguards (such as SCCs) and, where necessary, additional measures.',
        ],

        'security' => [
            'title' => '8) Security',
            'text' => 'We implement reasonable technical and organisational measures (access controls, backups, permissions management, etc.) to protect your data.',
        ],

        'cookies' => [
            'title' => '9) Cookies and trackers',
            'intro' => 'Our website uses cookies/trackers:',
            'list' => [
                'necessary' => 'Strictly necessary (website operation): no consent required.',
                'analytics_marketing' => 'Audience measurement/analytics and/or marketing: only set after your consent, which you can manage via the cookie banner and change at any time.',
            ],
            'more' => 'For more information, see our Cookie Policy:',
            'cookies_policy_link_text' => '[link to your cookie page]',
        ],

        'rights' => [
            'title' => '10) Your rights',
            'text_1' => 'You have, in particular, the rights of access, rectification, erasure, restriction, objection (including marketing), and data portability (subject to conditions). You can also withdraw your consent at any time when processing is based on it.',
            'text_2' => 'To exercise your rights: contact us at [email]. We may request proof of identity in case of reasonable doubt.',
        ],

        'complaint' => [
            'title' => '11) Complaint to the supervisory authority (Belgium)',
            'intro' => 'If you believe your rights are not respected, you can lodge a complaint with the Data Protection Authority (DPA/APD/GBA):',
            'address_label' => 'Address:',
            'address' => 'Rue de la Presse 35, 1000 Brussels',
            'phone_label' => 'Phone:',
            'phone' => '+32 (0)2 274 48 00',
            'email_label' => 'Email:',
            'email' => 'contact@apd-gba.be',
        ],

        'changes' => [
            'title' => '12) Changes to this policy',
            'text' => 'We may update this policy to reflect legal/technical developments. The “Last updated” date at the top of the page indicates the version in force.',
        ],
    ],
];
