@extends('layouts.app')

@section('title', 'Our Services | Premium Limousine Service Brussels')
@section('description', 'Discover our premium chauffeur services in Brussels: airport transfers, corporate travel,
    special events, and hourly limousine rentals.')

@section('content')
    <!-- Hero Section -->
    <section
        style="background: linear-gradient(135deg, var(--color-primary) 0%, rgba(255, 251, 254, 0.95) 100%); min-height: 60vh; display: flex; align-items: center; color: var(--color-dark); margin-top: 80px; position: relative;">
        <div class="container" style="position: relative; z-index: 2;">
            <div style="max-width: 800px; padding: 80px 0 40px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">Our
                    Offerings</span>
                <h1 class="hero-font fade-in-up"
                    style="font-size: 56px; margin: 20px 0 25px 0; line-height: 1.1; color: var(--color-dark);">
                    Premium Services
                </h1>
                <p class="fade-in-up" style="font-size: 20px; margin-bottom: 40px; color: var(--color-secondary);">
                    Experience the highest standard of luxury transportation in Brussels with our comprehensive range of
                    chauffeur services.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="section-padding bg-white">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px;">
                <!-- Airport Transfers -->
                <div class="fade-in-up"
                    style="background: var(--color-primary); padding: 50px 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div class="icon-circle">
                        <i class="fas fa-plane-departure" style="font-size: 32px;"></i>
                    </div>
                    <h2 style="font-size: 28px; margin-bottom: 20px; color: var(--color-dark); text-align: center;">Airport
                        Transfers</h2>
                    <p style="text-align: center; color: var(--color-secondary); margin-bottom: 30px;">
                        Seamless airport transfers to and from Brussels Airport (BRU) and Brussels South Charleroi Airport
                        (CRL).
                    </p>
                    <ul style="list-style: none; margin-bottom: 30px; color: var(--color-secondary);">
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            Flight tracking and wait time included
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            Meet & greet service with name sign
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            Luggage assistance included
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            24/7 availability
                        </li>
                    </ul>
                    <div style="text-align: center;">
                        <a href="/booking" class="btn-primary">
                            <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> Book Now
                        </a>
                    </div>
                </div>

                <!-- Corporate Travel -->
                <div class="fade-in-up"
                    style="background: var(--color-primary); padding: 50px 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div class="icon-circle">
                        <i class="fas fa-briefcase" style="font-size: 32px;"></i>
                    </div>
                    <h2 style="font-size: 28px; margin-bottom: 20px; color: var(--color-dark); text-align: center;">
                        Corporate Travel</h2>
                    <p style="text-align: center; color: var(--color-secondary); margin-bottom: 30px;">
                        Professional chauffeur services for business executives, corporate events, and client
                        transportation.
                    </p>
                    <ul style="list-style: none; margin-bottom: 30px; color: var(--color-secondary);">
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            Executive account management
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            Multiple city transfers
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            Wi-Fi and mobile charging
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            Discretion and confidentiality
                        </li>
                    </ul>
                    <div style="text-align: center;">
                        <a href="/contact" class="btn-secondary">
                            <i class="fas fa-envelope" style="margin-right: 10px;"></i> Corporate Inquiry
                        </a>
                    </div>
                </div>

                <!-- Special Events -->
                <div class="fade-in-up"
                    style="background: var(--color-primary); padding: 50px 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div class="icon-circle">
                        <i class="fas fa-glass-cheers" style="font-size: 32px;"></i>
                    </div>
                    <h2 style="font-size: 28px; margin-bottom: 20px; color: var(--color-dark); text-align: center;">Special
                        Events</h2>
                    <p style="text-align: center; color: var(--color-secondary); margin-bottom: 30px;">
                        Make your special occasions unforgettable with our luxury limousine and chauffeur services.
                    </p>
                    <ul style="list-style: none; margin-bottom: 30px; color: var(--color-secondary);">
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            Weddings and anniversaries
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            Galas and red carpet events
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            Birthday celebrations
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            Custom decoration available
                        </li>
                    </ul>
                    <div style="text-align: center;">
                        <a href="/booking" class="btn-primary">
                            <i class="fas fa-calendar-alt" style="margin-right: 10px;"></i> Plan Your Event
                        </a>
                    </div>
                </div>

                <!-- Hourly Service -->
                <div class="fade-in-up"
                    style="background: var(--color-primary); padding: 50px 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div class="icon-circle">
                        <i class="fas fa-clock" style="font-size: 32px;"></i>
                    </div>
                    <h2 style="font-size: 28px; margin-bottom: 20px; color: var(--color-dark); text-align: center;">Hourly
                        Service</h2>
                    <p style="text-align: center; color: var(--color-secondary); margin-bottom: 30px;">
                        Flexible hourly rentals for city tours, shopping trips, or any occasion requiring extended service.
                    </p>
                    <ul style="list-style: none; margin-bottom: 30px; color: var(--color-secondary);">
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            Minimum 3-hour booking
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check"
                                style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            Multiple stops allowed
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check"
                                style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            City and country tours
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check"
                                style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            Custom itineraries
                        </li>
                    </ul>
                    <div style="text-align: center;">
                        <a href="/pricing" class="btn-secondary">
                            <i class="fas fa-euro-sign" style="margin-right: 10px;"></i> View Pricing
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Process -->
    <section class="section-padding bg-accent">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">How
                    It Works</span>
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    Our Service Process
                </h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px;">
                <div style="text-align: center;">
                    <div
                        style="width: 80px; height: 80px; background: var(--color-white); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 28px; color: var(--color-secondary); font-weight: 700;">
                        1</div>
                    <h3 style="margin-bottom: 15px; color: var(--color-dark);">Book Online or Call</h3>
                    <p style="color: var(--color-secondary);">Book through our website or call us directly for personalized
                        service.</p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 80px; height: 80px; background: var(--color-white); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 28px; color: var(--color-secondary); font-weight: 700;">
                        2</div>
                    <h3 style="margin-bottom: 15px; color: var(--color-dark);">Confirm Details</h3>
                    <p style="color: var(--color-secondary);">We confirm all details and assign your dedicated chauffeur.
                    </p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 80px; height: 80px; background: var(--color-white); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 28px; color: var(--color-secondary); font-weight: 700;">
                        3</div>
                    <h3 style="margin-bottom: 15px; color: var(--color-dark);">Experience Luxury</h3>
                    <p style="color: var(--color-secondary);">Your chauffeur arrives punctually with a pristine vehicle.
                    </p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 80px; height: 80px; background: var(--color-white); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 28px; color: var(--color-secondary); font-weight: 700;">
                        4</div>
                    <h3 style="margin-bottom: 15px; color: var(--color-dark);">Relax & Enjoy</h3>
                    <p style="color: var(--color-secondary);">Sit back and enjoy a comfortable, luxurious journey to your
                        destination.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section-padding bg-dark">
        <div class="container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <h2 class="hero-font" style="font-size: 48px; color: var(--color-white); margin-bottom: 25px;">Ready to
                    Experience Premium Service?</h2>
                <p style="font-size: 20px; color: var(--color-accent); margin-bottom: 40px;">
                    Contact us today to discuss your transportation needs or book directly online.
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="/booking" class="btn-primary"
                        style="background-color: var(--color-white); color: var(--color-dark); border-color: var(--color-white);">
                        <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> Book Now
                    </a>
                    <a href="/contact" class="btn-secondary"
                        style="color: var(--color-white); border-color: var(--color-white);">
                        <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
