@extends('layouts.app')

@section('title', __('privacy_policy.meta_title'))
@section('description', __('privacy_policy.meta_description'))

@section('content')
    <section class="section-padding">

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>Mentions légales – Luxway</title>
            <meta name="robots" content="index,follow" />
            <style>
                header {
                    padding: 2.5rem 1rem 1.5rem;
                    border-bottom: 1px solid var(--color-primary);
                    background: var(--color-light)
                }

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

                li {
                    margin: .35rem 0;
                }

                .note {
                    padding: .75rem 1rem;
                    background: var(--color-white);
                    border-left: 4px solid var(--color-accent);
                }
            </style>
        </head>

        <header class="container">
            <h1>Mentions légales – Luxway</h1>
            <p class="meta"><strong>Dernière mise à jour :</strong> [JJ/MM/AAAA]</p>
            <p class="meta">
                Les présentes mentions légales décrivent les informations relatives à l’éditeur du site, à
                l’hébergement,
                ainsi que les principales conditions d’utilisation du site.
            </p>
        </header>

        <main class="container">
            <section id="editeur">
                <h2>1) Éditeur du site</h2>
                <p><strong>Raison sociale :</strong> Luxway</p>
                <p><strong>Forme juridique :</strong> [SRL / SA / …]</p>
                <p><strong>Siège social :</strong> [Adresse complète, Belgique]</p>
                <p><strong>Numéro d’entreprise (BCE) :</strong> [BE0xxx.xxx.xxx]</p>
                <p><strong>Numéro de TVA :</strong> [BE0xxx.xxx.xxx] (si différent)</p>
                <p><strong>Email :</strong> [contact@luxway.be]</p>
                <p><strong>Téléphone :</strong> [+32 …]</p>

                <h3>Représentant légal</h3>
                <p><strong>Nom et qualité :</strong> [Nom, Prénom – Administrateur / Gérant / …]</p>

                <h3>Activité</h3>
                <p>
                    Luxway propose un service de <strong>location de véhicule de luxe avec chauffeur</strong>.
                    <br />
                    <strong>Zone d’activité :</strong> [Belgique / Europe / …]
                </p>

                <div class="note">
                    <p><strong>À compléter si applicable :</strong></p>
                    <ul>
                        <li><strong>Autorisation/agrément :</strong> [n° et autorité compétente]</li>
                        <li><strong>Assurance RC professionnelle :</strong> [assureur, n° police, couverture,
                            territoire]</li>
                    </ul>
                </div>
            </section>

            <section id="hebergeur">
                <h2>2) Hébergement</h2>
                <p><strong>Hébergeur :</strong> [Nom de l’hébergeur]</p>
                <p><strong>Adresse :</strong> [Adresse de l’hébergeur]</p>
                <p><strong>Téléphone :</strong> [Téléphone de l’hébergeur]</p>
                <p><strong>Site web :</strong> <a href="[URL de l’hébergeur]">[URL de l’hébergeur]</a></p>
            </section>

            <section id="contact">
                <h2>3) Contact</h2>
                <p>
                    Pour toute question, vous pouvez nous contacter :
                </p>
                <ul>
                    <li>Par email : <a href="mailto:[contact@luxway.be]">[contact@luxway.be]</a></li>
                    <li>Par téléphone : [+32 …]</li>
                    <li>Par courrier : [Adresse complète, Belgique]</li>
                </ul>
            </section>

            <section id="acces">
                <h2>4) Accès au site</h2>
                <p>
                    Luxway s’efforce d’assurer l’accès au site et son bon fonctionnement. Toutefois, l’accès peut être
                    suspendu temporairement (maintenance, mise à jour, incident technique, etc.) sans préavis.
                </p>
            </section>

            <section id="responsabilite">
                <h2>5) Responsabilité</h2>
                <p>
                    Les informations présentes sur le site sont fournies à titre indicatif. Luxway s’efforce d’en
                    assurer
                    l’exactitude et la mise à jour, sans garantir l’absence d’erreurs ou d’omissions.
                </p>
                <p>
                    Luxway ne pourra être tenue responsable des dommages directs ou indirects liés à l’utilisation du
                    site,
                    dans les limites autorisées par la loi.
                </p>
            </section>

            <section id="liens">
                <h2>6) Liens externes</h2>
                <p>
                    Le site peut contenir des liens vers des sites tiers. Luxway n’exerce aucun contrôle sur ces sites
                    et
                    ne peut être tenue responsable de leur contenu, de leurs politiques ou de leurs pratiques.
                </p>
            </section>

            <section id="propriete-intellectuelle">
                <h2>7) Propriété intellectuelle</h2>
                <p>
                    Sauf mention contraire, l’ensemble des contenus du site (textes, images, vidéos, logos, éléments
                    graphiques,
                    structure, code, etc.) est protégé par des droits de propriété intellectuelle et appartient à Luxway
                    ou à ses partenaires.
                </p>
                <p>
                    Toute reproduction, représentation, modification, publication ou adaptation, totale ou partielle,
                    sans
                    autorisation écrite préalable, est interdite (sauf exceptions légales).
                </p>
                <div class="note">
                    <p><strong>Crédits (optionnel) :</strong> [photographes, banques d’images, designers, etc.]</p>
                </div>
            </section>

            <section id="donnees">
                <h2>8) Données personnelles &amp; cookies</h2>
                <p>
                    Luxway traite des données personnelles conformément à sa
                    <a href="[lien-politique-confidentialite]">Politique de confidentialité</a>.
                    Des cookies/traceurs peuvent être utilisés selon votre choix ; plus d’informations dans la
                    <a href="[lien-politique-cookies]">Politique cookies</a>.
                </p>
            </section>

            <section id="conditions">
                <h2>9) Conditions générales</h2>
                <p>
                    Les conditions applicables aux services (devis, réservation, annulation, tarifs, responsabilités,
                    etc.)
                    sont décrites dans les <a href="[lien-cgv]">Conditions générales de vente / Conditions
                        d’utilisation</a>, le cas échéant.
                </p>
                <div class="note">
                    <p>
                        <strong>À faire :</strong> si vous avez des CGV/CGU, ajoutez-les et mettez ici le lien.
                        Sinon, vous pouvez retirer cette section.
                    </p>
                </div>
            </section>

            <section id="droit-applicable">
                <h2>10) Droit applicable &amp; juridiction compétente</h2>
                <p>
                    Les présentes mentions légales sont régies par le <strong>droit belge</strong>.
                    En cas de litige, et à défaut de résolution amiable, les tribunaux compétents seront ceux de
                    <strong>[Ville / Arrondissement judiciaire]</strong>, sous réserve des dispositions impératives
                    applicables.
                </p>
            </section>

            <section id="modifications">
                <h2>11) Modification des mentions légales</h2>
                <p>
                    Luxway se réserve le droit de modifier les présentes mentions légales à tout moment. La date de mise
                    à jour
                    indiquée en haut de page correspond à la version en vigueur.
                </p>
            </section>
        </main>
    </section>
@endsection
