@extends('layouts.app')

@section('title', 'Our Luxury Fleet | Premium Limousines Brussels')
@section('description',
    'Discover our luxury fleet of limousines, sedans, and SUVs available for hire in Brussels.
    Mercedes-Benz, BMW, Audi, and more.')

@section('content')
    <!-- Hero Section -->
    <section
        style="background: linear-gradient(135deg, var(--color-primary) 0%, rgba(255, 251, 254, 0.95) 100%); min-height: 60vh; display: flex; align-items: center; color: var(--color-dark); margin-top: 80px; position: relative;">
        <div class="container" style="position: relative; z-index: 2;">
            <div style="max-width: 800px; padding: 80px 0 40px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">Our
                    Collection</span>
                <h1 class="hero-font fade-in-up"
                    style="font-size: 56px; margin: 20px 0 25px 0; line-height: 1.1; color: var(--color-dark);">
                    Luxury Fleet
                </h1>
                <p class="fade-in-up" style="font-size: 20px; margin-bottom: 40px; color: var(--color-secondary);">
                    Discover our meticulously maintained fleet of premium vehicles, each selected for comfort, style, and
                    reliability.
                </p>
            </div>
        </div>
    </section>

    <!-- Fleet Grid -->
    <section class="section-padding">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 50px;">
                <x-fleet-card title="Mercedes V-Class" passengers="6-7" imageName="mercedes-v-class.png" luggage="8+ large"
                    category="Executive"
                    description="Spacious luxury for larger groups, offering exceptional comfort and ample luggage space."
                    :features="['Captain\'s Chairs', 'Individual Climate Control', 'Panoramic Roof']" icon="fas fa-van" iconColor="var(--color-white)" headerTextColor="var(--color-dark)"
                    gradientFrom="var(--color-primary)" gradientTo="var(--color-accent)" />
                <x-fleet-card title="Mercedes S-Class" passengers="3-4" imageName="mercedes-s-class.png" luggage="3"
                    category="Executive"
                    description="The ultimate in luxury sedans, featuring premium leather, advanced climate control, and
                            whisper-quiet cabin."
                    :features="['Wi-Fi & Mobile Charging', 'Refreshment Bar', 'Panoramic Roof']" icon="fas fa-van" iconColor="var(--color-white)" headerTextColor="var(--color-dark)"
                    gradientFrom="var(--color-primary)" gradientTo="var(--color-accent)" />

                <x-fleet-card title="BMW 7 Series" passengers="3-4" imageName="bmw-7-series.png" luggage="3 large"
                    category="Executive"
                    description="Combining sporty performance with executive luxury, featuring gesture control and executive
                            lounge seating."
                    :features="['Bowers & Wilkins Sound', 'Massage Seats', 'Rear Entertainment']" icon="fas fa-car" iconColor="var(--color-secondary)"
                    headerTextColor="var(--color-dark)" gradientFrom="var(--color-primary)" gradientTo="var(--color-accent)" />
                    
                <x-fleet-card title="Mercedes E-Class" passengers="3-4" imageName="mercedes-e-class.png" luggage="3 large"
                    category="Business"
                    description="A refined premium sedan that balances comfort and elegance.
                    The E-Class Sedan offers a quiet, smooth ride and a relaxed driving feel"
                    :features="['Exceptional ride comfort', 'Quiet, relaxing cabin', 'Heated Seats']" icon="fas fa-car" iconColor="var(--color-secondary)"
                    headerTextColor="var(--color-dark)" gradientFrom="var(--color-primary)" gradientTo="var(--color-accent)" />
                <x-fleet-card title="Mercedes Sprinter" passengers="16-20" imageName="mercedes-sprinter.png" luggage="10-16 medium"
                    category="Group"
                    description="Ideal for larger groups, offering spacious seating and modern amenities for a comfortable
                            journey."
                    :features="['Air Conditioning', 'Spacious Interior', 'Comfortable Seating']" icon="fas fa-bus" iconColor="var(--color-secondary)"
                    headerTextColor="var(--color-dark)" gradientFrom="var(--color-primary)" gradientTo="var(--color-accent)" />
                <x-fleet-card title="Iveco Daily Minibus" passengers="26-30" imageName="iveco-daily.png" luggage="10-16 medium"
                    category="Group"
                    description="Perfect for group travel, featuring comfortable seating and ample luggage space for all your
                            needs."
                    :features="['Spacious Seating', 'Air Conditioning', 'Large Luggage Capacity']" icon="fas fa-bus" iconColor="var(--color-secondary)"
                    headerTextColor="var(--color-dark)" gradientFrom="var(--color-primary)" gradientTo="var(--color-accent)" />
                <x-fleet-card title="Mercedes Coach" passengers="40-50" imageName="mercedes-coach.png" luggage="20-30 medium"
                    category="Group"
                    description="Our largest vehicle, ideal for corporate events and large groups, offering maximum comfort and
                            space."
                    :features="['Spacious Interior', 'Air Conditioning', 'Comfortable Seating']" icon="fas fa-bus" iconColor="var(--color-secondary)"
                    headerTextColor="var(--color-dark)" gradientFrom="var(--color-primary)" gradientTo="var(--color-accent)" />
    </section>

    <!-- Fleet Features -->
    <section class="section-padding bg-accent">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">Why
                    Our Fleet</span>
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    Fleet Excellence
                </h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
                <div style="text-align: center;">
                    <div class="icon-circle">
                        <i class="fas fa-sync-alt" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">Regularly Updated</h3>
                    <p style="color: var(--color-secondary);">Our fleet is updated every 2-3 years to ensure you enjoy the
                        latest luxury models and technology.</p>
                </div>

                <div style="text-align: center;">
                    <div class="icon-circle">
                        <i class="fas fa-tools" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">Meticulous Maintenance</h3>
                    <p style="color: var(--color-secondary);">Every vehicle undergoes rigorous maintenance checks to ensure
                        safety and reliability.</p>
                </div>

                <div style="text-align: center;">
                    <div class="icon-circle">
                        <i class="fas fa-spray-can" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">Immaculate Cleanliness</h3>
                    <p style="color: var(--color-secondary);">Deep cleaning and sanitization after every journey for your
                        comfort and safety.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fleet Selection Help -->
    <section class="section-padding bg-white">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <h2 class="hero-font" style="font-size: 40px; color: var(--color-dark); margin-bottom: 25px;">Need Help
                    Choosing?</h2>
                <p style="font-size: 18px; color: var(--color-secondary); margin-bottom: 40px;">
                    Not sure which vehicle suits your needs? Our team of experts can help you select the perfect vehicle for
                    your occasion.
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="/contact" class="btn-primary">
                        <i class="fas fa-headset" style="margin-right: 10px;"></i> Contact Our Experts
                    </a>
                    <a href="/pricing" class="btn-secondary">
                        <i class="fas fa-euro-sign" style="margin-right: 10px;"></i> View Pricing
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
