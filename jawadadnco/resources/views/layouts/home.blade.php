@extends('layouts.app')

@section('title', 'Jawad ADN CO | Service de Chauffeur Privé Premium à Bruxelles')

@section('content')

    {{-- HERO SECTION --}}
    <section id="accueil" class="relative h-screen flex items-center justify-center">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1610647752706-3bb12232b3c2" alt="Private Chauffeur Brussels"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>
        </div>

        <div class="relative z-10 text-center text-white px-6 max-w-5xl">
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6 animate-fade-in">
                Service de Chauffeur Privé <br>
                <span class="text-yellow-400">Premium à Bruxelles</span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-200 mb-10 max-w-3xl mx-auto">
                Expérience de transport de luxe avec confort, discrétion et ponctualité pour vos transferts aéroport,
                déplacements professionnels et événements spéciaux.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#reservation"
                    class="bg-yellow-400 hover:bg-yellow-500 text-black text-lg font-semibold px-10 py-4 rounded-full transition shadow-xl hover:scale-105">
                    Réserver maintenant
                </a>
                <a href="https://wa.me/32497227033?text=Bonjour%20Jawad%20ADN%20CO,%20je%20souhaite%20obtenir%20un%20devis%20pour%20un%20chauffeur%20priv%C3%A9%20%C3%A0%20Bruxelles."
                    target="_blank"
                    class="flex items-center justify-center gap-3 bg-green-500 hover:bg-green-600 text-white text-lg font-semibold px-10 py-4 rounded-full transition shadow-xl hover:scale-105">

                    <svg class="w-6 h-6" viewBox="0 0 32 32" fill="currentColor">
                        <path
                            d="M19.11 17.44c-.28-.14-1.64-.81-1.89-.9-.25-.09-.43-.14-.61.14-.18.28-.7.9-.86 1.08-.16.18-.32.2-.6.07-.28-.14-1.17-.43-2.23-1.38-.83-.74-1.39-1.66-1.55-1.94-.16-.28-.02-.43.12-.57.12-.12.28-.32.43-.48.14-.16.18-.28.28-.47.09-.18.05-.35-.02-.49-.07-.14-.61-1.47-.83-2.01-.22-.53-.44-.46-.61-.47h-.52c-.18 0-.47.07-.71.35-.25.28-.93.9-.93 2.2s.95 2.55 1.08 2.73c.14.18 1.87 2.86 4.54 4.01.64.28 1.14.45 1.53.58.64.2 1.22.17 1.68.1.51-.08 1.64-.67 1.87-1.32.23-.65.23-1.21.16-1.32-.07-.11-.25-.18-.53-.32z" />
                        <path
                            d="M16 2.67C8.64 2.67 2.67 8.64 2.67 16c0 2.59.75 5.01 2.04 7.05L2 30l7.14-2.69A13.26 13.26 0 0016 29.33c7.36 0 13.33-5.97 13.33-13.33S23.36 2.67 16 2.67zm0 24c-2.23 0-4.3-.65-6.05-1.77l-.43-.26-4.24 1.6 1.6-4.14-.28-.43A10.66 10.66 0 015.33 16c0-5.88 4.79-10.67 10.67-10.67S26.67 10.12 26.67 16 21.88 26.67 16 26.67z" />
                    </svg>

                    WhatsApp
                </a>
            </div>

            <div class="mt-16 grid grid-cols-3 gap-8 max-w-3xl mx-auto">
                <div class="text-center">
                    <div class="text-4xl font-bold text-yellow-400">24/7</div>
                    <div class="text-sm text-gray-300 mt-2">Service disponible</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-yellow-400">10+</div>
                    <div class="text-sm text-gray-300 mt-2">Années d'expérience</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-yellow-400">98%</div>
                    <div class="text-sm text-gray-300 mt-2">Clients satisfaits</div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#services" class="text-white">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                    </path>
                </svg>
            </a>
        </div>
    </section>

    {{-- SERVICES SECTION --}}
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Nos Services Premium</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Des solutions de transport sur mesure conçues pour votre confort, votre sécurité et votre excellence.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div
                    class="group bg-gray-50 hover:bg-yellow-400 p-8 rounded-2xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="text-5xl mb-4">✈️</div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-black">Transferts Aéroport</h3>
                    <p class="text-gray-600 group-hover:text-gray-900">
                        Transferts fluides et ponctuels vers et depuis l'aéroport de Bruxelles-National et Charleroi.
                    </p>
                </div>

                <div
                    class="group bg-gray-50 hover:bg-yellow-400 p-8 rounded-2xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="text-5xl mb-4">💼</div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-black">Chauffeur Business</h3>
                    <p class="text-gray-600 group-hover:text-gray-900">
                        Transport exécutif pour vos réunions, conférences et déplacements professionnels.
                    </p>
                </div>

                <div
                    class="group bg-gray-50 hover:bg-yellow-400 p-8 rounded-2xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="text-5xl mb-4">🎉</div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-black">Événements & VIP</h3>
                    <p class="text-gray-600 group-hover:text-gray-900">
                        Véhicules de luxe avec chauffeurs professionnels pour vos occasions spéciales.
                    </p>
                </div>

                <div
                    class="group bg-gray-50 hover:bg-yellow-400 p-8 rounded-2xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="text-5xl mb-4">🚗</div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-black">Mise à Disposition</h3>
                    <p class="text-gray-600 group-hover:text-gray-900">
                        Chauffeur et véhicule à votre disposition pour toute la journée ou plusieurs jours.
                    </p>
                </div>

                <div
                    class="group bg-gray-50 hover:bg-yellow-400 p-8 rounded-2xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="text-5xl mb-4">🏨</div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-black">Navette Hôtel</h3>
                    <p class="text-gray-600 group-hover:text-gray-900">
                        Service de navette régulière entre votre hôtel et vos destinations.
                    </p>
                </div>

                <div
                    class="group bg-gray-50 hover:bg-yellow-400 p-8 rounded-2xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="text-5xl mb-4">🌍</div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-black">Longue Distance</h3>
                    <p class="text-gray-600 group-hover:text-gray-900">
                        Voyages confortables vers Paris, Amsterdam, Luxembourg et autres destinations européennes.
                    </p>
                </div>

                <div
                    class="group bg-gray-50 hover:bg-yellow-400 p-8 rounded-2xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="text-5xl mb-4">🎓</div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-black">Événements Scolaires</h3>
                    <p class="text-gray-600 group-hover:text-gray-900">
                        Transport sécurisé et élégant pour bals de promo et cérémonies de remise de diplômes.
                    </p>
                </div>

                <div
                    class="group bg-gray-50 hover:bg-yellow-400 p-8 rounded-2xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="text-5xl mb-4">👥</div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-black">Groupes & Tours</h3>
                    <p class="text-gray-600 group-hover:text-gray-900">
                        Solutions de transport pour groupes avec véhicules spacieux et confortables.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- FLOTTE SECTION --}}
    <section id="flotte" class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Notre Flotte de Luxe</h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Véhicules premium entretenus méticuleusement pour votre confort et votre sécurité.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-800 rounded-2xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <div class="h-64 bg-gray-700 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1563720360172-67b8f3dce741" alt="Mercedes Classe S"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2 text-yellow-400">Mercedes Classe S</h3>
                        <p class="text-gray-400 mb-4">Le summum du confort et de l'élégance pour vos déplacements
                            professionnels.</p>
                        <ul class="space-y-2 text-sm text-gray-300">
                            <li>✓ 4 passagers</li>
                            <li>✓ Wi-Fi & tablettes</li>
                            <li>✓ Sièges en cuir chauffants</li>
                            <li>✓ Boissons offertes</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-2xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <div class="h-64 bg-gray-700 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1621939514649-280e2ee25f60" alt="BMW Série 7"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2 text-yellow-400">BMW Série 7</h3>
                        <p class="text-gray-400 mb-4">Performance et raffinement pour vos rendez-vous d'affaires.</p>
                        <ul class="space-y-2 text-sm text-gray-300">
                            <li>✓ 4 passagers</li>
                            <li>✓ Système audio premium</li>
                            <li>✓ Climatisation 4 zones</li>
                            <li>✓ Port USB & prises 220V</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-2xl overflow-hidden hover:scale-105 transition-transform duration-300">
                    <div class="h-64 bg-gray-700 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2" alt="Mercedes Classe V"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2 text-yellow-400">Mercedes Classe V</h3>
                        <p class="text-gray-400 mb-4">Espace et confort pour les groupes et familles.</p>
                        <ul class="space-y-2 text-sm text-gray-300">
                            <li>✓ 7 passagers</li>
                            <li>✓ Grand espace bagages</li>
                            <li>✓ Sièges inclinables</li>
                            <li>✓ Tables pliantes</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-400 mb-6">Tous nos véhicules sont équipés de :</p>
                <div class="flex flex-wrap justify-center gap-6 text-sm">
                    <span class="bg-gray-800 px-4 py-2 rounded-full">📱 Chargeurs téléphone</span>
                    <span class="bg-gray-800 px-4 py-2 rounded-full">💧 Eau minérale</span>
                    <span class="bg-gray-800 px-4 py-2 rounded-full">📰 Presse quotidienne</span>
                    <span class="bg-gray-800 px-4 py-2 rounded-full">🧼 Désinfection complète</span>
                    <span class="bg-gray-800 px-4 py-2 rounded-full">❄️ Climatisation</span>
                </div>
            </div>
        </div>
    </section>

    {{-- RESERVATION SECTION --}}
    <section id="reservation" class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Réservez Votre Course</h2>
                <p class="text-gray-400 text-lg">Réservation simple et rapide en 2 minutes</p>
            </div>

            <div class="max-w-3xl mx-auto bg-gray-800 rounded-3xl p-8 md:p-12 shadow-2xl">
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold mb-2">Prénom</label>
                            <input type="text" placeholder="Jean"
                                class="w-full px-4 py-3 bg-gray-700 border-2 border-gray-600 rounded-xl focus:border-yellow-400 focus:outline-none text-white">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold mb-2">Nom</label>
                            <input type="text" placeholder="Dupont"
                                class="w-full px-4 py-3 bg-gray-700 border-2 border-gray-600 rounded-xl focus:border-yellow-400 focus:outline-none text-white">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold mb-2">Email</label>
                            <input type="email" placeholder="jean.dupont@email.com"
                                class="w-full px-4 py-3 bg-gray-700 border-2 border-gray-600 rounded-xl focus:border-yellow-400 focus:outline-none text-white">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold mb-2">Téléphone</label>
                            <input type="tel" placeholder="+32 2 123 45 67"
                                class="w-full px-4 py-3 bg-gray-700 border-2 border-gray-600 rounded-xl focus:border-yellow-400 focus:outline-none text-white">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-2">Type de service</label>
                        <select
                            class="w-full px-4 py-3 bg-gray-700 border-2 border-gray-600 rounded-xl focus:border-yellow-400 focus:outline-none text-white">
                            <option>Transfert aéroport</option>
                            <option>Chauffeur business</option>
                            <option>Événement VIP</option>
                            <option>Mise à disposition</option>
                            <option>Longue distance</option>
                        </select>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold mb-2">Lieu de prise en charge</label>
                            <input type="text" placeholder="Adresse complète"
                                class="w-full px-4 py-3 bg-gray-700 border-2 border-gray-600 rounded-xl focus:border-yellow-400 focus:outline-none text-white">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold mb-2">Destination</label>
                            <input type="text" placeholder="Adresse complète"
                                class="w-full px-4 py-3 bg-gray-700 border-2 border-gray-600 rounded-xl focus:border-yellow-400 focus:outline-none text-white">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold mb-2">Date de prise en charge</label>
                            <input type="date"
                                class="w-full px-4 py-3 bg-gray-700 border-2 border-gray-600 rounded-xl focus:border-yellow-400 focus:outline-none text-white">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold mb-2">Heure</label>
                            <input type="time"
                                class="w-full px-4 py-3 bg-gray-700 border-2 border-gray-600 rounded-xl focus:border-yellow-400 focus:outline-none text-white">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-2">Nombre de passagers</label>
                        <select
                            class="w-full px-4 py-3 bg-gray-700 border-2 border-gray-600 rounded-xl focus:border-yellow-400 focus:outline-none text-white">
                            <option>1 passager</option>
                            <option>2 passagers</option>
                            <option>3 passagers</option>
                            <option>4 passagers</option>
                            <option>5-7 passagers</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-2">Informations complémentaires</label>
                        <textarea rows="4" placeholder="Numéro de vol, demandes spéciales, bagages volumineux..."
                            class="w-full px-4 py-3 bg-gray-700 border-2 border-gray-600 rounded-xl focus:border-yellow-400 focus:outline-none text-white resize-none"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-yellow-400 hover:bg-yellow-500 text-black text-lg font-bold py-4 rounded-xl transition shadow-lg hover:shadow-xl">
                        Confirmer la réservation
                    </button>

                    <p class="text-sm text-gray-400 text-center">
                        En réservant, vous acceptez nos <a href="#"
                            class="text-yellow-400 hover:underline">conditions générales</a>
                    </p>
                </form>
            </div>
        </div>
    </section>

    {{-- TEMOIGNAGES SECTION --}}
    <section id="temoignages" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Ils Nous Font Confiance</h2>
                <p class="text-gray-600 text-lg">L'excellence reconnue par nos clients</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 text-xl">★★★★★</div>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "Service exceptionnel ! Le chauffeur était ponctuel, professionnel et très courtois.
                        La Mercedes était impeccable. Je recommande vivement pour les transferts aéroport."
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center text-black font-bold text-xl">
                            SM
                        </div>
                        <div class="ml-4">
                            <div class="font-bold">Sophie Martin</div>
                            <div class="text-sm text-gray-500">CEO, TechCorp</div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 text-xl">★★★★★</div>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "J'utilise régulièrement leurs services pour mes déplacements professionnels.
                        Toujours à l'heure, véhicules luxueux et chauffeurs discrets. Parfait !"
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center text-black font-bold text-xl">
                            PD
                        </div>
                        <div class="ml-4">
                            <div class="font-bold">Pierre Dubois</div>
                            <div class="text-sm text-gray-500">Directeur Commercial</div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 text-xl">★★★★★</div>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "Pour notre mariage, nous avons loué leur limousine. Un moment magique !
                        Le chauffeur était aux petits soins. Une prestation à la hauteur de nos attentes."
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center text-black font-bold text-xl">
                            ML
                        </div>
                        <div class="ml-4">
                            <div class="font-bold">Marie Laurent</div>
                            <div class="text-sm text-gray-500">Mariée 2024</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-600 mb-4">Plus de 1,500 avis 5 étoiles sur Google</p>
                <div class="flex justify-center gap-2">
                    <a href="#"
                        class="inline-block bg-gray-100 hover:bg-gray-200 px-6 py-3 rounded-full font-semibold transition">
                        Voir tous les avis
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- A PROPOS SECTION --}}
    <section id="apropos" class="py-20 bg-gradient-to-br from-gray-900 to-black text-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">
                        À Propos de <span class="text-yellow-400">Jawad ADN CO</span>
                    </h2>

                    <p class="text-gray-300 text-lg mb-6 leading-relaxed">
                        Depuis plus de 10 ans, Jawad ADN CO est le leader du transport privé de luxe à Bruxelles.
                        Notre mission est de vous offrir une expérience de voyage exceptionnelle, alliant confort,
                        sécurité et professionnalisme.
                    </p>

                    <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                        Nos chauffeurs triés sur le volet sont formés aux plus hauts standards du service premium.
                        Discrets, ponctuels et polyglotes, ils garantissent votre satisfaction à chaque trajet.
                    </p>

                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div>
                            <div class="text-4xl font-bold text-yellow-400 mb-2">10+</div>
                            <div class="text-gray-400">Années d'expérience</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-yellow-400 mb-2">50K+</div>
                            <div class="text-gray-400">Courses réalisées</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-yellow-400 mb-2">98%</div>
                            <div class="text-gray-400">Satisfaction client</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-yellow-400 mb-2">24/7</div>
                            <div class="text-gray-400">Service disponible</div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="text-yellow-400 text-2xl">✓</div>
                            <div>
                                <h4 class="font-bold mb-1">Ponctualité garantie</h4>
                                <p class="text-gray-400">Nous assurons votre arrivée à l'heure, quoi qu'il arrive.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="text-yellow-400 text-2xl">✓</div>
                            <div>
                                <h4 class="font-bold mb-1">Chauffeurs professionnels</h4>
                                <p class="text-gray-400">Formés, expérimentés et parlant plusieurs langues.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="text-yellow-400 text-2xl">✓</div>
                            <div>
                                <h4 class="font-bold mb-1">Flotte premium</h4>
                                <p class="text-gray-400">Véhicules récents, entretenus et équipés des dernières
                                    technologies.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="text-yellow-400 text-2xl">✓</div>
                            <div>
                                <h4 class="font-bold mb-1">Tarifs transparents</h4>
                                <p class="text-gray-400">Prix fixes communiqués à l'avance, sans frais cachés.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="relative z-10">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d"
                            alt="Chauffeur professionnel" class="rounded-3xl shadow-2xl">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-full h-full bg-yellow-400 rounded-3xl -z-0"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT SECTION --}}
    <section id="contact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Contactez-Nous</h2>
                <p class="text-gray-600 text-lg">Notre équipe est à votre disposition 24h/24, 7j/7</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <div>
                    <div class="bg-white p-8 rounded-2xl shadow-lg mb-8">
                        <h3 class="text-2xl font-bold mb-6">Informations de contact</h3>

                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">📞</span>
                                </div>
                                <div>
                                    <div class="font-bold mb-1">Téléphone</div>
                                    <a href="tel:+3221234567" class="text-gray-600 hover:text-yellow-600">+32 2 123 45
                                        67</a>
                                    <div class="text-sm text-gray-500 mt-1">Disponible 24h/24</div>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">📧</span>
                                </div>
                                <div>
                                    <div class="font-bold mb-1">Email</div>
                                    <a href="mailto:contact@jawadadnco.be"
                                        class="text-gray-600 hover:text-yellow-600">contact@jawadadnco.be</a>
                                    <div class="text-sm text-gray-500 mt-1">Réponse sous 1h</div>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">📍</span>
                                </div>
                                <div>
                                    <div class="font-bold mb-1">Adresse</div>
                                    <div class="text-gray-600">Avenue Louise 123</div>
                                    <div class="text-gray-600">1050 Bruxelles, Belgique</div>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">💬</span>
                                </div>
                                <div>
                                    <div class="font-bold mb-1">WhatsApp</div>
                                    <a href="https://wa.me/3221234567" class="text-gray-600 hover:text-yellow-600">+32 2
                                        123 45 67</a>
                                    <div class="text-sm text-gray-500 mt-1">Chat instantané</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-yellow-400 p-8 rounded-2xl text-black">
                        <h4 class="text-xl font-bold mb-4">Horaires de bureau</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span>Lundi - Vendredi:</span>
                                <span class="font-semibold">9h00 - 18h00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Samedi:</span>
                                <span class="font-semibold">10h00 - 16h00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Dimanche:</span>
                                <span class="font-semibold">Fermé (service 24/7)</span>
                            </div>
                        </div>
                        <p class="text-sm mt-4 border-t border-black/20 pt-4">
                            * Le service de chauffeur est disponible 24h/24 tous les jours
                        </p>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <h3 class="text-2xl font-bold mb-6">Envoyez-nous un message</h3>

                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold mb-2">Nom complet</label>
                            <input type="text" placeholder="Jean Dupont"
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:outline-none">
                        </div>

                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold mb-2">Email</label>
                                <input type="email" placeholder="jean@email.com"
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:outline-none">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold mb-2">Téléphone</label>
                                <input type="tel" placeholder="+32 2 123 45 67"
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:outline-none">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold mb-2">Sujet</label>
                            <select
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:outline-none">
                                <option>Demande de devis</option>
                                <option>Question générale</option>
                                <option>Réclamation</option>
                                <option>Partenariat</option>
                                <option>Autre</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold mb-2">Message</label>
                            <textarea rows="5" placeholder="Décrivez votre demande..."
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:outline-none resize-none"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-yellow-400 hover:bg-yellow-500 text-black text-lg font-bold py-4 rounded-xl transition shadow-lg hover:shadow-xl">
                            Envoyer le message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA FINAL --}}
    <section class="py-20 bg-gradient-to-r from-yellow-400 to-yellow-500">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-black mb-6">
                Prêt à vivre l'expérience premium ?
            </h2>
            <p class="text-xl text-gray-900 mb-8 max-w-2xl mx-auto">
                Réservez dès maintenant votre chauffeur privé et découvrez le luxe du transport sur mesure.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#reservation"
                    class="bg-black hover:bg-gray-900 text-white text-lg font-bold px-10 py-4 rounded-full transition shadow-xl hover:scale-105">
                    Réserver maintenant
                </a>
                <a href="tel:+3221234567"
                    class="bg-white hover:bg-gray-100 text-black text-lg font-bold px-10 py-4 rounded-full transition shadow-xl hover:scale-105">
                    Appeler : +32 2 123 45 67
                </a>
            </div>
        </div>
    </section>

@endsection
