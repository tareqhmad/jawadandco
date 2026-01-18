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
                <!-- Mercedes S-Class -->
                <div class="fade-in-up"
                    style="background: var(--color-white); border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div
                        style="height: 250px; background: linear-gradient(45deg, var(--color-accent) 0%, var(--color-primary) 100%); display: flex; align-items: center; justify-content: center;">
                        <div style="text-align: center;">
                            <i class="fas fa-car" style="font-size: 80px; color: var(--color-secondary);"></i>
                            <h3 style="margin-top: 20px; color: var(--color-dark); font-size: 24px;">Mercedes-Benz S-Class
                            </h3>
                        </div>
                    </div>
                    <div style="padding: 40px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 25px;">
                            <div>
                                <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">Passengers
                                </div>
                                <div style="color: var(--color-secondary);">3-4</div>
                            </div>
                            <div>
                                <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">Luggage</div>
                                <div style="color: var(--color-secondary);">3 large</div>
                            </div>
                            <div>
                                <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">Category</div>
                                <div style="color: var(--color-secondary);">Executive</div>
                            </div>
                        </div>
                        <p style="color: var(--color-secondary); margin-bottom: 30px;">
                            The ultimate in luxury sedans, featuring premium leather, advanced climate control, and
                            whisper-quiet cabin.
                        </p>
                        <ul style="list-style: none; margin-bottom: 30px; color: var(--color-secondary);">
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Wi-Fi & Mobile Charging
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Refreshment Bar
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Panoramic Sunroof
                            </li>
                        </ul>
                        <div style="text-align: center;">
                            <a href="/booking" class="btn-primary" style="width: 100%;">
                                <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> Book This Vehicle
                            </a>
                        </div>
                    </div>
                </div>

                <!-- BMW 7 Series -->
                <div class="fade-in-up"
                    style="background: var(--color-white); border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div
                        style="height: 250px; background: linear-gradient(45deg, var(--color-primary) 0%, var(--color-accent) 100%); display: flex; align-items: center; justify-content: center;">
                        <div style="text-align: center;">
                            <i class="fas fa-car" style="font-size: 80px; color: var(--color-secondary);"></i>
                            <h3 style="margin-top: 20px; color: var(--color-dark); font-size: 24px;">BMW 7 Series</h3>
                        </div>
                    </div>
                    <div style="padding: 40px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 25px;">
                            <div>
                                <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">Passengers
                                </div>
                                <div style="color: var(--color-secondary);">3-4</div>
                            </div>
                            <div>
                                <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">Luggage</div>
                                <div style="color: var(--color-secondary);">3 large</div>
                            </div>
                            <div>
                                <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">Category</div>
                                <div style="color: var(--color-secondary);">Executive</div>
                            </div>
                        </div>
                        <p style="color: var(--color-secondary); margin-bottom: 30px;">
                            Combining sporty performance with executive luxury, featuring gesture control and executive
                            lounge seating.
                        </p>
                        <ul style="list-style: none; margin-bottom: 30px; color: var(--color-secondary);">
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Bowers & Wilkins Sound
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Massage Seats
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Rear Entertainment
                            </li>
                        </ul>
                        <div style="text-align: center;">
                            <a href="/booking" class="btn-primary" style="width: 100%;">
                                <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> Book This Vehicle
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Limousine -->

                <!-- Mercedes V-Class -->
                <div class="fade-in-up"
                    style="background: var(--color-white); border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div
                        style="height: 250px; background: linear-gradient(45deg, var(--color-accent) 0%, var(--color-secondary) 100%); display: flex; align-items: center; justify-content: center;">
                        <div style="text-align: center;">
                            <i class="fas fa-van" style="font-size: 80px; color: var(--color-white);"></i>
                            <h3 style="margin-top: 20px; color: var(--color-white); font-size: 24px;">Mercedes V-Class</h3>
                        </div>
                    </div>
                    <div style="padding: 40px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 25px;">
                            <div>
                                <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">Passengers
                                </div>
                                <div style="color: var(--color-secondary);">6-7</div>
                            </div>
                            <div>
                                <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">Luggage</div>
                                <div style="color: var(--color-secondary);">8+ large</div>
                            </div>
                            <div>
                                <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">Category</div>
                                <div style="color: var(--color-secondary);">Executive Van</div>
                            </div>
                        </div>
                        <p style="color: var(--color-secondary); margin-bottom: 30px;">
                            Spacious luxury for larger groups, offering exceptional comfort and ample luggage space.
                        </p>
                        <ul style="list-style: none; margin-bottom: 30px; color: var(--color-secondary);">
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Captain's Chairs
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Individual Climate Control
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Panoramic Roof
                            </li>
                        </ul>
                        <div style="text-align: center;">
                            <a href="/booking" class="btn-primary" style="width: 100%;">
                                <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> Book This Vehicle
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
