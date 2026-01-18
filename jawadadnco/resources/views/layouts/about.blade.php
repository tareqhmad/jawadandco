@extends('layouts.app')

@section('title', 'About Us | Elite Brussels Limousine')
@section('description', 'Learn about Elite Brussels Limousine - a premier chauffeur service in Brussels with over 10
    years of experience in luxury transportation.')

@section('content')
    <!-- Hero Section -->
    <section
        style="background: linear-gradient(135deg, var(--color-primary) 0%, rgba(255, 251, 254, 0.95) 100%); min-height: 60vh; display: flex; align-items: center; color: var(--color-dark); margin-top: 80px; position: relative;">
        <div class="container" style="position: relative; z-index: 2;">
            <div style="max-width: 800px; padding: 80px 0 40px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">Our
                    Story</span>
                <h1 class="hero-font fade-in-up"
                    style="font-size: 56px; margin: 20px 0 25px 0; line-height: 1.1; color: var(--color-dark);">
                    About Elite Brussels Limousine
                </h1>
                <p class="fade-in-up" style="font-size: 20px; margin-bottom: 40px; color: var(--color-secondary);">
                    For over a decade, we have been providing premium chauffeur services in Brussels, setting the standard
                    for luxury transportation.
                </p>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    <section class="section-padding">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center;">
                <div>
                    <h2 class="hero-font fade-in-up"
                        style="font-size: 48px; color: var(--color-dark); margin-bottom: 30px;">
                        Our Journey
                    </h2>
                    <div class="fade-in-up" style="color: var(--color-secondary); margin-bottom: 30px;">
                        <p style="margin-bottom: 20px; font-size: 18px;">
                            Founded in 2010 by transportation industry veterans, Elite Brussels Limousine began with a
                            simple mission: to provide Brussels with a truly premium chauffeur service that combines luxury,
                            reliability, and discretion.
                        </p>
                        <p style="margin-bottom: 20px; font-size: 18px;">
                            Starting with just two vehicles, we have grown to become one of Brussels' most respected
                            limousine services, serving corporate clients, international visitors, and local residents who
                            expect nothing but the best.
                        </p>
                        <p style="font-size: 18px;">
                            Our commitment to excellence has earned us the trust of diplomatic missions, Fortune 500
                            companies, and countless individuals celebrating life's special moments.
                        </p>
                    </div>
                </div>
                <div class="fade-in-up"
                    style="background: linear-gradient(45deg, var(--color-accent) 0%, var(--color-primary) 100%); height: 400px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                    <div style="text-align: center; padding: 40px;">
                        <div style="font-size: 80px; color: var(--color-secondary); margin-bottom: 20px;">
                            <i class="fas fa-award"></i>
                        </div>
                        <div style="font-size: 24px; color: var(--color-dark); font-weight: 600; margin-bottom: 10px;">
                            10+ Years of Excellence
                        </div>
                        <div style="color: var(--color-secondary);">
                            Serving Brussels with distinction
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="section-padding bg-accent">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">Our
                    Foundation</span>
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    Our Core Values
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    These principles guide every journey we undertake
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
                <div style="text-align: center;">
                    <div class="icon-circle">
                        <i class="fas fa-handshake" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">Professionalism</h3>
                    <p style="color: var(--color-secondary);">Our chauffeurs are not just drivers; they are professional
                        service providers trained in etiquette, safety, and customer care.</p>
                </div>

                <div style="text-align: center;">
                    <div class="icon-circle">
                        <i class="fas fa-shield-alt" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">Safety First</h3>
                    <p style="color: var(--color-secondary);">Every journey begins with a comprehensive safety check. Our
                        vehicles and chauffeurs meet the highest safety standards.</p>
                </div>

                <div style="text-align: center;">
                    <div class="icon-circle">
                        <i class="fas fa-user-secret" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">Discretion</h3>
                    <p style="color: var(--color-secondary);">We understand the importance of privacy. Our service is
                        designed with complete discretion in mind for all our clients.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section-padding">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">Our
                    Team</span>
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    Meet Our Leadership
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    Experienced professionals dedicated to exceptional service
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
                <div style="text-align: center;">
                    <div
                        style="width: 200px; height: 200px; background: linear-gradient(45deg, var(--color-accent) 0%, var(--color-secondary) 100%); border-radius: 50%; margin: 0 auto 30px; display: flex; align-items: center; justify-content: center; font-size: 60px; color: var(--color-white);">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 style="margin-bottom: 10px; color: var(--color-dark); font-size: 24px;">Jean-Luc Martin</h3>
                    <div style="color: var(--color-secondary); font-weight: 500; margin-bottom: 20px;">Founder & CEO</div>
                    <p style="color: var(--color-secondary);">
                        With over 20 years in luxury transportation, Jean-Luc ensures every aspect of our service meets the
                        highest standards.
                    </p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 200px; height: 200px; background: linear-gradient(45deg, var(--color-primary) 0%, var(--color-secondary) 100%); border-radius: 50%; margin: 0 auto 30px; display: flex; align-items: center; justify-content: center; font-size: 60px; color: var(--color-white);">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 style="margin-bottom: 10px; color: var(--color-dark); font-size: 24px;">Sophie Dubois</h3>
                    <div style="color: var(--color-secondary); font-weight: 500; margin-bottom: 20px;">Operations Director
                    </div>
                    <p style="color: var(--color-secondary);">
                        Sophie oversees our daily operations, ensuring seamless service delivery and maintaining our fleet
                        to pristine condition.
                    </p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 200px; height: 200px; background: linear-gradient(45deg, var(--color-secondary) 0%, var(--color-accent) 100%); border-radius: 50%; margin: 0 auto 30px; display: flex; align-items: center; justify-content: center; font-size: 60px; color: var(--color-white);">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 style="margin-bottom: 10px; color: var(--color-dark); font-size: 24px;">Marc Leroy</h3>
                    <div style="color: var(--color-secondary); font-weight: 500; margin-bottom: 20px;">Head Chauffeur</div>
                    <p style="color: var(--color-secondary);">
                        Marc leads our team of professional chauffeurs, setting the standard for service excellence and road
                        safety.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Chauffeurs -->
    <section class="section-padding bg-accent">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center;">
                <div>
                    <h2 class="hero-font fade-in-up"
                        style="font-size: 48px; color: var(--color-dark); margin-bottom: 30px;">
                        Our Professional Chauffeurs
                    </h2>
                    <div class="fade-in-up" style="color: var(--color-secondary);">
                        <p style="margin-bottom: 20px; font-size: 18px;">
                            Every Elite Brussels Limousine chauffeur undergoes a rigorous selection and training process. We
                            hire not just based on driving skill, but on professionalism, communication ability, and
                            commitment to service excellence.
                        </p>
                        <p style="margin-bottom: 20px; font-size: 18px;">
                            Our chauffeurs receive ongoing training in:
                        </p>
                        <ul style="list-style: none; color: var(--color-secondary);">
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Defensive driving and advanced safety techniques
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Multilingual communication (English, French, Dutch, German)
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Corporate etiquette and protocol
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Emergency response and first aid
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="fade-in-up"
                    style="background: linear-gradient(45deg, var(--color-primary) 0%, var(--color-accent) 100%); padding: 60px; border-radius: 8px; text-align: center;">
                    <i class="fas fa-id-card-alt"
                        style="font-size: 80px; color: var(--color-secondary); margin-bottom: 30px;"></i>
                    <h3 style="color: var(--color-dark); font-size: 24px; margin-bottom: 20px;">Chauffeur Qualifications
                    </h3>
                    <div style="color: var(--color-secondary); margin-bottom: 30px;">
                        All chauffeurs are fully licensed, insured, and undergo comprehensive background checks.
                    </div>
                    <div style="display: flex; justify-content: center; gap: 20px;">
                        <div style="text-align: center;">
                            <div style="font-size: 36px; font-weight: 700; color: var(--color-dark);">10+</div>
                            <div style="color: var(--color-secondary);">Years Experience</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 36px; font-weight: 700; color: var(--color-dark);">100%</div>
                            <div style="color: var(--color-secondary);">Background Checked</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Involvement -->
    <section class="section-padding">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">Giving
                    Back</span>
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    Community Commitment
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    We believe in giving back to the Brussels community that has supported us
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
                <div
                    style="text-align: center; background: var(--color-white); padding: 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div class="icon-circle">
                        <i class="fas fa-hands-helping" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">Charity Events</h3>
                    <p style="color: var(--color-secondary);">We provide complimentary transportation for select charity
                        events and fundraising galas throughout Brussels.</p>
                </div>

                <div
                    style="text-align: center; background: var(--color-white); padding: 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div class="icon-circle">
                        <i class="fas fa-graduation-cap" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">Local Employment</h3>
                    <p style="color: var(--color-secondary);">We prioritize hiring local talent and investing in training
                        programs for Brussels residents.</p>
                </div>

                <div
                    style="text-align: center; background: var(--color-white); padding: 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div class="icon-circle">
                        <i class="fas fa-leaf" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">Environmental
                        Responsibility</h3>
                    <p style="color: var(--color-secondary);">Our fleet is regularly updated to include the latest
                        eco-friendly models with reduced emissions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section-padding bg-dark">
        <div class="container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <h2 class="hero-font" style="font-size: 48px; color: var(--color-white); margin-bottom: 25px;">Experience
                    the Difference</h2>
                <p style="font-size: 20px; color: var(--color-accent); margin-bottom: 40px;">
                    Join our growing list of satisfied clients who have experienced the Elite Brussels Limousine difference.
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="/booking" class="btn-primary"
                        style="background-color: var(--color-white); color: var(--color-dark); border-color: var(--color-white);">
                        <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> Book Your Journey
                    </a>
                    <a href="/contact" class="btn-secondary"
                        style="color: var(--color-white); border-color: var(--color-white);">
                        <i class="fas fa-envelope" style="margin-right: 10px;"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
