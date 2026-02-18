@php
$locale = request()->route('locale');
$segments = request()->segments();

$supportedLocales = ['en', 'fr', 'nl'];

$currentLocale = app()->getLocale();
if (!in_array($currentLocale, $supportedLocales)) {
$currentLocale = 'en';
}

$segments = request()->segments();

if (!isset($segments[0]) || !in_array($segments[0], $supportedLocales)) {
array_unshift($segments, $currentLocale);
}

$buildLocaleUrl = function (string $locale) use ($segments) {
$new = $segments;
$new[0] = $locale;
return url(implode('/', $new));
};
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark'=> request()->cookie('theme', 'light') === 'dark'])>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', __('layout.default_title'))</title>
    <meta name="description" content="@yield('description', __('layout.default_description'))">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700|playfair-display:400,500,600"
        rel="stylesheet" />

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <style>
        :root {
            --color-primary: #FFFBFE;
            --color-secondary: #7A7D7D;
            --color-accent: #D0CFCF;
            --color-white: #FFFFFF;
            --color-dark: #4A4C4C;
            --color-footer-bg: #282e3b;
            --color-footer-text-primary: #B1B7C2;
            --color-footer-text-secondary: #7A7D7D;
        }

        html.dark {
            --color-primary: #0f1115;
            /* background global */
            --color-white: #1d222f;
            /* cartes / surfaces */
            --color-dark: #f2f4f7;
            /* texte principal */
            --color-secondary: #b1b7c2;
            /* texte secondaire */
            --color-accent: #333e50;
            /* borders / séparateurs */

        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--color-secondary);
            background-color: var(--color-primary);
            line-height: 1.6;
        }

        .hero-font {
            font-family: 'Playfair Display', serif;
        }

        .bg-primary {
            background-color: var(--color-primary);
        }

        .bg-secondary {
            background-color: var(--color-secondary);
        }

        .bg-accent {
            background-color: var(--color-accent);
        }

        .bg-white {
            background-color: var(--color-white);
        }

        .bg-dark {
            background-color: var(--color-dark);
        }

        .text-primary {
            color: var(--color-primary);
        }

        .text-secondary {
            color: var(--color-secondary);
        }

        .text-accent {
            color: var(--color-accent);
        }

        .text-white {
            color: var(--color-white);
        }

        .text-dark {
            color: var(--color-dark);
        }

        .btn-primary {
            background-color: var(--color-secondary);
            color: var(--color-white);
            padding: 14px 36px;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            border: 2px solid var(--color-secondary);
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 0.5px;
        }

        .btn-primary:hover {
            background-color: var(--color-dark);
            border-color: var(--color-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(122, 125, 125, 0.2);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--color-secondary);
            padding: 14px 36px;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            border: 2px solid var(--color-secondary);
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 0.5px;
        }

        .btn-secondary:hover {
            background-color: var(--color-secondary);
            color: var(--color-white);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(122, 125, 125, 0.2);
        }

        .section-padding {
            padding: 100px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Navigation */
        .nav-bar {
            background: var(--color-primary);
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(122, 125, 125, 0.08);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 600;
            text-decoration: none;
            letter-spacing: 1px;
        }

        .nav-links {
            background: var(--color-primary);
            color: var(--color-secondary);
            display: flex;
            justify-content: center;
            gap: 40px;
            width: 100%;
        }

        .nav-links-container {
            background: var(--color-primary);
            color: var(--color-secondary);
            display: flex;
            align-items: center;
            justify-content: start;
            width: 100%;
        }

        .nav-settings {
            width: fit-content;
        }

        .nav-links a.active {
            color: var(--color-dark);
        }

        .nav-links a.active::after {
            width: 100%;
        }

        .nav-links a.active::after {
            background-color: var(--color-dark);
        }

        .nav-links a {
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
            font-size: 16px;
        }

        .nav-links a:hover {
            color: var(--color-dark);
        }

        .nav-links a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--color-dark);
            transition: width 0.3s ease;
        }

        .nav-links a:hover:after {
            width: 100%;
        }

        /* Icon Styles */
        .icon-circle {
            width: 80px;
            height: 80px;
            background: var(--color-white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 32px;
            color: var(--color-secondary);
            box-shadow: 0 5px 15px rgba(122, 125, 125, 0.1);
            transition: all 0.3s ease;
        }

        .icon-circle:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(122, 125, 125, 0.15);
            color: var(--color-dark);
        }

        /* Mobile menu toggle */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--color-secondary);
            cursor: pointer;
            z-index: 1001;
        }

        .noselect {
            -webkit-touch-callout: none;
            /* iOS Safari */
            -webkit-user-select: none;
            /* Safari */
            -khtml-user-select: none;
            /* Konqueror HTML */
            -moz-user-select: none;
            /* Old versions of Firefox */
            -ms-user-select: none;
            /* Internet Explorer/Edge */
            user-select: none;
        }

        th,
        td {
            padding: 1vw;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .section-padding {
                padding: 80px 0;
            }

            .nav-links {
                gap: 25px;
            }

            .car-image {
                max-width: 350px;
            }
        }

        @media (max-width: 1190px) {
            .car-image {
                max-width: 390px;
            }
        }

        @media (max-width: 860px) {
            html {
                display: flex;
                flex-direction: column;
                justify-content: center;

            }

            .container {
                justify-content: center;
                align-items: center;
                display: flex;
                flex-direction: column;
                width: 100vw;
                min-width: 80vw;
                width: 80vw;
                max-width: 100vw;
                padding: 10px;
            }

            body {
                border: solid 1px black;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .mobile-menu-btn {
                display: block;
            }

            .car-image {
                max-width: 390px;
            }

            .nav-links {
                flex-direction: column;
                gap: 20px;
            }

            .nav-settings {
                width: 100%;
            }

            .nav-links-container {
                position: fixed;
                top: 80px;
                left: 0;
                right: 0;
                flex-direction: column;
                padding: 30px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                display: none;
                gap: 20px;
                z-index: 999;
            }

            .nav-links-container.active {
                display: flex;
            }

            .nav-links a {
                padding: 10px 0;
                border-bottom: 1px solid var(--color-accent);
            }

            .nav-links a:last-child {
                border-bottom: none;
            }

            .logo {
                color: var(--color-secondary);
                font-size: 24px;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .noHoverAnimation::after {
            display: none !important;
        }

        .noHoverAnimation:hover::after {
            width: 0 !important;
        }

        .lang-menu {
            display: none;
            position: absolute;
            right: 0;
            top: calc(100% + 8px);
            min-width: 55px;
            background: var(--color-white);
            border: 1px solid var(--color-accent);
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            z-index: 2000;
        }

        .lang-menu .lang-item:hover {
            background: var(--color-accent);
        }

        .lang-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-size: 12px;
            font-weight: 600;
            color: var(--color-dark);
            background: var(--color-accent);
            padding: 6px 10px;
            border-radius: 6px;
        }
    </style>

    @stack('styles')
</head>

<body>
    <!-- Navigation -->
    <nav class="nav-bar">
        <div class="nav-container">
            <a href="/{{ app()->getLocale() }}" class="logo">
                Luxway
            </a>

            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>

            <div class="nav-links-container" id="navLinksContainer">
                <div class="nav-links" id="navLinks">
                    <a href="/{{ app()->getLocale() }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        {{ __('layout.nav_home') }}
                    </a>

                    <a href="/{{ app()->getLocale() }}/services"
                        class="{{ request()->routeIs('services*') ? 'active' : '' }}">
                        {{ __('layout.nav_services') }}
                    </a>

                    <a href="/{{ app()->getLocale() }}/fleet" class="{{ request()->routeIs('fleet*') ? 'active' : '' }}">
                        {{ __('layout.nav_fleet') }}
                    </a>

                    <a href="/{{ app()->getLocale() }}/booking"
                        class="{{ request()->routeIs('booking*') ? 'active' : '' }}">
                        {{ __('layout.nav_booking') }}
                    </a>

                    <a href="/{{ app()->getLocale() }}/about" class="{{ request()->routeIs('about*') ? 'active' : '' }}">
                        {{ __('layout.nav_about') }}
                    </a>

                    <a href="/{{ app()->getLocale() }}/contact"
                        class="{{ request()->routeIs('contact*') ? 'active' : '' }}">
                        {{ __('layout.nav_contact') }}
                    </a>
                </div>
                <div class="nav-settings">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <button type="button" id="theme-toggle" style="cursor: pointer">
                            @if (request()->cookie('theme', 'light') === 'dark')
                            <i class="fas fa-sun"></i>
                            @else
                            <i class="fas fa-moon"></i>
                            @endif
                        </button>

                        <div class="lang-dropdown" style="position: relative; display: inline-block;">
                            <button type="button" class="lang-btn noHoverAnimation">
                                {{ strtoupper($currentLocale) }}
                                <i class="fas fa-chevron-down" style="font-size:10px;"></i>
                            </button>

                            <div class="lang-menu">
                                @foreach (array_diff($supportedLocales, [$currentLocale]) as $loc)
                                <a class="lang-item noHoverAnimation" href="{{ $buildLocaleUrl($loc) }}"
                                    style="display:flex; align-items:center; justify-content:space-between; padding:10px 12px;
                                        text-decoration:none; color: var(--color-dark); font-size:12px;">
                                    <span class="noselect">{{ strtoupper($loc) }}</span>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer
        style="background-color: var(--color-footer-bg); color: var(--color-footer-text-primary); padding-top: 20px;">
        <div class="container section-padding">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 50px;">
                <div>
                    <h3 class="hero-font" style="font-size: 26px; margin-bottom: 25px;">
                        {{ __('layout.footer_brand_title') }}
                    </h3>
                    <p style="margin-bottom: 20px;">{{ __('layout.footer_brand_text') }}</p>

                    <div style="display: flex; gap: 15px; margin-top: 20px;">
                        <a href="#" style="font-size: 20px;"><i class="fab fa-facebook"></i></a>
                        <a href="#" style="font-size: 20px;"><i class="fab fa-instagram"></i></a>
                        <a href="#" style="font-size: 20px;"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div>
                    <h4 style="font-size: 18px; font-weight: 600; margin-bottom: 25px">
                        {{ __('layout.footer_quick_links') }}
                    </h4>
                    <ul style="list-style: none;">
                        <li style="margin-bottom: 12px;">
                            <a href="/{{ app()->getLocale() }}/services"
                                style="color: var(--color-footer-text-secondary); text-decoration: none; transition: color 0.3s ease;">
                                {{ __('layout.footer_link_services') }}
                            </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="/{{ app()->getLocale() }}/fleet"
                                style="color: var(--color-footer-text-secondary); text-decoration: none; transition: color 0.3s ease;">
                                {{ __('layout.footer_link_fleet') }}
                            </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="/{{ app()->getLocale() }}/booking"
                                style="color: var(--color-footer-text-secondary); text-decoration: none; transition: color 0.3s ease;">
                                {{ __('layout.footer_link_booking') }}
                            </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="/{{ app()->getLocale() }}/contact"
                                style="color: var(--color-footer-text-secondary); text-decoration: none; transition: color 0.3s ease;">
                                {{ __('layout.footer_link_contact') }}
                            </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="/{{ app()->getLocale() }}/privacy-policy"
                                style="color: var(--color-footer-text-secondary); text-decoration: none; transition: color 0.3s ease;">
                                {{ __('layout.footer_link_privacy_policy') }}
                            </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="/{{ app()->getLocale() }}/legal-notices"
                                style="color: var(--color-footer-text-secondary); text-decoration: none; transition: color 0.3s ease;">
                                {{ __('layout.footer_link_legal_notices') }}
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 style="font-size: 18px; font-weight: 600; margin-bottom: 25px;">
                        {{ __('layout.footer_contact_info') }}
                    </h4>

                    <div style="margin-bottom: 15px; display: flex; align-items: start; gap: 10px;">
                        <i class="fas fa-map-marker-alt"
                            style="color: var(--color-footer-text-secondary); margin-top: 3px;"></i>
                        <p>{{ __('layout.footer_address') }}</p>
                    </div>
                    <div style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-phone" style="color: var(--color-footer-text-secondary);"></i>
                        <p>{{ __('layout.footer_phone') }}</p>
                    </div>
                    <div style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-envelope" style="color: var(--color-footer-text-secondary);"></i>
                        <p>{{ __('layout.footer_email') }}</p>
                    </div>

                    <!-- WhatsApp Button -->
                    <div class="whatsapp-button" style="position: fixed; bottom: 30px; right: 30px; z-index: 1000;">
                        <a href="{{ __('layout.whatsapp_url') }}" target="_blank"
                            style="display: flex; align-items: center; justify-content: center; gap: 12px; background-color: #25D366; color: white; font-weight: 600; font-size: 16px; padding: 16px 28px; border-radius: 50px; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 6px 20px rgba(37, 211, 102, 0.3);"
                            onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 10px 25px rgba(37, 211, 102, 0.4)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 20px rgba(37, 211, 102, 0.3)';">

                            <img src="{{ URL::to('/') }}/images/whatsapp-white-icon.png" class="whatsapp-icon" style="width: 26px; height: 26px; aspect-ratio: 1; object-fit: contain;"/>

                            <span class="whatsapp-text">{{ __('layout.whatsapp_label') }}</span>
                        </a>
                    </div>

                    <style>
                        @media (max-width: 768px) {
                            .whatsapp-button {
                                bottom: 25px !important;
                                right: 25px !important;
                            }

                            .whatsapp-button a {
                                padding: 18px !important;
                                width: 60px !important;
                                height: 60px !important;
                                border-radius: 50% !important;
                                gap: 0 !important;
                            }

                            .whatsapp-text {
                                display: none !important;
                            }

                            .whatsapp-icon {
                                width: 32px !important;
                                height: 32px !important;
                            }
                        }

                        @media (min-width: 769px) {
                            .whatsapp-text {
                                display: inline-block;
                            }
                        }
                    </style>
                </div>
            </div>

            <div
                style="border-top: 1px solid rgba(208, 207, 207, 0.2); margin-top: 70px; padding-top: 30px; text-align: center; color: var(--color-footer-text-secondary);">
                <p>&copy; {{ date('Y') }} {{ __('layout.copyright') }}</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            const navLinks = document.getElementById('navLinks');
            const navLinksContainer = document.getElementById('navLinksContainer');
            navLinks.classList.toggle('active');
            navLinksContainer.classList.toggle('active');

            const icon = this.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('navLinks').classList.remove('active');
                document.querySelector('#mobileMenuBtn i').classList.remove('fa-times');
                document.querySelector('#mobileMenuBtn i').classList.add('fa-bars');
            });
        });

        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.nav-bar');
            if (window.scrollY > 50) {
                navbar.style.padding = '15px 0';
                navbar.style.boxShadow = '0 5px 20px rgba(122, 125, 125, 0.15)';
            } else {
                navbar.style.padding = '20px 0';
                navbar.style.boxShadow = '0 2px 20px rgba(122, 125, 125, 0.08)';
            }
        });

        function animateOnScroll() {
            const elements = document.querySelectorAll('.fade-in-up');
            elements.forEach(element => {
                const position = element.getBoundingClientRect();
                if (position.top < window.innerHeight - 100) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        }

        window.addEventListener('load', animateOnScroll);
        window.addEventListener('scroll', animateOnScroll);
    </script>

    <script>
        (function() {
            const btn = document.getElementById('theme-toggle');
            if (!btn) return;

            const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            function isDark() {
                return document.documentElement.classList.contains('dark');
            }

            function syncButtonLabel() {
                btn.innerHTML = isDark() ?
                    '<i class="fas fa-sun"></i>' :
                    '<i class="fas fa-moon"></i>';
            }

            syncButtonLabel();

            btn.addEventListener('click', async () => {
                document.documentElement.classList.toggle('dark');
                syncButtonLabel();

                try {
                    const res = await fetch("{{ route('theme.toggle') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": csrf,
                            "Accept": "application/json"
                        },
                        credentials: "same-origin"
                    });

                    if (!res.ok) {
                        document.documentElement.classList.toggle('dark');
                        syncButtonLabel();
                        console.error('Theme toggle failed:', res.status);
                    }
                } catch (e) {
                    document.documentElement.classList.toggle('dark');
                    syncButtonLabel();
                    console.error('Theme toggle error:', e);
                }
            });
        })();
    </script>
    <script>
        (function() {
            const root = document.querySelector('.lang-dropdown');
            if (!root) return;

            const btn = root.querySelector('.lang-btn');
            const menu = root.querySelector('.lang-menu');

            function close() {
                menu.style.display = 'none';
            }

            function toggle() {
                menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
            }

            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                toggle();
            });

            document.addEventListener('click', close);
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') close();
            });
        })();
    </script>

    @stack('scripts')
</body>

</html>
