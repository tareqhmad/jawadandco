@extends('layouts.app')

@section('title', __('privacy_policy.meta_title'))
@section('description', __('privacy_policy.meta_description'))

@section('content')
    <section class="section-padding">
        <header class="container" style="margin-top: 10px">
            <h1>{{ __('privacy_policy.h1') }}</h1>

            <p class="meta">
                <strong>{{ __('privacy_policy.last_updated_label') }}</strong>
                {{ __('privacy_policy.last_updated_date') }}
            </p>

            <p class="meta">
                {{ __('privacy_policy.intro') }}
            </p>

            <style>
                h1 {
                    font-size: 2rem;
                    margin: 0 0 .5rem;
                }

                .meta {
                    color: var(--color-dark);
                    margin: 0;
                }

                h2 {
                    margin-top: 2rem;
                    font-size: 1.35rem;
                }

                h3 {
                    margin-top: 1.25rem;
                    font-size: 1.1rem;
                }

                p {
                    margin: .75rem 0;
                }

                ul {
                    padding-left: 1.25rem;
                }

                ol {
                    padding-left: 1.25rem;
                }

                li {
                    margin: .35rem 0;
                }

                .note {
                    padding: .75rem 1rem;
                    background: var(--color-accent);
                    border-left: 4px solid #ddd;
                }

                a {
                    color: inherit;
                    text-decoration: underline;
                }
            </style>
        </header>

        <main class="container">
            {{-- 1) Responsable --}}
            <section id="responsable">
                <h2>{{ __('privacy_policy.sections.controller.title') }}</h2>

                <p><strong>{{ __('privacy_policy.sections.controller.controller') }}</strong>
                    {{ __('privacy_policy.sections.controller.company') }}</p>
                <p><strong>{{ __('privacy_policy.sections.controller.legal_form') }}</strong>
                    {{ __('privacy_policy.sections.controller.legal_form_placeholder') }}</p>
                <p><strong>{{ __('privacy_policy.sections.controller.address') }}</strong>
                    {{ __('privacy_policy.sections.controller.address_placeholder') }}</p>
                <p><strong>{{ __('privacy_policy.sections.controller.vat') }}</strong>
                    {{ __('privacy_policy.sections.controller.vat_placeholder') }}</p>
                <p><strong>{{ __('privacy_policy.sections.controller.email') }}</strong>
                    {{ __('privacy_policy.sections.controller.email_placeholder') }}</p>
                <p><strong>{{ __('privacy_policy.sections.controller.phone') }}</strong>
                    {{ __('privacy_policy.sections.controller.phone_placeholder') }}</p>
            </section>

            {{-- 2) Données --}}
            <section id="donnees">
                <h2>{{ __('privacy_policy.sections.data.title') }}</h2>

                <p>{{ __('privacy_policy.sections.data.intro') }}</p>

                <ul>
                    <li><strong>{{ __('privacy_policy.sections.data.list.identity_contact') }}</strong></li>
                    <li>{{ __('privacy_policy.sections.data.list.ride_request') }}</li>
                    <li>{{ __('privacy_policy.sections.data.list.contact_form') }}</li>
                    <li>{{ __('privacy_policy.sections.data.list.billing') }}</li>
                    <li>{{ __('privacy_policy.sections.data.list.technical') }}</li>
                </ul>

                <p class="note">
                    <strong>{{ __('privacy_policy.sections.data.note_title') }}</strong>
                    {{ __('privacy_policy.sections.data.note_text') }}
                </p>
            </section>

            {{-- 3) Finalités --}}
            <section id="finalites">
                <h2>{{ __('privacy_policy.sections.purposes.title') }}</h2>

                <p>{{ __('privacy_policy.sections.purposes.intro') }}</p>

                <ol>
                    <li>{{ __('privacy_policy.sections.purposes.list.answer_requests') }}</li>
                    <li>{{ __('privacy_policy.sections.purposes.list.organize_service') }}</li>
                    <li>{{ __('privacy_policy.sections.purposes.list.customer_service') }}</li>
                    <li>{{ __('privacy_policy.sections.purposes.list.billing_accounting') }}</li>
                    <li>{{ __('privacy_policy.sections.purposes.list.security_fraud') }}</li>
                    <li>{{ __('privacy_policy.sections.purposes.list.analytics') }}</li>
                    <li>{{ __('privacy_policy.sections.purposes.list.contact_form_answer') }}</li>
                    <li>{{ __('privacy_policy.sections.purposes.list.relationship_followup') }}</li>
                    <li>{{ __('privacy_policy.sections.purposes.list.anti_spam') }}</li>
                </ol>
            </section>

            {{-- 4) Bases légales --}}
            <section id="bases-legales">
                <h2>{{ __('privacy_policy.sections.legal_basis.title') }}</h2>

                <p>{{ __('privacy_policy.sections.legal_basis.intro') }}</p>

                <ul>
                    <li>{{ __('privacy_policy.sections.legal_basis.list.contract') }}</li>
                    <li>{{ __('privacy_policy.sections.legal_basis.list.legal_obligation') }}</li>
                    <li>{{ __('privacy_policy.sections.legal_basis.list.legitimate_interest') }}</li>
                    <li>{{ __('privacy_policy.sections.legal_basis.list.consent') }}</li>
                </ul>
            </section>

            {{-- 5) Conservation --}}
            <section id="conservation">
                <h2>{{ __('privacy_policy.sections.retention.title') }}</h2>

                <p>{{ __('privacy_policy.sections.retention.intro') }}</p>

                <ul>
                    <li>{{ __('privacy_policy.sections.retention.list.quotes_contacts') }}</li>
                    <li>{{ __('privacy_policy.sections.retention.list.contact_form_messages') }}</li>
                    <li>{{ __('privacy_policy.sections.retention.list.client_files') }}</li>
                    <li>{{ __('privacy_policy.sections.retention.list.billing') }}</li>
                    <li>{{ __('privacy_policy.sections.retention.list.technical') }}</li>
                    <li>{{ __('privacy_policy.sections.retention.list.security_logs') }}</li>
                    <li>{{ __('privacy_policy.sections.retention.list.cookies') }}</li>
                </ul>
            </section>

            {{-- 6) Partage --}}
            <section id="partage">
                <h2>{{ __('privacy_policy.sections.sharing.title') }}</h2>

                <p>{{ __('privacy_policy.sections.sharing.intro') }}</p>

                <h3>{{ __('privacy_policy.sections.sharing.drivers_title') }}</h3>
                <p>{{ __('privacy_policy.sections.sharing.drivers_text') }}</p>

                <h3>{{ __('privacy_policy.sections.sharing.whatsapp_title') }}</h3>
                <p>{{ __('privacy_policy.sections.sharing.whatsapp_intro') }}</p>
                <ul>
                    <li>{{ __('privacy_policy.sections.sharing.whatsapp_list.policy') }}</li>
                    <li>{{ __('privacy_policy.sections.sharing.whatsapp_list.transfers') }}</li>
                </ul>

                <p class="note">
                    <strong>{{ __('privacy_policy.sections.sharing.whatsapp_note_title') }}</strong>
                    {{ __('privacy_policy.sections.sharing.whatsapp_note_text') }}
                </p>

                <h3>{{ __('privacy_policy.sections.sharing.providers_title') }}</h3>
                <p>{{ __('privacy_policy.sections.sharing.providers_text') }}</p>

                <h3>{{ __('privacy_policy.sections.sharing.contact_form_title') }}</h3>
                <p>{{ __('privacy_policy.sections.sharing.contact_form_text') }}</p>

                <h3>{{ __('privacy_policy.sections.sharing.authorities_title') }}</h3>
                <p>{{ __('privacy_policy.sections.sharing.authorities_text') }}</p>
            </section>

            {{-- 7) Transferts --}}
            <section id="transferts">
                <h2>{{ __('privacy_policy.sections.transfers.title') }}</h2>
                <p>{{ __('privacy_policy.sections.transfers.text') }}</p>
            </section>

            {{-- 8) Sécurité --}}
            <section id="securite">
                <h2>{{ __('privacy_policy.sections.security.title') }}</h2>
                <p>{{ __('privacy_policy.sections.security.text') }}</p>
            </section>

            {{-- 9) Cookies --}}
            <section id="cookies">
                <h2>{{ __('privacy_policy.sections.cookies.title') }}</h2>

                <p>{{ __('privacy_policy.sections.cookies.intro') }}</p>

                <ul>
                    <li>{{ __('privacy_policy.sections.cookies.list.necessary') }}</li>
                    <li>{{ __('privacy_policy.sections.cookies.list.analytics_marketing') }}</li>
                </ul>

                <p>
                    {{ __('privacy_policy.sections.cookies.more') }}
                    <a
                        href="[lien-vers-votre-page-cookies]">{{ __('privacy_policy.sections.cookies.cookies_policy_link_text') }}</a>.
                </p>
            </section>

            {{-- 10) Droits --}}
            <section id="droits">
                <h2>{{ __('privacy_policy.sections.rights.title') }}</h2>
                <p>{{ __('privacy_policy.sections.rights.text_1') }}</p>
                <p>{{ __('privacy_policy.sections.rights.text_2') }}</p>
            </section>

            {{-- 11) Réclamation --}}
            <section id="reclamation">
                <h2>{{ __('privacy_policy.sections.complaint.title') }}</h2>
                <p>{{ __('privacy_policy.sections.complaint.intro') }}</p>

                <p>
                    <strong>{{ __('privacy_policy.sections.complaint.address_label') }}</strong>
                    {{ __('privacy_policy.sections.complaint.address') }}<br />
                    <strong>{{ __('privacy_policy.sections.complaint.phone_label') }}</strong>
                    {{ __('privacy_policy.sections.complaint.phone') }}<br />
                    <strong>{{ __('privacy_policy.sections.complaint.email_label') }}</strong>
                    <a
                        href="mailto:{{ __('privacy_policy.sections.complaint.email') }}">{{ __('privacy_policy.sections.complaint.email') }}</a>
                </p>
            </section>

            {{-- 12) Modifications --}}
            <section id="modifications">
                <h2>{{ __('privacy_policy.sections.changes.title') }}</h2>
                <p>{{ __('privacy_policy.sections.changes.text') }}</p>
            </section>
        </main>
    </section>
@endsection
