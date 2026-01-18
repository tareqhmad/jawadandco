@extends('layouts.app')

@section('title', 'Contact Us | Elite Brussels Limousine')
@section('description',
    'Contact Elite Brussels Limousine for bookings, inquiries, or support. We are available 24/7 to
    assist with your luxury transportation needs.')

@section('content')
    <!-- Hero Section -->
    <section
        style="background: linear-gradient(135deg, var(--color-primary) 0%, rgba(255, 251, 254, 0.95) 100%); min-height: 60vh; display: flex; align-items: center; color: var(--color-dark); margin-top: 80px; position: relative;">
        <div class="container" style="position: relative; z-index: 2;">
            <div style="max-width: 800px; padding: 80px 0 40px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">Get
                    in Touch</span>
                <h1 class="hero-font fade-in-up"
                    style="font-size: 56px; margin: 20px 0 25px 0; line-height: 1.1; color: var(--color-dark);">
                    Contact Us
                </h1>
                <p class="fade-in-up" style="font-size: 20px; margin-bottom: 40px; color: var(--color-secondary);">
                    We're here to help with all your transportation needs. Contact us today for bookings, inquiries, or
                    support.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="section-padding">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 50px;">
                <!-- Contact Card -->
                <div class="fade-in-up"
                    style="background: var(--color-white); padding: 50px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <h2 style="font-size: 32px; color: var(--color-dark); margin-bottom: 40px;">Contact Information</h2>

                    <div style="margin-bottom: 30px;">
                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <div
                                style="width: 50px; height: 50px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                <i class="fas fa-map-marker-alt" style="color: var(--color-secondary);"></i>
                            </div>
                            <div>
                                <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">Our Address
                                </div>
                                <div style="color: var(--color-secondary);">Avenue Louise 123<br>1050 Brussels, Belgium
                                </div>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <div
                                style="width: 50px; height: 50px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                <i class="fas fa-phone" style="color: var(--color-secondary);"></i>
                            </div>
                            <div>
                                <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">Phone Number
                                </div>
                                <div style="color: var(--color-secondary);">+32 2 123 4567</div>
                                <div style="color: var(--color-accent); font-size: 14px; margin-top: 5px;">24/7 Available
                                </div>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <div
                                style="width: 50px; height: 50px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                <i class="fas fa-envelope" style="color: var(--color-secondary);"></i>
                            </div>
                            <div>
                                <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">Email Address
                                </div>
                                <div style="color: var(--color-secondary);">info@elitebrusselslimo.be</div>
                                <div style="color: var(--color-accent); font-size: 14px; margin-top: 5px;">Response within 2
                                    hours</div>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 40px;">
                        <h3 style="font-size: 20px; color: var(--color-dark); margin-bottom: 20px;">Business Hours</h3>
                        <div style="color: var(--color-secondary);">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                <span>Monday - Friday</span>
                                <span>24/7 Service</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                <span>Saturday - Sunday</span>
                                <span>24/7 Service</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                <span>Holidays</span>
                                <span>24/7 Service</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="fade-in-up">
                    <h2 style="font-size: 32px; color: var(--color-dark); margin-bottom: 40px;">Send Us a Message</h2>

                    <form style="display: grid; gap: 25px;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">First
                                    Name *</label>
                                <input type="text" required
                                    style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            </div>
                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Last
                                    Name *</label>
                                <input type="text" required
                                    style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            </div>
                        </div>

                        <div>
                            <label
                                style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Email
                                Address *</label>
                            <div style="position: relative;">
                                <i class="fas fa-envelope"
                                    style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                <input type="email" required
                                    style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            </div>
                        </div>

                        <div>
                            <label
                                style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Phone
                                Number</label>
                            <div style="position: relative;">
                                <i class="fas fa-phone"
                                    style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                <input type="tel"
                                    style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            </div>
                        </div>

                        <div>
                            <label
                                style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Subject
                                *</label>
                            <select required
                                style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                                <option value="">Select Subject</option>
                                <option value="booking">Booking Inquiry</option>
                                <option value="quote">Request a Quote</option>
                                <option value="corporate">Corporate Services</option>
                                <option value="event">Special Events</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label
                                style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Message
                                *</label>
                            <textarea required
                                style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px; min-height: 150px;"
                                placeholder="Please provide details about your inquiry..."></textarea>
                        </div>

                        <button type="submit" class="btn-primary" style="width: 100%; padding: 18px; font-size: 18px;">
                            <i class="fas fa-paper-plane" style="margin-right: 10px;"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Contact -->
    <section class="section-padding bg-accent">
        <div class="container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <div class="icon-circle" style="margin: 0 auto 30px; background: var(--color-white);">
                    <i class="fas fa-headset" style="font-size: 32px;"></i>
                </div>
                <h2 class="hero-font" style="font-size: 40px; color: var(--color-dark); margin-bottom: 20px;">Emergency
                    Contact</h2>
                <p style="font-size: 18px; color: var(--color-secondary); margin-bottom: 40px;">
                    For urgent matters, existing bookings, or immediate assistance, please call our 24/7 emergency line.
                </p>
                <div
                    style="display: inline-flex; align-items: center; background: var(--color-white); padding: 20px 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.1);">
                    <i class="fas fa-phone-alt"
                        style="color: var(--color-secondary); font-size: 24px; margin-right: 15px;"></i>
                    <div>
                        <div style="font-size: 14px; color: var(--color-secondary);">24/7 Emergency Line</div>
                        <div style="font-size: 28px; font-weight: 700; color: var(--color-dark);">+32 2 123 4567</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Corporate Contact -->
    <section class="section-padding bg-white">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <h2 class="hero-font" style="font-size: 40px; color: var(--color-dark); margin-bottom: 25px;">Corporate
                    Services</h2>
                <p style="font-size: 18px; color: var(--color-secondary); margin-bottom: 40px;">
                    For corporate accounts, long-term contracts, or enterprise transportation solutions, please contact our
                    corporate team.
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="mailto:corporate@elitebrusselslimo.be" class="btn-primary">
                        <i class="fas fa-briefcase" style="margin-right: 10px;"></i> corporate@elitebrusselslimo.be
                    </a>
                    <a href="tel:+3221234568" class="btn-secondary">
                        <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> +32 2 123 4568
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Map & Location -->
    <section class="section-padding bg-accent">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    Our Location
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    Find us in the heart of Brussels. While we're primarily a mobile service, our administrative office is
                    located at:
                </p>
            </div>

            <div
                style="max-width: 1000px; margin: 0 auto; background: var(--color-white); border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.1);">
                <!-- Map Placeholder with Address -->
                <div
                    style="height: 400px; background: linear-gradient(45deg, var(--color-primary) 0%, var(--color-accent) 100%); display: flex; align-items: center; justify-content: center; position: relative;">
                    <!-- Map Marker -->
                    <div
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                        <div
                            style="width: 60px; height: 60px; background: var(--color-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                            <i class="fas fa-map-marker-alt" style="color: var(--color-white); font-size: 24px;"></i>
                        </div>
                        <div
                            style="background: var(--color-white); padding: 20px; border-radius: 4px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); min-width: 250px;">
                            <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">Elite Brussels
                                Limousine</div>
                            <div style="color: var(--color-secondary); font-size: 14px;">Avenue Louise 123, 1050 Brussels
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location Details -->
                <div style="padding: 40px;">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                        <div>
                            <h3 style="color: var(--color-dark); margin-bottom: 15px; font-size: 18px;">Getting Here</h3>
                            <p style="color: var(--color-secondary); font-size: 14px;">
                                Our office is conveniently located in the European Quarter, easily accessible by public
                                transportation and major roads.
                            </p>
                        </div>
                        <div>
                            <h3 style="color: var(--color-dark); margin-bottom: 15px; font-size: 18px;">Public Transport
                            </h3>
                            <ul style="list-style: none; color: var(--color-secondary); font-size: 14px;">
                                <li style="margin-bottom: 8px;">🚇 Metro: Louise (Lines 2 & 6)</li>
                                <li style="margin-bottom: 8px;">🚌 Bus: 54, 71, 38</li>
                                <li style="margin-bottom: 8px;">🚈 Train: Brussels-Luxembourg Station</li>
                            </ul>
                        </div>
                        <div>
                            <h3 style="color: var(--color-dark); margin-bottom: 15px; font-size: 18px;">Parking</h3>
                            <p style="color: var(--color-secondary); font-size: 14px;">
                                Paid parking available nearby. For client meetings, please contact us in advance for parking
                                arrangements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-padding">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;">
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    Frequently Asked Questions
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    Quick answers to common questions about our services
                </p>
            </div>

            <div style="max-width: 800px; margin: 0 auto;">
                <div style="margin-bottom: 20px;">
                    <div style="background: var(--color-primary); padding: 20px; border-radius: 4px; cursor: pointer;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="font-weight: 600; color: var(--color-dark);">What payment methods do you accept?
                            </div>
                            <i class="fas fa-chevron-down" style="color: var(--color-secondary);"></i>
                        </div>
                        <div style="color: var(--color-secondary); margin-top: 15px; display: none;">
                            We accept all major credit cards (Visa, MasterCard, American Express), bank transfers, and cash
                            payments. Corporate accounts can be set up with monthly invoicing.
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 20px;">
                    <div style="background: var(--color-primary); padding: 20px; border-radius: 4px; cursor: pointer;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="font-weight: 600; color: var(--color-dark);">How far in advance should I book?
                            </div>
                            <i class="fas fa-chevron-down" style="color: var(--color-secondary);"></i>
                        </div>
                        <div style="color: var(--color-secondary); margin-top: 15px; display: none;">
                            We recommend booking at least 24 hours in advance for airport transfers and 48 hours for special
                            events. However, we can often accommodate last-minute bookings depending on availability.
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 20px;">
                    <div style="background: var(--color-primary); padding: 20px; border-radius: 4px; cursor: pointer;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="font-weight: 600; color: var(--color-dark);">Do you provide child seats?</div>
                            <i class="fas fa-chevron-down" style="color: var(--color-secondary);"></i>
                        </div>
                        <div style="color: var(--color-secondary); margin-top: 15px; display: none;">
                            Yes, we provide child seats upon request at no additional charge. Please specify the age and
                            weight of the child when booking so we can provide the appropriate seat.
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 20px;">
                    <div style="background: var(--color-primary); padding: 20px; border-radius: 4px; cursor: pointer;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="font-weight: 600; color: var(--color-dark);">What is your cancellation policy?
                            </div>
                            <i class="fas fa-chevron-down" style="color: var(--color-secondary);"></i>
                        </div>
                        <div style="color: var(--color-secondary); margin-top: 15px; display: none;">
                            Cancellations made more than 24 hours before the scheduled pickup are free. Cancellations within
                            24 hours incur a 50% charge. For airport transfers, flight delays are monitored and no
                            cancellation fees apply for delayed or cancelled flights.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section-padding bg-dark">
        <div class="container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <h2 class="hero-font" style="font-size: 48px; color: var(--color-white); margin-bottom: 25px;">Ready to
                    Get Started?</h2>
                <p style="font-size: 20px; color: var(--color-accent); margin-bottom: 40px;">
                    Contact us today to discuss your transportation needs or book your premium limousine service.
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="/booking" class="btn-primary"
                        style="background-color: var(--color-white); color: var(--color-dark); border-color: var(--color-white);">
                        <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> Book Now
                    </a>
                    <a href="tel:+3221234567" class="btn-secondary"
                        style="color: var(--color-white); border-color: var(--color-white);">
                        <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        // FAQ Accordion
        document.querySelectorAll('.faq-item').forEach(item => {
            const question = item.querySelector('div');
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const icon = question.querySelector('i');

                if (answer.style.display === 'block') {
                    answer.style.display = 'none';
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                } else {
                    answer.style.display = 'block';
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                }
            });
        });
    </script>
@endsection
