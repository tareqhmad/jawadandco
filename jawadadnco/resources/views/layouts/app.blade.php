@php
    $locale = request()->route('locale');
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Elite Brussels Limousine - Premium Chauffeur Service')</title>
    <meta name="description" content="@yield('description', 'Premium limousine and private chauffeur services in Brussels. Airport transfers, corporate travel, and luxury events.')">

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
            background-color: var(--color-primary);
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(122, 125, 125, 0.08);
            transition: all 0.3s ease;
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
            color: var(--color-dark);
            text-decoration: none;
            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            color: var(--color-secondary);
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

        /* Responsive */
        @media (max-width: 992px) {
            .section-padding {
                padding: 80px 0;
            }

            .nav-links {
                gap: 25px;
            }
        }

        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }

            .nav-links {
                position: fixed;
                top: 80px;
                left: 0;
                right: 0;
                background: var(--color-white);
                flex-direction: column;
                padding: 30px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                display: none;
                gap: 20px;
                z-index: 999;
            }

            .nav-links.active {
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
    </style>

    @stack('styles')
</head>

<body>
    <!-- Navigation -->
    <nav class="nav-bar">
        <div class="nav-container">
            <a href="/" class="logo">EliteBrussels Limo</a>

            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>

            <div class="nav-links" id="navLinks">
                <a href="/">Home</a>
                <a href="/services">Services</a>
                <a href="/fleet">Fleet</a>
                <a href="/booking">Booking</a>
                <a href="/pricing">Pricing</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white">
        <div class="container section-padding">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 50px;">
                <div>
                    <h3 class="hero-font" style="font-size: 26px; margin-bottom: 25px; color: var(--color-white);">
                        EliteBrussels Limo</h3>
                    <p style="margin-bottom: 20px;">Premium chauffeur services in Brussels. Excellence in every journey,
                        discretion in every detail.</p>
                    <div style="display: flex; gap: 15px; margin-top: 20px;">
                        <a href="#" style="color: var(--color-white); font-size: 20px;"><i
                                class="fab fa-facebook"></i></a>
                        <a href="#" style="color: var(--color-white); font-size: 20px;"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" style="color: var(--color-white); font-size: 20px;"><i
                                class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div>
                    <h4 style="font-size: 18px; font-weight: 600; margin-bottom: 25px; color: var(--color-white);">Quick
                        Links</h4>
                    <ul style="list-style: none;">
                        <li style="margin-bottom: 12px;"><a href="/services"
                                style="color: var(--color-accent); text-decoration: none; transition: color 0.3s ease;">Our
                                Services</a></li>
                        <li style="margin-bottom: 12px;"><a href="/fleet"
                                style="color: var(--color-accent); text-decoration: none; transition: color 0.3s ease;">Our
                                Fleet</a></li>
                        <li style="margin-bottom: 12px;"><a href="/booking"
                                style="color: var(--color-accent); text-decoration: none; transition: color 0.3s ease;">Book
                                Now</a></li>
                        <li style="margin-bottom: 12px;"><a href="/contact"
                                style="color: var(--color-accent); text-decoration: none; transition: color 0.3s ease;">Contact
                                Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="font-size: 18px; font-weight: 600; margin-bottom: 25px; color: var(--color-white);">
                        Contact Info</h4>
                    <div style="margin-bottom: 15px; display: flex; align-items: start; gap: 10px;">
                        <i class="fas fa-map-marker-alt" style="color: var(--color-accent); margin-top: 3px;"></i>
                        <p>Avenue Louise 123, 1050 Brussels, Belgium</p>
                    </div>
                    <div style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-phone" style="color: var(--color-accent);"></i>
                        <p>+32 2 123 4567</p>
                    </div>
                    <div style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-envelope" style="color: var(--color-accent);"></i>
                        <p>info@elitebrusselslimo.be</p>
                    </div>
                    <!-- WhatsApp Button Flottant avec icône seulement sur mobile -->
                    <div class="whatsapp-button" style="position: fixed; bottom: 30px; right: 30px; z-index: 1000;">
                        <a href="https://wa.me/32497227033?text=Bonjour%20Elite%20Brussels%20Limousine,%20je%20souhaite%20obtenir%20un%20devis%20pour%20un%20chauffeur%20priv%C3%A9%20%C3%A0%20Bruxelles."
                            target="_blank"
                            style="display: flex; align-items: center; justify-content: center; gap: 12px; background-color: #25D366; color: white; font-weight: 600; font-size: 16px; padding: 16px 28px; border-radius: 50px; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 6px 20px rgba(37, 211, 102, 0.3);"
                            onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 10px 25px rgba(37, 211, 102, 0.4)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 20px rgba(37, 211, 102, 0.3)';">

                            <!-- SVG WhatsApp Icon -->
                            <svg class="whatsapp-icon" style="width: 26px; height: 26px; flex-shrink: 0;"
                                viewBox="0 0 32 32" fill="currentColor">
                                <path
                                    d="M19.11 17.44c-.28-.14-1.64-.81-1.89-.9-.25-.09-.43-.14-.61.14-.18.28-.7.9-.86 1.08-.16.18-.32.2-.6.07-.28-.14-1.17-.43-2.23-1.38-.83-.74-1.39-1.66-1.55-1.94-.16-.28-.02-.43.12-.57.12-.12.28-.32.43-.48.14-.16.18-.28.28-.47.09-.18.05-.35-.02-.49-.07-.14-.61-1.47-.83-2.01-.22-.53-.44-.46-.61-.47h-.52c-.18 0-.47.07-.71.35-.25.28-.93.9-.93 2.2s.95 2.55 1.08 2.73c.14.18 1.87 2.86 4.54 4.01.64.28 1.14.45 1.53.58.64.20 1.22.17 1.68.10.51-.08 1.64-.67 1.87-1.32.23-.65.23-1.21.16-1.32-.07-.11-.25-.18-.53-.32z" />
                                <path
                                    d="M16 2.67C8.64 2.67 2.67 8.64 2.67 16c0 2.59.75 5.01 2.04 7.05L2 30l7.14-2.69A13.26 13.26 0 0 0 16 29.33c7.36 0 13.33-5.97 13.33-13.33S23.36 2.67 16 2.67zm0 24c-2.23 0-4.30-.65-6.05-1.77l-.43-.26-4.24 1.60 1.60-4.14-.28-.43A10.66 10.66 0 0 1 5.33 16c0-5.88 4.79-10.67 10.67-10.67S26.67 10.12 26.67 16 21.88 26.67 16 26.67z" />
                            </svg>

                            <span class="whatsapp-text">WhatsApp</span>
                        </a>

                        <!-- Indicateur de disponibilité -->
                        <div
                            style="position: absolute; top: -10px; right: -10px; width: 20px; height: 20px; background-color: #25D366; border-radius: 50%; border: 3px solid white; animation: whatsapp-pulse 2s infinite;">
                        </div>
                    </div>

                    <style>
                        @keyframes whatsapp-pulse {
                            0% {
                                transform: scale(0.9);
                                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
                            }

                            70% {
                                transform: scale(1.1);
                                box-shadow: 0 0 0 12px rgba(37, 211, 102, 0);
                            }

                            100% {
                                transform: scale(0.9);
                                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
                            }
                        }

                        /* Responsive WhatsApp Button */
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
                style="border-top: 1px solid rgba(208, 207, 207, 0.2); margin-top: 70px; padding-top: 30px; text-align: center; color: var(--color-accent);">
                <p>&copy; {{ date('Y') }} Elite Brussels Limousine. All rights reserved. | Professional chauffeur
                    services in Brussels</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.toggle('active');

            // Change icon
            const icon = this.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('navLinks').classList.remove('active');
                document.querySelector('#mobileMenuBtn i').classList.remove('fa-times');
                document.querySelector('#mobileMenuBtn i').classList.add('fa-bars');
            });
        });

        // Navbar scroll effect
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

        // Add animation to elements on scroll
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

        // Initial check
        window.addEventListener('load', animateOnScroll);
        window.addEventListener('scroll', animateOnScroll);
    </script>

    @stack('scripts')
</body>

</html>
