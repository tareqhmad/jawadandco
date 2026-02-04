@extends('layouts.app')

@section('title', __('home.meta_title'))
@section('description', __('home.meta_description'))

@section('content')
    <!-- Hero Section - Clean Design without Image -->
    <section
        style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-white) 100%); min-height: 100vh; display: flex; align-items: center; color: var(--color-dark); margin-top: 80px; position: relative; overflow: hidden;">
        <!-- Geometric background pattern -->
        <div
            style="position: absolute; top: 0; right: 0; width: 60%; height: 100%; background: linear-gradient(45deg, var(--color-accent) 0%, transparent 70%); opacity: 0.3; z-index: 1;">
        </div>

        <div class="container" style="position: relative; z-index: 2;">
            <div style="max-width: 700px; padding: 40px 0;">
                <div style="margin-bottom: 30px;">
                    <h1 class="hero-font fade-in-up"
                        style="font-size: 64px; margin: 20px 0 25px 0; line-height: 1.1; color: var(--color-dark); opacity: 0; transform: translateY(30px);">
                        {{ __('home.hero_heading_line1') }}<br>
                        {!! __('home.hero_heading_line2', [
                            'city' => '<span style="color: var(--color-secondary);">Brussels</span>',
                        ]) !!}
                    </h1>

                    <p class="fade-in-up"
                        style="font-size: 20px; margin-bottom: 40px; color: var(--color-secondary); opacity: 0; transform: translateY(30px); animation-delay: 0.2s;">
                        {{ __('home.hero_paragraph') }}
                    </p>
                </div>

                <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                    <a href="/booking" class="btn-primary fade-in-up"
                        style="opacity: 0; transform: translateY(30px); animation-delay: 0.4s;">
                        <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> {{ __('home.cta_book_now') }}
                    </a>
                    <a href="/fleet" class="btn-secondary fade-in-up"
                        style="opacity: 0; transform: translateY(30px); animation-delay: 0.5s;">
                        <i class="fas fa-car" style="margin-right: 10px;"></i> {{ __('home.cta_view_fleet') }}
                    </a>
                </div>

                <!-- Quick stats -->
                <div style="display: flex; gap: 40px; margin-top: 80px; flex-wrap: wrap;">
                    <div class="fade-in-up" style="opacity: 0; transform: translateY(30px); animation-delay: 0.6s;">
                        <div style="font-size: 36px; font-weight: 700; color: var(--color-secondary); margin-bottom: 5px;">
                            10+</div>
                        <div style="color: var(--color-dark);">
                            {{ __('home.stat_years_label') }}</div>
                    </div>
                    <div class="fade-in-up" style="opacity: 0; transform: translateY(30px); animation-delay: 0.7s;">
                        <div style="font-size: 36px; font-weight: 700; color: var(--color-secondary); margin-bottom: 5px;">
                            24/7</div>
                        <div style="color: var(--color-dark);">
                            {{ __('home.stat_availability_label') }}</div>
                    </div>
                    <div class="fade-in-up" style="opacity: 0; transform: translateY(30px); animation-delay: 0.8s;">
                        <div style="font-size: 36px; font-weight: 700; color: var(--color-secondary); margin-bottom: 5px;">
                            5000+</div>
                        <div style="color: var(--color-dark);">
                            {{ __('home.stat_clients_label') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section class="section-padding bg-white">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px; display: block; margin-bottom: 15px;">
                    {{ __('home.services_badge') }}
                </span>
                <h2 class="hero-font fade-in-up"
                    style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px; opacity: 0; transform: translateY(30px);">
                    {{ __('home.services_title') }}
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary); opacity: 0; transform: translateY(30px); animation-delay: 0.2s;">
                    {{ __('home.services_subtitle') }}
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
                <div class="fade-in-up"
                    style="background: var(--color-primary); padding: 50px 40px; border-radius: 8px; transition: all 0.3s ease; opacity: 0; transform: translateY(30px); animation-delay: 0.3s;">
                    <div class="icon-circle">
                        <i class="fas fa-plane-departure" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="font-size: 24px; margin-bottom: 20px; color: var(--color-dark); text-align: center;">
                        {{ __('home.service_airport_title') }}
                    </h3>
                    <p style="text-align: center; color: var(--color-secondary);">
                        {{ __('home.service_airport_text') }}
                    </p>
                    <div style="text-align: center; margin-top: 25px;">
                        <a href="/services#airport"
                            style="color: var(--color-secondary); text-decoration: none; font-weight: 500;">
                            {{ __('home.learn_more') }} <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
                        </a>
                    </div>
                </div>

                <div class="fade-in-up"
                    style="background: var(--color-primary); padding: 50px 40px; border-radius: 8px; transition: all 0.3s ease; opacity: 0; transform: translateY(30px); animation-delay: 0.4s;">
                    <div class="icon-circle">
                        <i class="fas fa-briefcase" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="font-size: 24px; margin-bottom: 20px; color: var(--color-dark); text-align: center;">
                        {{ __('home.service_corporate_title') }}
                    </h3>
                    <p style="text-align: center; color: var(--color-secondary);">
                        {{ __('home.service_corporate_text') }}
                    </p>
                    <div style="text-align: center; margin-top: 25px;">
                        <a href="/services#corporate"
                            style="color: var(--color-secondary); text-decoration: none; font-weight: 500;">
                            {{ __('home.learn_more') }} <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
                        </a>
                    </div>
                </div>

                <div class="fade-in-up"
                    style="background: var(--color-primary); padding: 50px 40px; border-radius: 8px; transition: all 0.3s ease; opacity: 0; transform: translateY(30px); animation-delay: 0.5s;">
                    <div class="icon-circle">
                        <i class="fas fa-glass-cheers" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="font-size: 24px; margin-bottom: 20px; color: var(--color-dark); text-align: center;">
                        {{ __('home.service_events_title') }}
                    </h3>
                    <p style="text-align: center; color: var(--color-secondary);">
                        {{ __('home.service_events_text') }}
                    </p>
                    <div style="text-align: center; margin-top: 25px;">
                        <a href="/services#events"
                            style="color: var(--color-secondary); text-decoration: none; font-weight: 500;">
                            {{ __('home.learn_more') }} <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section-padding bg-accent">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px; display: block; margin-bottom: 15px;">
                    {{ __('home.why_badge') }}
                </span>
                <h2 class="hero-font fade-in-up"
                    style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px; opacity: 0; transform: translateY(30px);">
                    {{ __('home.why_title') }}
                </h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 50px;">
                <div class="fade-in-up" style="text-align: center; opacity: 0; transform: translateY(30px);">
                    <div class="icon-circle">
                        <i class="far fa-clock" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">
                        {{ __('home.why_punctuality_title') }}
                    </h3>
                    <p>{{ __('home.why_punctuality_text') }}</p>
                </div>

                <div class="fade-in-up"
                    style="text-align: center; opacity: 0; transform: translateY(30px); animation-delay: 0.2s;">
                    <div class="icon-circle">
                        <i class="fas fa-shield-alt" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">
                        {{ __('home.why_safety_title') }}
                    </h3>
                    <p>{{ __('home.why_safety_text') }}</p>
                </div>

                <div class="fade-in-up"
                    style="text-align: center; opacity: 0; transform: translateY(30px); animation-delay: 0.4s;">
                    <div class="icon-circle">
                        <i class="fas fa-star" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">
                        {{ __('home.why_luxury_title') }}
                    </h3>
                    <p>{{ __('home.why_luxury_text') }}</p>
                </div>

                <div class="fade-in-up"
                    style="text-align: center; opacity: 0; transform: translateY(30px); animation-delay: 0.6s;">
                    <div class="icon-circle">
                        <i class="fas fa-user-secret" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">
                        {{ __('home.why_discretion_title') }}
                    </h3>
                    <p>{{ __('home.why_discretion_text') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Booking Form -->
    <section class="section-padding">
        <div class="container">
            <div class="fade-in-up"
                style="max-width: 800px; margin: 0 auto; background: var(--color-white); padding: 70px 60px; border-radius: 8px; box-shadow: 0 15px 40px rgba(122, 125, 125, 0.08); opacity: 0; transform: translateY(30px);">
                <h2 class="hero-font"
                    style="font-size: 40px; color: var(--color-dark); margin-bottom: 15px; text-align: center;">
                    {{ __('home.quote_title') }}
                </h2>
                <p style="text-align: center; margin-bottom: 50px; color: var(--color-secondary); font-size: 18px;">
                    {{ __('home.quote_subtitle') }}
                </p>

                <form style="display: grid; gap: 25px;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
                        <div>
                            <label
                                style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                {{ __('home.label_pickup') }}
                            </label>
                            <div style="position: relative;">
                                <i class="fas fa-map-marker-alt"
                                    style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                <input type="text"
                                    style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px; transition: all 0.3s ease;"
                                    placeholder="{{ __('home.placeholder_pickup') }}"
                                    onfocus="this.style.borderColor='var(--color-secondary)'"
                                    onblur="this.style.borderColor='var(--color-accent)'">
                            </div>
                        </div>
                        <div>
                            <label
                                style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                {{ __('home.label_destination') }}
                            </label>
                            <div style="position: relative;">
                                <i class="fas fa-flag-checkered"
                                    style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                <input type="text"
                                    style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px; transition: all 0.3s ease;"
                                    placeholder="{{ __('home.placeholder_destination') }}"
                                    onfocus="this.style.borderColor='var(--color-secondary)'"
                                    onblur="this.style.borderColor='var(--color-accent)'">
                            </div>
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
                        <div>
                            <label
                                style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                {{ __('home.label_date') }}
                            </label>
                            <div style="position: relative;">
                                <i class="far fa-calendar-alt"
                                    style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                <input type="date"
                                    style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px; transition: all 0.3s ease;"
                                    onfocus="this.style.borderColor='var(--color-secondary)'"
                                    onblur="this.style.borderColor='var(--color-accent)'">
                            </div>
                        </div>
                        <div>
                            <label
                                style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                {{ __('home.label_time') }}
                            </label>
                            <div style="position: relative;">
                                <i class="far fa-clock"
                                    style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                <input type="time"
                                    style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px; transition: all 0.3s ease;"
                                    onfocus="this.style.borderColor='var(--color-secondary)'"
                                    onblur="this.style.borderColor='var(--color-accent)'">
                            </div>
                        </div>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                            {{ __('home.label_service_type') }}
                        </label>
                        <div style="position: relative;">
                            <i class="fas fa-concierge-bell"
                                style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                            <select
                                style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px; appearance: none; background: var(--color-white); transition: all 0.3s ease;"
                                onfocus="this.style.borderColor='var(--color-secondary)'"
                                onblur="this.style.borderColor='var(--color-accent)'">
                                <option>{{ __('home.select_service_type') }}</option>
                                <option>{{ __('home.service_type_airport') }}</option>
                                <option>{{ __('home.service_type_corporate') }}</option>
                                <option>{{ __('home.service_type_event') }}</option>
                                <option>{{ __('home.service_type_hourly') }}</option>
                                <option>{{ __('home.service_type_city_tour') }}</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn-primary"
                        style="width: 100%; margin-top: 10px; padding: 16px; font-size: 17px;">
                        <i class="fas fa-paper-plane" style="margin-right: 10px;"></i>
                        {{ __('home.cta_get_instant_quote') }}
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section-padding bg-white">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px; display: block; margin-bottom: 15px;">
                    {{ __('home.testimonials_badge') }}
                </span>
                <h2 class="hero-font fade-in-up"
                    style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px; opacity: 0; transform: translateY(30px);">
                    {{ __('home.testimonials_title') }}
                </h2>
                <p class="fade-in-up"
                    style="max-width: 600px; margin: 0 auto; font-size: 18px; color: var(--color-secondary); opacity: 0; transform: translateY(30px); animation-delay: 0.2s;">
                    {{ __('home.testimonials_subtitle') }}
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px;">
                <div class="fade-in-up"
                    style="background: var(--color-primary); padding: 40px; border-radius: 8px; opacity: 0; transform: translateY(30px); animation-delay: 0.3s;">
                    <div style="display: flex; align-items: center; margin-bottom: 25px;">
                        <div
                            style="width: 60px; height: 60px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; color: var(--color-secondary); font-weight: 600;">
                            TL</div>
                        <div>
                            <div style="font-weight: 600; color: var(--color-dark); font-size: 18px;">
                                {{ __('home.testimonial_1_name') }}</div>
                            <div style="color: var(--color-secondary);">{{ __('home.testimonial_1_role') }}</div>
                        </div>
                    </div>
                    <p style="font-style: italic; color: var(--color-secondary); margin-bottom: 20px; line-height: 1.7;">
                        {{ __('home.testimonial_1_text') }}
                    </p>
                    <div style="color: #FFC107;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="fade-in-up"
                    style="background: var(--color-primary); padding: 40px; border-radius: 8px; opacity: 0; transform: translateY(30px); animation-delay: 0.4s;">
                    <div style="display: flex; align-items: center; margin-bottom: 25px;">
                        <div
                            style="width: 60px; height: 60px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; color: var(--color-secondary); font-weight: 600;">
                            SM</div>
                        <div>
                            <div style="font-weight: 600; color: var(--color-dark); font-size: 18px;">
                                {{ __('home.testimonial_2_name') }}</div>
                            <div style="color: var(--color-secondary);">{{ __('home.testimonial_2_role') }}</div>
                        </div>
                    </div>
                    <p style="font-style: italic; color: var(--color-secondary); margin-bottom: 20px; line-height: 1.7;">
                        {{ __('home.testimonial_2_text') }}
                    </p>
                    <div style="color: #FFC107;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="fade-in-up"
                    style="background: var(--color-primary); padding: 40px; border-radius: 8px; opacity: 0; transform: translateY(30px); animation-delay: 0.5s;">
                    <div style="display: flex; align-items: center; margin-bottom: 25px;">
                        <div
                            style="width: 60px; height: 60px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; color: var(--color-secondary); font-weight: 600;">
                            MK</div>
                        <div>
                            <div style="font-weight: 600; color: var(--color-dark); font-size: 18px;">
                                {{ __('home.testimonial_3_name') }}</div>
                            <div style="color: var(--color-secondary);">{{ __('home.testimonial_3_role') }}</div>
                        </div>
                    </div>
                    <p style="font-style: italic; color: var(--color-secondary); margin-bottom: 20px; line-height: 1.7;">
                        {{ __('home.testimonial_3_text') }}
                    </p>
                    <div style="color: #FFC107;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section-padding"
        style="background: var(--color-primary); text-align: center; color: var(--color-dark);">
        <div class="container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <h2 class="hero-font" style="font-size: 48px; margin-bottom: 25px;">
                    {{ __('home.cta_bottom_title') }}
                </h2>
                <p style="font-size: 20px; color: var(--color-secondary); margin-bottom: 40px;">
                    {{ __('home.cta_bottom_text') }}
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="/booking" class="btn-primary"
                        style="background-color: var(--color-accent); color: var(--color-dark); border-color: var(--color-accent);">
                        <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> {{ __('home.cta_book_now') }}
                    </a>
                    <a href="/contact" class="btn-secondary"
                        style="color: var(--color-dark); border-color: var(--color-secondary);">
                        <i class="fas fa-envelope" style="margin-right: 10px;"></i> {{ __('home.cta_contact_us') }}
                    </a>
                </div>
                <div
                    style="margin-top: 40px; color: var(--color-footer-text-secondary); display: flex; align-items: center; justify-content: center; gap: 10px;">
                    <i class="fas fa-phone" style="font-size: 18px;"></i>
                    <span style="font-size: 20px; font-weight: 600;">+32 2 123 4567</span>
                    <span style="margin: 0 10px;">•</span>
                    <span>{{ __('home.cta_bottom_availability') }}</span>
                </div>
            </div>
        </div>
    </section>
@endsection
