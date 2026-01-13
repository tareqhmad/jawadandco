@php
    $locale = request()->route('locale');
@endphp
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jawad ADN CO | Luxury Chauffeur Service Brussels')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .gold-gradient {
            background: linear-gradient(135deg, #d4af37 0%, #f4e4a6 100%);
        }
    </style>
</head>

<body class="bg-white text-gray-900 antialiased">

    {{-- Navbar --}}
    <header class="fixed top-0 left-0 w-full z-50 transition-all duration-300" id="navbar">
        <nav class="container mx-auto flex items-center justify-between px-6 py-4">
            <div class="flex items-center">
                <a href="{{ route('home', ['locale' => request()->route('locale') ?? 'fr']) }}"
                    class="text-2xl font-bold tracking-wide text-white hover:text-yellow-400 transition">
                    Jawad & CO
                </a>
            </div>
            <div class="flex gap-4 text-white text-sm">
                <a href="/fr" class="{{ $locale === 'fr' ? 'underline' : '' }}">FR</a>
                <a href="/en" class="{{ $locale === 'en' ? 'underline' : '' }}">EN</a>
                <a href="/nl" class="{{ $locale === 'nl' ? 'underline' : '' }}">NL</a>
            </div>

            {{-- Desktop Menu --}}
            <div class="hidden lg:flex items-center space-x-8">
                <a href="#accueil" class="text-white hover:text-yellow-400 transition font-medium">Accueil</a>
                <a href="#services" class="text-white hover:text-yellow-400 transition font-medium">Services</a>
                <a href="#flotte" class="text-white hover:text-yellow-400 transition font-medium">Flotte</a>
                <a href="#temoignages" class="text-white hover:text-yellow-400 transition font-medium">Témoignages</a>
                <a href="#apropos" class="text-white hover:text-yellow-400 transition font-medium">À propos</a>
                <a href="#contact" class="text-white hover:text-yellow-400 transition font-medium">Contact</a>
            </div>

            <a href="#reservation"
                class="hidden lg:block bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-3 rounded-full transition shadow-lg">
                Réserver
            </a>

            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-btn" class="lg:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </nav>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden lg:hidden bg-black/95 backdrop-blur-sm">
            <div class="container mx-auto px-6 py-4 flex flex-col space-y-4">
                <a href="#accueil" class="text-white hover:text-yellow-400 transition">Accueil</a>
                <a href="#services" class="text-white hover:text-yellow-400 transition">Services</a>
                <a href="#flotte" class="text-white hover:text-yellow-400 transition">Flotte</a>
                <a href="#tarifs" class="text-white hover:text-yellow-400 transition">Tarifs</a>
                <a href="#temoignages" class="text-white hover:text-yellow-400 transition">Témoignages</a>
                <a href="#apropos" class="text-white hover:text-yellow-400 transition">À propos</a>
                <a href="#contact" class="text-white hover:text-yellow-400 transition">Contact</a>
                <a href="#reservation"
                    class="bg-yellow-400 text-black font-semibold px-6 py-3 rounded-full text-center">
                    Réserver
                </a>
            </div>
        </div>
    </header>

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 text-yellow-400">Jawad & CO</h3>
                    <p class="text-gray-400 text-sm">
                        Service de chauffeur privé premium à Bruxelles. Confort, discrétion et ponctualité garantis.
                    </p>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#services" class="hover:text-yellow-400 transition">Transferts Aéroport</a></li>
                        <li><a href="#services" class="hover:text-yellow-400 transition">Chauffeur Business</a></li>
                        <li><a href="#services" class="hover:text-yellow-400 transition">Événements VIP</a></li>
                        <li><a href="#services" class="hover:text-yellow-400 transition">Mise à disposition</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li>📞 +32 2 123 45 67</li>
                        <li>📧 contact@jawadadnco.be</li>
                        <li>📍 Bruxelles, Belgique</li>
                        <li>🕐 24/7 Disponible</li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Horaires</h4>
                    <p class="text-sm text-gray-400 mb-4">
                        Service disponible 24h/24, 7j/7 pour tous vos déplacements.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-yellow-400 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-yellow-400 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 text-center text-sm text-gray-400">
                <p>&copy; {{ date('Y') }} Jawad ADN CO. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-black/90', 'backdrop-blur-sm', 'shadow-lg');
            } else {
                navbar.classList.remove('bg-black/90', 'backdrop-blur-sm', 'shadow-lg');
            }
        });

        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    mobileMenu.classList.add('hidden');
                }
            });
        });
    </script>

</body>

</html>
