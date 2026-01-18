@extends('layouts.app')

@section('title', 'Pricing & Rates | Limousine Service Brussels')
@section('description',
    'Transparent pricing for our premium limousine services in Brussels. Airport transfers, hourly
    rates, and corporate packages.')

@section('content')
    <!-- Hero Section -->
    <section
        style="background: linear-gradient(135deg, var(--color-primary) 0%, rgba(255, 251, 254, 0.95) 100%); min-height: 60vh; display: flex; align-items: center; color: var(--color-dark); margin-top: 80px; position: relative;">
        <div class="container" style="position: relative; z-index: 2;">
            <div style="max-width: 800px; padding: 80px 0 40px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">Transparent
                    Pricing</span>
                <h1 class="hero-font fade-in-up"
                    style="font-size: 56px; margin: 20px 0 25px 0; line-height: 1.1; color: var(--color-dark);">
                    Simple, Clear Pricing
                </h1>
                <p class="fade-in-up" style="font-size: 20px; margin-bottom: 40px; color: var(--color-secondary);">
                    No hidden fees, no surprises. Our pricing is transparent and all-inclusive for your peace of mind.
                </p>
            </div>
        </div>
    </section>

    <!-- Pricing Calculator -->
    <section class="section-padding bg-white">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    Instant Quote Calculator
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    Get an instant estimate for your journey. Prices include all taxes, tolls, and service charges.
                </p>
            </div>

            <div
                style="max-width: 800px; margin: 0 auto; background: var(--color-primary); padding: 50px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 40px;">
                    <div>
                        <label
                            style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">From</label>
                        <select
                            style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            <option value="">Select Location</option>
                            <option value="brussels_airport">Brussels Airport (BRU)</option>
                            <option value="charleroi_airport">Charleroi Airport (CRL)</option>
                            <option value="brussels_center">Brussels City Center</option>
                            <option value="antwerp">Antwerp</option>
                            <option value="gent">Ghent</option>
                            <option value="bruges">Bruges</option>
                        </select>
                    </div>
                    <div>
                        <label
                            style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">To</label>
                        <select
                            style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            <option value="">Select Location</option>
                            <option value="brussels_airport">Brussels Airport (BRU)</option>
                            <option value="charleroi_airport">Charleroi Airport (CRL)</option>
                            <option value="brussels_center">Brussels City Center</option>
                            <option value="antwerp">Antwerp</option>
                            <option value="gent">Ghent</option>
                            <option value="bruges">Bruges</option>
                        </select>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 40px;">
                    <div>
                        <label
                            style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Vehicle
                            Type</label>
                        <select
                            style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            <option value="">Select Vehicle</option>
                            <option value="mercedes_s">Mercedes S-Class</option>
                            <option value="bmw_7">BMW 7 Series</option>
                            <option value="limousine">Executive Limousine</option>
                            <option value="mercedes_v">Mercedes V-Class</option>
                        </select>
                    </div>
                    <div>
                        <label
                            style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">Service
                            Type</label>
                        <select
                            style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            <option value="">Select Service</option>
                            <option value="airport">Airport Transfer</option>
                            <option value="corporate">Corporate Travel</option>
                            <option value="event">Special Event</option>
                            <option value="hourly">Hourly Service</option>
                        </select>
                    </div>
                </div>

                <button class="btn-primary" style="width: 100%; padding: 18px; font-size: 18px;">
                    <i class="fas fa-calculator" style="margin-right: 10px;"></i> Calculate Price
                </button>

                <!-- Estimated Price Display -->
                <div style="margin-top: 40px; padding: 30px; background: var(--color-white); border-radius: 4px; text-align: center; display: none;"
                    id="priceResult">
                    <div style="font-size: 18px; color: var(--color-secondary); margin-bottom: 10px;">Estimated Price</div>
                    <div style="font-size: 48px; font-weight: 700; color: var(--color-dark);">€120-150</div>
                    <div style="font-size: 14px; color: var(--color-secondary); margin-top: 10px;">All taxes and charges
                        included</div>
                    <a href="/booking" class="btn-primary" style="margin-top: 20px;">
                        <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> Book Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Tables -->
    <section class="section-padding bg-accent">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;">
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    Service Packages
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    Choose from our range of premium service packages tailored to your needs
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
                <!-- Airport Transfer Package -->
                <div class="fade-in-up"
                    style="background: var(--color-white); border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.1);">
                    <div style="background: var(--color-secondary); padding: 30px; text-align: center;">
                        <i class="fas fa-plane-departure"
                            style="font-size: 40px; color: var(--color-white); margin-bottom: 15px;"></i>
                        <h3 style="color: var(--color-white); font-size: 24px;">Airport Transfer</h3>
                    </div>
                    <div style="padding: 40px;">
                        <div style="text-align: center; margin-bottom: 30px;">
                            <div style="font-size: 36px; font-weight: 700; color: var(--color-dark);">From €120</div>
                            <div style="color: var(--color-secondary);">per transfer</div>
                        </div>
                        <ul style="list-style: none; margin-bottom: 40px; color: var(--color-secondary);">
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Flight tracking included
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                60 minutes free waiting time
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Meet & greet service
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Luggage assistance
                            </li>
                        </ul>
                        <a href="/booking" class="btn-primary" style="width: 100%;">
                            <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> Book This Package
                        </a>
                    </div>
                </div>

                <!-- Corporate Package -->
                <div class="fade-in-up"
                    style="background: var(--color-white); border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.1);">
                    <div style="background: var(--color-dark); padding: 30px; text-align: center;">
                        <i class="fas fa-briefcase"
                            style="font-size: 40px; color: var(--color-white); margin-bottom: 15px;"></i>
                        <h3 style="color: var(--color-white); font-size: 24px;">Corporate Travel</h3>
                    </div>
                    <div style="padding: 40px;">
                        <div style="text-align: center; margin-bottom: 30px;">
                            <div style="font-size: 36px; font-weight: 700; color: var(--color-dark);">From €150</div>
                            <div style="color: var(--color-secondary);">per transfer</div>
                        </div>
                        <ul style="list-style: none; margin-bottom: 40px; color: var(--color-secondary);">
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Executive account manager
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Wi-Fi and mobile charging
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Newspaper & refreshments
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Priority booking
                            </li>
                        </ul>
                        <a href="/contact" class="btn-secondary" style="width: 100%;">
                            <i class="fas fa-envelope" style="margin-right: 10px;"></i> Corporate Inquiry
                        </a>
                    </div>
                </div>

                <!-- Hourly Package -->
                <div class="fade-in-up"
                    style="background: var(--color-white); border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.1);">
                    <div style="background: var(--color-secondary); padding: 30px; text-align: center;">
                        <i class="fas fa-clock"
                            style="font-size: 40px; color: var(--color-white); margin-bottom: 15px;"></i>
                        <h3 style="color: var(--color-white); font-size: 24px;">Hourly Service</h3>
                    </div>
                    <div style="padding: 40px;">
                        <div style="text-align: center; margin-bottom: 30px;">
                            <div style="font-size: 36px; font-weight: 700; color: var(--color-dark);">From €75</div>
                            <div style="color: var(--color-secondary);">per hour</div>
                            <div style="font-size: 14px; color: var(--color-secondary); margin-top: 5px;">3-hour minimum
                            </div>
                        </div>
                        <ul style="list-style: none; margin-bottom: 40px; color: var(--color-secondary);">
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Multiple stops included
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Custom itinerary planning
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                City and country tours
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                Flexible scheduling
                            </li>
                        </ul>
                        <a href="/booking" class="btn-primary" style="width: 100%;">
                            <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> Book Hourly Service
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Price Examples -->
    <section class="section-padding">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;">
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    Popular Routes
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    Sample prices for popular routes in Brussels and Belgium
                </p>
            </div>

            <div style="max-width: 800px; margin: 0 auto;">
                <div
                    style="background: var(--color-white); border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr style="background: var(--color-secondary);">
                                    <th
                                        style="padding: 20px; color: var(--color-white); font-weight: 600; text-align: left;">
                                        Route</th>
                                    <th
                                        style="padding: 20px; color: var(--color-white); font-weight: 600; text-align: left;">
                                        Mercedes S-Class</th>
                                    <th
                                        style="padding: 20px; color: var(--color-white); font-weight: 600; text-align: left;">
                                        BMW 7 Series</th>
                                    <th
                                        style="padding: 20px; color: var(--color-white); font-weight: 600; text-align: left;">
                                        Executive Limo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 1px solid var(--color-accent);">
                                    <td style="padding: 20px; color: var(--color-dark); font-weight: 500;">BRU Airport →
                                        Brussels Center</td>
                                    <td style="padding: 20px; color: var(--color-dark);">€120</td>
                                    <td style="padding: 20px; color: var(--color-dark);">€125</td>
                                    <td style="padding: 20px; color: var(--color-dark);">€180</td>
                                </tr>
                                <tr style="border-bottom: 1px solid var(--color-accent);">
                                    <td style="padding: 20px; color: var(--color-dark); font-weight: 500;">Brussels Center
                                        → CRL Airport</td>
                                    <td style="padding: 20px; color: var(--color-dark);">€140</td>
                                    <td style="padding: 20px; color: var(--color-dark);">€145</td>
                                    <td style="padding: 20px; color: var(--color-dark);">€200</td>
                                </tr>
                                <tr style="border-bottom: 1px solid var(--color-accent);">
                                    <td style="padding: 20px; color: var(--color-dark); font-weight: 500;">Brussels →
                                        Antwerp</td>
                                    <td style="padding: 20px; color: var(--color-dark);">€200</td>
                                    <td style="padding: 20px; color: var(--color-dark);">€210</td>
                                    <td style="padding: 20px; color: var(--color-dark);">€280</td>
                                </tr>
                                <tr style="border-bottom: 1px solid var(--color-accent);">
                                    <td style="padding: 20px; color: var(--color-dark); font-weight: 500;">Brussels → Ghent
                                    </td>
                                    <td style="padding: 20px; color: var(--color-dark);">€180</td>
                                    <td style="padding: 20px; color: var(--color-dark);">€190</td>
                                    <td style="padding: 20px; color: var(--color-dark);">€260</td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px; color: var(--color-dark); font-weight: 500;">Brussels →
                                        Bruges</td>
                                    <td style="padding: 20px; color: var(--color-dark);">€220</td>
                                    <td style="padding: 20px; color: var(--color-dark);">€230</td>
                                    <td style="padding: 20px; color: var(--color-dark);">€300</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div
                        style="padding: 20px; background: var(--color-primary); text-align: center; color: var(--color-secondary); font-size: 14px;">
                        * All prices include VAT, tolls, parking fees, and service charges. Prices may vary based on traffic
                        conditions.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Charges -->
    <section class="section-padding bg-accent">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto;">
                <h2 class="hero-font"
                    style="font-size: 40px; color: var(--color-dark); margin-bottom: 40px; text-align: center;">Additional
                    Services</h2>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">
                    <div style="background: var(--color-white); padding: 30px; border-radius: 8px;">
                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <i class="fas fa-champagne-glasses"
                                style="font-size: 24px; color: var(--color-secondary); margin-right: 15px;"></i>
                            <h3 style="color: var(--color-dark); font-size: 20px;">Champagne Service</h3>
                        </div>
                        <p style="color: var(--color-secondary); margin-bottom: 15px;">Premium champagne service for
                            special occasions</p>
                        <div style="color: var(--color-dark); font-weight: 600; font-size: 18px;">€50-100</div>
                    </div>

                    <div style="background: var(--color-white); padding: 30px; border-radius: 8px;">
                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <i class="fas fa-gift"
                                style="font-size: 24px; color: var(--color-secondary); margin-right: 15px;"></i>
                            <h3 style="color: var(--color-dark); font-size: 20px;">Special Decorations</h3>
                        </div>
                        <p style="color: var(--color-secondary); margin-bottom: 15px;">Custom decorations for weddings and
                            celebrations</p>
                        <div style="color: var(--color-dark); font-weight: 600; font-size: 18px;">€30-80</div>
                    </div>

                    <div style="background: var(--color-white); padding: 30px; border-radius: 8px;">
                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <i class="fas fa-language"
                                style="font-size: 24px; color: var(--color-secondary); margin-right: 15px;"></i>
                            <h3 style="color: var(--color-dark); font-size: 20px;">Multilingual Chauffeur</h3>
                        </div>
                        <p style="color: var(--color-secondary); margin-bottom: 15px;">Chauffeur fluent in multiple
                            languages</p>
                        <div style="color: var(--color-dark); font-weight: 600; font-size: 18px;">€20-50</div>
                    </div>

                    <div style="background: var(--color-white); padding: 30px; border-radius: 8px;">
                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <i class="fas fa-snowflake"
                                style="font-size: 24px; color: var(--color-secondary); margin-right: 15px;"></i>
                            <h3 style="color: var(--color-dark); font-size: 20px;">Extended Air Conditioning</h3>
                        </div>
                        <p style="color: var(--color-secondary); margin-bottom: 15px;">Extended vehicle idling with
                            AC/Heating</p>
                        <div style="color: var(--color-dark); font-weight: 600; font-size: 18px;">€15/hour</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section-padding bg-dark">
        <div class="container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <h2 class="hero-font" style="font-size: 48px; color: var(--color-white); margin-bottom: 25px;">Get Your
                    Custom Quote</h2>
                <p style="font-size: 20px; color: var(--color-accent); margin-bottom: 40px;">
                    Need a custom quote for your specific requirements? Contact us for personalized pricing.
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="/booking" class="btn-primary"
                        style="background-color: var(--color-white); color: var(--color-dark); border-color: var(--color-white);">
                        <i class="fas fa-calculator" style="margin-right: 10px;"></i> Get Instant Quote
                    </a>
                    <a href="/contact" class="btn-secondary"
                        style="color: var(--color-white); border-color: var(--color-white);">
                        <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> Call for Quote
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
