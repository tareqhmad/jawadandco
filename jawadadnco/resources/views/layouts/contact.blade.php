@extends('layouts.app')

@section('title', __('contact.meta_title'))
@section('description', __('contact.meta_description'))

@section('content')
    <!-- Hero Section -->
    <section
        style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-white) 100%); min-height: 60vh; display: flex; align-items: center; color: var(--color-dark); margin-top: 80px; position: relative;">
        <div class="container" style="position: relative; z-index: 2;">
            <div style="max-width: 800px; padding: 80px 0 40px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">
                    {{ __('contact.hero_badge') }}
                </span>
                <h1 class="hero-font fade-in-up"
                    style="font-size: 56px; margin: 20px 0 25px 0; line-height: 1.1; color: var(--color-dark);">
                    {{ __('contact.hero_title') }}
                </h1>
                <p class="fade-in-up" style="font-size: 20px; margin-bottom: 40px; color: var(--color-secondary);">
                    {{ __('contact.hero_text') }}
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
                    <h2 style="font-size: 32px; color: var(--color-dark); margin-bottom: 40px;">
                        {{ __('contact.info_title') }}
                    </h2>

                    <div style="margin-bottom: 30px;">
                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <div
                                style="width: 50px; height: 50px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                <i class="fas fa-phone" style="color: var(--color-secondary);"></i>
                            </div>
                            <div>
                                <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">
                                    {{ __('contact.phone_title') }}
                                </div>
                                <div style="color: var(--color-dark);">
                                    {{ __('contact.phone1_value') }}
                                </div>
                                 <div style="color: var(--color-dark);">
                                    {{ __('contact.phone2_value') }}
                                </div>
                                <div style="color: var(--color-accent); font-size: 14px; margin-top: 5px;">
                                    {{ __('contact.phone_note') }}
                                </div>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <div
                                style="width: 50px; height: 50px; background: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                <i class="fas fa-envelope" style="color: var(--color-secondary);"></i>
                            </div>
                            <div>
                                <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">
                                    {{ __('contact.email_title') }}
                                </div>
                                <div style="color: var(--color-dark);">
                                    {{ __('contact.email_value') }}
                                </div>
                                <div style="color: var(--color-accent); font-size: 14px; margin-top: 5px;">
                                    {{ __('contact.email_note') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="fade-in-up">
                    <h2 style="font-size: 32px; color: var(--color-dark); margin-bottom: 40px;">
                        {{ __('contact.form_title') }}
                    </h2>

                    <form action="{{ route('contactform') }}" method="POST" style="display: grid; gap: 25px;">
                        @csrf
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                    {{ __('contact.first_name') }}
                                </label>
                                <input type="text" name="first_name" required
                                    style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            </div>
                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                    {{ __('contact.last_name') }}
                                </label>
                                <input type="text" name="last_name" required
                                    style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            </div>
                        </div>

                        <div>
                            <label style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                {{ __('contact.email_label') }}
                            </label>
                            <div style="position: relative;">
                                <i class="fas fa-envelope"
                                    style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                <input type="email" name="email" required
                                    style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            </div>
                        </div>

                        <div>
                            <label style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                {{ __('contact.phone_label') }}
                            </label>
                            <div style="position: relative;">
                                <i class="fas fa-phone"
                                    style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                <input type="tel" name="phone"
                                    style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            </div>
                        </div>

                        <div>
                            <label style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                {{ __('contact.subject_label') }}
                            </label>
                            <select name="subject" required
                                style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                                <option value="">{{ __('contact.subject_placeholder') }}</option>
                                <option value="booking">{{ __('contact.subject_booking') }}</option>
                                <option value="quote">{{ __('contact.subject_quote') }}</option>
                                <option value="corporate">{{ __('contact.subject_corporate') }}</option>
                                <option value="event">{{ __('contact.subject_event') }}</option>
                                <option value="feedback">{{ __('contact.subject_feedback') }}</option>
                                <option value="other">{{ __('contact.subject_other') }}</option>
                            </select>
                        </div>

                        <div>
                            <label style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                {{ __('contact.message_label') }}
                            </label>
                            <textarea name="message" required
                                style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px; min-height: 150px;"
                                placeholder="{{ __('contact.message_placeholder') }}"></textarea>
                        </div>

                        <button type="submit" class="btn-primary" style="width: 100%; padding: 18px; font-size: 18px;">
                            <i class="fas fa-paper-plane" style="margin-right: 10px;"></i> {{ __('contact.send_btn') }}
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
                <h2 class="hero-font" style="font-size: 40px; color: var(--color-dark); margin-bottom: 20px;">
                    {{ __('contact.emergency_title') }}
                </h2>
                <p style="font-size: 18px; color: var(--color-secondary); margin-bottom: 40px;">
                    {{ __('contact.emergency_text') }}
                </p>
                <div
                    style="display: inline-flex; align-items: center; background: var(--color-white); padding: 20px 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.1);">
                    <i class="fas fa-phone-alt"
                        style="color: var(--color-secondary); font-size: 24px; margin-right: 15px;"></i>
                    <div>
                        <div style="font-size: 14px; color: var(--color-secondary);">
                            {{ __('contact.emergency_label') }}
                        </div>
                        <div style="font-size: 28px; font-weight: 700; color: var(--color-dark);">
                            {{ __('contact.emergency_phone') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Corporate Contact -->
    <section class="section-padding bg-white">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <h2 class="hero-font" style="font-size: 40px; color: var(--color-dark); margin-bottom: 25px;">
                    {{ __('contact.corporate_title') }}
                </h2>
                <p style="font-size: 18px; color: var(--color-secondary); margin-bottom: 40px;">
                    {{ __('contact.corporate_text') }}
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="mailto:corporate@elitebrusselslimo.be" class="btn-primary">
                        <i class="fas fa-briefcase" style="margin-right: 10px;"></i> {{ __('contact.corporate_email') }}
                    </a>
                    <a href="tel:+3221234568" class="btn-secondary">
                        <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> {{ __('contact.corporate_phone') }}
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
                    {{ __('contact.location_title') }}
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    {{ __('contact.location_text') }}
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
                            <div style="font-weight: 600; color: var(--color-dark); margin-bottom: 5px;">
                                {{ __('contact.map_card_title') }}
                            </div>
                            <div style="color: var(--color-secondary); font-size: 14px;">
                                {{ __('contact.map_card_address') }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location Details -->
                <div style="padding: 40px;">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                        <div>
                            <h3 style="color: var(--color-dark); margin-bottom: 15px; font-size: 18px;">
                                {{ __('contact.getting_here_title') }}
                            </h3>
                            <p style="color: var(--color-secondary); font-size: 14px;">
                                {{ __('contact.getting_here_text') }}
                            </p>
                        </div>
                        <div>
                            <h3 style="color: var(--color-dark); margin-bottom: 15px; font-size: 18px;">
                                {{ __('contact.public_transport_title') }}
                            </h3>
                            <ul style="list-style: none; color: var(--color-secondary); font-size: 14px;">
                                <li style="margin-bottom: 8px;">{{ __('contact.public_transport_1') }}</li>
                                <li style="margin-bottom: 8px;">{{ __('contact.public_transport_2') }}</li>
                                <li style="margin-bottom: 8px;">{{ __('contact.public_transport_3') }}</li>
                            </ul>
                        </div>
                        <div>
                            <h3 style="color: var(--color-dark); margin-bottom: 15px; font-size: 18px;">
                                {{ __('contact.parking_title') }}
                            </h3>
                            <p style="color: var(--color-secondary); font-size: 14px;">
                                {{ __('contact.parking_text') }}
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
                    {{ __('contact.faq_title') }}
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    {{ __('contact.faq_text') }}
                </p>
            </div>

            <div style="max-width: 800px; margin: 0 auto;">
                <div class="faq-item" style="margin-bottom: 20px;">
                    <div style="background: var(--color-primary); padding: 20px; border-radius: 4px; cursor: pointer;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="font-weight: 600; color: var(--color-dark);">{{ __('contact.faq_q1') }}</div>
                            <i class="fas fa-chevron-down" style="color: var(--color-secondary);"></i>
                        </div>
                        <div style="color: var(--color-secondary); margin-top: 15px; display: none;">
                            {{ __('contact.faq_a1') }}
                        </div>
                    </div>
                </div>

                <div class="faq-item" style="margin-bottom: 20px;">
                    <div style="background: var(--color-primary); padding: 20px; border-radius: 4px; cursor: pointer;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="font-weight: 600; color: var(--color-dark);">{{ __('contact.faq_q2') }}</div>
                            <i class="fas fa-chevron-down" style="color: var(--color-secondary);"></i>
                        </div>
                        <div style="color: var(--color-secondary); margin-top: 15px; display: none;">
                            {{ __('contact.faq_a2') }}
                        </div>
                    </div>
                </div>

                <div class="faq-item" style="margin-bottom: 20px;">
                    <div style="background: var(--color-primary); padding: 20px; border-radius: 4px; cursor: pointer;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="font-weight: 600; color: var(--color-dark);">{{ __('contact.faq_q3') }}</div>
                            <i class="fas fa-chevron-down" style="color: var(--color-secondary);"></i>
                        </div>
                        <div style="color: var(--color-secondary); margin-top: 15px; display: none;">
                            {{ __('contact.faq_a3') }}
                        </div>
                    </div>
                </div>

                <div class="faq-item" style="margin-bottom: 20px;">
                    <div style="background: var(--color-primary); padding: 20px; border-radius: 4px; cursor: pointer;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="font-weight: 600; color: var(--color-dark);">{{ __('contact.faq_q4') }}</div>
                            <i class="fas fa-chevron-down" style="color: var(--color-secondary);"></i>
                        </div>
                        <div style="color: var(--color-secondary); margin-top: 15px; display: none;">
                            {{ __('contact.faq_a4') }}
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
                <h2 class="hero-font" style="font-size: 48px; color: var(--color-white); margin-bottom: 25px;">
                    {{ __('contact.cta_title') }}
                </h2>
                <p style="font-size: 20px; color: var(--color-accent); margin-bottom: 40px;">
                    {{ __('contact.cta_text') }}
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="/{{ app()->getLocale() }}/booking" class="btn-primary"
                        style="background-color: var(--color-white); color: var(--color-dark); border-color: var(--color-white);">
                        <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> {{ __('contact.cta_book') }}
                    </a>
                    <a href="tel:+3221234567" class="btn-secondary"
                        style="color: var(--color-white); border-color: var(--color-white);">
                        <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> {{ __('contact.cta_call') }}
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
