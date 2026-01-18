@extends('layouts.app')

@section('title', 'Book Now | Limousine Service Brussels')
@section('description', 'Book your premium limousine service in Brussels. Airport transfers, corporate travel, special
    events, and hourly rentals.')

@section('content')
    <!-- Hero Section -->
    <section
        style="background: linear-gradient(135deg, var(--color-primary) 0%, rgba(255, 251, 254, 0.95) 100%); min-height: 60vh; display: flex; align-items: center; color: var(--color-dark); margin-top: 80px; position: relative;">
        <div class="container" style="position: relative; z-index: 2;">
            <div style="max-width: 800px; padding: 80px 0 40px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">Reservation</span>
                <h1 class="hero-font fade-in-up"
                    style="font-size: 56px; margin: 20px 0 25px 0; line-height: 1.1; color: var(--color-dark);">
                    Book Your Journey
                </h1>
                <p class="fade-in-up" style="font-size: 20px; margin-bottom: 40px; color: var(--color-secondary);">
                    Complete the form below to book your premium limousine service. Our team will confirm your booking
                    within 30 minutes.
                </p>
            </div>
        </div>
    </section>

    <!-- Booking Form -->
    <section class="section-padding bg-white">
        <div class="container">
            <div style="max-width: 1000px; margin: 0 auto;">
                <div style="display: grid; grid-template-columns: 1fr 350px; gap: 60px;">
                    <!-- Main Form -->
                    <div>
                        <h2 style="font-size: 32px; color: var(--color-dark); margin-bottom: 40px; font-weight: 600;">
                            Booking Details</h2>

                        <form style="display: grid; gap: 25px;">
                            <!-- Trip Type -->
                            <div>
                                <label
                                    style="display: block; margin-bottom: 15px; font-weight: 600; color: var(--color-dark); font-size: 16px;">Trip
                                    Type</label>
                                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;">
                                    <label
                                        style="display: flex; align-items: center; padding: 15px; border: 2px solid var(--color-accent); border-radius: 4px; cursor: pointer; transition: all 0.3s ease;">
                                        <input type="radio" name="tripType" value="oneway" style="margin-right: 10px;"
                                            checked>
                                        <div>
                                            <div style="font-weight: 600; color: var(--color-dark);">One Way</div>
                                            <div style="font-size: 14px; color: var(--color-secondary);">Point A to B</div>
                                        </div>
                                    </label>
                                    <label
                                        style="display: flex; align-items: center; padding: 15px; border: 2px solid var(--color-accent); border-radius: 4px; cursor: pointer; transition: all 0.3s ease;">
                                        <input type="radio" name="tripType" value="roundtrip" style="margin-right: 10px;">
                                        <div>
                                            <div style="font-weight: 600; color: var(--color-dark);">Round Trip</div>
                                            <div style="font-size: 14px; color: var(--color-secondary);">Return journey
                                            </div>
                                        </div>
                                    </label>
                                    <label
                                        style="display: flex; align-items: center; padding: 15px; border: 2px solid var(--color-accent); border-radius: 4px; cursor: pointer; transition: all 0.3s ease;">
                                        <input type="radio" name="tripType" value="hourly" style="margin-right: 10px;">
                                        <div>
                                            <div style="font-weight: 600; color: var(--color-dark);">Hourly</div>
                                            <div style="font-size: 14px; color: var(--color-secondary);">Multiple stops
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <!-- Pickup & Destination -->
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
                                <div>
                                    <label
                                        style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Pick-up
                                        Location *</label>
                                    <div style="position: relative;">
                                        <i class="fas fa-map-marker-alt"
                                            style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                        <input type="text" required
                                            style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;"
                                            placeholder="Address, airport, hotel...">
                                    </div>
                                </div>
                                <div>
                                    <label
                                        style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Destination
                                        *</label>
                                    <div style="position: relative;">
                                        <i class="fas fa-flag-checkered"
                                            style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                        <input type="text" required
                                            style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;"
                                            placeholder="Destination address">
                                    </div>
                                </div>
                            </div>

                            <!-- Date & Time -->
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
                                <div>
                                    <label
                                        style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Pick-up
                                        Date *</label>
                                    <div style="position: relative;">
                                        <i class="far fa-calendar-alt"
                                            style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                        <input type="date" required
                                            style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                                    </div>
                                </div>
                                <div>
                                    <label
                                        style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Pick-up
                                        Time *</label>
                                    <div style="position: relative;">
                                        <i class="far fa-clock"
                                            style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                        <input type="time" required
                                            style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                                    </div>
                                </div>
                            </div>

                            <!-- Vehicle Selection -->
                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Vehicle
                                    Type *</label>
                                <div style="position: relative;">
                                    <i class="fas fa-car"
                                        style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                    <select required
                                        style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                                        <option value="">Select Vehicle</option>
                                        <option value="mercedes_s">Mercedes-Benz S-Class (3-4 passengers)</option>
                                        <option value="bmw_7">BMW 7 Series (3-4 passengers)</option>
                                        <option value="limousine">Executive Limousine (6-8 passengers)</option>
                                        <option value="mercedes_v">Mercedes V-Class (6-7 passengers)</option>
                                        <option value="audi_a8">Audi A8 (3-4 passengers)</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Service Type -->
                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Service
                                    Type *</label>
                                <div style="position: relative;">
                                    <i class="fas fa-concierge-bell"
                                        style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                    <select required
                                        style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                                        <option value="">Select Service</option>
                                        <option value="airport">Airport Transfer</option>
                                        <option value="corporate">Corporate Travel</option>
                                        <option value="event">Special Event</option>
                                        <option value="hourly">Hourly Service</option>
                                        <option value="tour">City Tour</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Passenger Details -->
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
                                <div>
                                    <label
                                        style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Number
                                        of Passengers *</label>
                                    <div style="position: relative;">
                                        <i class="fas fa-users"
                                            style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                        <input type="number" min="1" max="8" required
                                            style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;"
                                            placeholder="1-8">
                                    </div>
                                </div>
                                <div>
                                    <label
                                        style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Number
                                        of Luggage *</label>
                                    <div style="position: relative;">
                                        <i class="fas fa-suitcase"
                                            style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                        <input type="number" min="0" max="10" required
                                            style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;"
                                            placeholder="0-10">
                                    </div>
                                </div>
                            </div>

                            <!-- Special Instructions -->
                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Special
                                    Instructions</label>
                                <textarea
                                    style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px; min-height: 120px;"
                                    placeholder="Flight number, accessibility needs, special requests..."></textarea>
                            </div>

                            <!-- Contact Details -->
                            <h3
                                style="font-size: 24px; color: var(--color-dark); margin: 40px 0 20px; padding-top: 30px; border-top: 1px solid var(--color-accent);">
                                Contact Information</h3>

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

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
                                <div>
                                    <label
                                        style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Email
                                        *</label>
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
                                        *</label>
                                    <div style="position: relative;">
                                        <i class="fas fa-phone"
                                            style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                        <input type="tel" required
                                            style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn-primary"
                                style="width: 100%; padding: 18px; font-size: 18px; margin-top: 30px;">
                                <i class="fas fa-paper-plane" style="margin-right: 10px;"></i> Submit Booking Request
                            </button>
                        </form>
                    </div>

                    <!-- Booking Summary Sidebar -->
                    <div>
                        <div
                            style="background: var(--color-primary); padding: 30px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08); position: sticky; top: 100px;">
                            <h3
                                style="font-size: 22px; color: var(--color-dark); margin-bottom: 25px; padding-bottom: 15px; border-bottom: 1px solid var(--color-accent);">
                                Booking Summary</h3>

                            <div style="margin-bottom: 25px;">
                                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                    <span style="color: var(--color-secondary);">Mercedes S-Class</span>
                                    <span style="color: var(--color-dark); font-weight: 600;">€120-150</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                    <span style="color: var(--color-secondary);">Airport Transfer</span>
                                    <span style="color: var(--color-secondary);">Included</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                    <span style="color: var(--color-secondary);">Meet & Greet</span>
                                    <span style="color: var(--color-secondary);">Included</span>
                                </div>
                            </div>

                            <div
                                style="margin: 30px 0; padding: 20px 0; border-top: 1px solid var(--color-accent); border-bottom: 1px solid var(--color-accent);">
                                <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                                    <span style="color: var(--color-dark); font-weight: 600;">Estimated Total</span>
                                    <span
                                        style="color: var(--color-dark); font-size: 24px; font-weight: 700;">€120-150</span>
                                </div>
                                <div style="font-size: 14px; color: var(--color-secondary);">
                                    * Final price depends on exact route and traffic conditions
                                </div>
                            </div>

                            <div style="margin-bottom: 25px;">
                                <h4 style="color: var(--color-dark); margin-bottom: 15px; font-size: 16px;">What's
                                    Included:</h4>
                                <ul style="list-style: none; color: var(--color-secondary); font-size: 14px;">
                                    <li style="margin-bottom: 8px; padding-left: 20px; position: relative;">
                                        <i class="fas fa-check"
                                            style="color: var(--color-secondary); position: absolute; left: 0; font-size: 12px;"></i>
                                        Professional Chauffeur
                                    </li>
                                    <li style="margin-bottom: 8px; padding-left: 20px; position: relative;">
                                        <i class="fas fa-check"
                                            style="color: var(--color-secondary); position: absolute; left: 0; font-size: 12px;"></i>
                                        Flight Tracking
                                    </li>
                                    <li style="margin-bottom: 8px; padding-left: 20px; position: relative;">
                                        <i class="fas fa-check"
                                            style="color: var(--color-secondary); position: absolute; left: 0; font-size: 12px;"></i>
                                        Bottled Water
                                    </li>
                                    <li style="margin-bottom: 8px; padding-left: 20px; position: relative;">
                                        <i class="fas fa-check"
                                            style="color: var(--color-secondary); position: absolute; left: 0; font-size: 12px;"></i>
                                        Free Waiting Time
                                    </li>
                                </ul>
                            </div>

                            <div
                                style="background: var(--color-accent); padding: 20px; border-radius: 4px; margin-top: 25px;">
                                <div style="display: flex; align-items: center; margin-bottom: 10px;">
                                    <i class="fas fa-headset"
                                        style="color: var(--color-secondary); margin-right: 10px; font-size: 20px;"></i>
                                    <div>
                                        <div style="color: var(--color-dark); font-weight: 600;">Need Help?</div>
                                        <div style="color: var(--color-secondary); font-size: 14px;">Call +32 2 123 4567
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Guarantee -->
    <section class="section-padding bg-accent">
        <div class="container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <div class="icon-circle" style="margin: 0 auto 30px;">
                    <i class="fas fa-shield-alt" style="font-size: 32px;"></i>
                </div>
                <h2 class="hero-font" style="font-size: 40px; color: var(--color-dark); margin-bottom: 20px;">Booking
                    Guarantee</h2>
                <p style="font-size: 18px; color: var(--color-secondary); margin-bottom: 40px;">
                    Your booking is confirmed immediately upon submission. We guarantee vehicle availability and will
                    contact you within 30 minutes with your chauffeur details and final confirmation.
                </p>
                <div style="display: flex; gap: 30px; justify-content: center; flex-wrap: wrap; margin-top: 50px;">
                    <div style="text-align: center;">
                        <div class="icon-circle" style="width: 60px; height: 60px; margin-bottom: 15px;">
                            <i class="fas fa-lock" style="font-size: 22px;"></i>
                        </div>
                        <div style="font-weight: 600; color: var(--color-dark);">Secure Payment</div>
                    </div>
                    <div style="text-align: center;">
                        <div class="icon-circle" style="width: 60px; height: 60px; margin-bottom: 15px;">
                            <i class="fas fa-clock" style="font-size: 22px;"></i>
                        </div>
                        <div style="font-weight: 600; color: var(--color-dark);">30-Min Confirmation</div>
                    </div>
                    <div style="text-align: center;">
                        <div class="icon-circle" style="width: 60px; height: 60px; margin-bottom: 15px;">
                            <i class="fas fa-user-check" style="font-size: 22px;"></i>
                        </div>
                        <div style="font-weight: 600; color: var(--color-dark);">Chauffeur Guaranteed</div>
                    </div>
                    <div style="text-align: center;">
                        <div class="icon-circle" style="width: 60px; height: 60px; margin-bottom: 15px;">
                            <i class="fas fa-car" style="font-size: 22px;"></i>
                        </div>
                        <div style="font-weight: 600; color: var(--color-dark);">Vehicle Guaranteed</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
