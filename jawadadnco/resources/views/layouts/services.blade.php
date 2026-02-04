@extends('layouts.app')

@section('title', __('services.meta_title'))
@section('description', __('services.meta_description'))

@section('content')
    <!-- Hero Section -->
    <section
        style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-white) 100%); min-height: 60vh; display: flex; align-items: center; color: var(--color-dark); margin-top: 80px; position: relative;">
        <div class="container" style="position: relative; z-index: 2;">
            <div style="max-width: 800px; padding: 80px 0 40px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">
                    {{ __('services.hero_badge') }}
                </span>
                <h1 class="hero-font fade-in-up"
                    style="font-size: 56px; margin: 20px 0 25px 0; line-height: 1.1; color: var(--color-dark);">
                    {{ __('services.hero_title') }}
                </h1>
                <p class="fade-in-up" style="font-size: 20px; margin-bottom: 40px; color: var(--color-secondary);">
                    {{ __('services.hero_text') }}
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
                    <h2 style="font-size: 28px; margin-bottom: 20px; color: var(--color-dark); text-align: center;">
                        {{ __('services.airport_title') }}
                    </h2>
                    <p style="text-align: center; color: var(--color-secondary); margin-bottom: 30px;">
                        {{ __('services.airport_text') }}
                    </p>
                    <ul style="list-style: none; margin-bottom: 30px; color: var(--color-secondary);">
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.airport_feature_1') }}
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.airport_feature_2') }}
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.airport_feature_3') }}
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.airport_feature_4') }}
                        </li>
                    </ul>
                    <div style="text-align: center;">
                        <a href="/{{ app()->getLocale() }}/booking" class="btn-primary">
                            <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> {{ __('services.cta_book_now') }}
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
                        {{ __('services.corporate_title') }}
                    </h2>
                    <p style="text-align: center; color: var(--color-secondary); margin-bottom: 30px;">
                        {{ __('services.corporate_text') }}
                    </p>
                    <ul style="list-style: none; margin-bottom: 30px; color: var(--color-secondary);">
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.corporate_feature_1') }}
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.corporate_feature_2') }}
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.corporate_feature_3') }}
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.corporate_feature_4') }}
                        </li>
                    </ul>
                    <div style="text-align: center;">
                        <a href="/{{ app()->getLocale() }}/contact" class="btn-secondary">
                            <i class="fas fa-envelope" style="margin-right: 10px;"></i> {{ __('services.cta_corporate_inquiry') }}
                        </a>
                    </div>
                </div>

                <!-- Special Events -->
                <div class="fade-in-up"
                    style="background: var(--color-primary); padding: 50px 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div class="icon-circle">
                        <i class="fas fa-glass-cheers" style="font-size: 32px;"></i>
                    </div>
                    <h2 style="font-size: 28px; margin-bottom: 20px; color: var(--color-dark); text-align: center;">
                        {{ __('services.events_title') }}
                    </h2>
                    <p style="text-align: center; color: var(--color-secondary); margin-bottom: 30px;">
                        {{ __('services.events_text') }}
                    </p>
                    <ul style="list-style: none; margin-bottom: 30px; color: var(--color-secondary);">
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.events_feature_1') }}
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.events_feature_2') }}
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.events_feature_3') }}
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.events_feature_4') }}
                        </li>
                    </ul>
                    <div style="text-align: center;">
                        <a href="/{{ app()->getLocale() }}/booking" class="btn-primary">
                            <i class="fas fa-calendar-alt" style="margin-right: 10px;"></i> {{ __('services.cta_plan_event') }}
                        </a>
                    </div>
                </div>

                <!-- Hourly Service -->
                <div class="fade-in-up"
                    style="background: var(--color-primary); padding: 50px 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div class="icon-circle">
                        <i class="fas fa-clock" style="font-size: 32px;"></i>
                    </div>
                    <h2 style="font-size: 28px; margin-bottom: 20px; color: var(--color-dark); text-align: center;">
                        {{ __('services.hourly_title') }}
                    </h2>
                    <p style="text-align: center; color: var(--color-secondary); margin-bottom: 30px;">
                        {{ __('services.hourly_text') }}
                    </p>
                    <ul style="list-style: none; margin-bottom: 30px; color: var(--color-secondary);">
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.hourly_feature_1') }}
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.hourly_feature_2') }}
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.hourly_feature_3') }}
                        </li>
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ __('services.hourly_feature_4') }}
                        </li>
                    </ul>
                    <div style="text-align: center;">
                        <a href="/{{ app()->getLocale() }}/pricing" class="btn-secondary">
                            <i class="fas fa-euro-sign" style="margin-right: 10px;"></i> {{ __('services.cta_view_pricing') }}
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
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">
                    {{ __('services.process_badge') }}
                </span>
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    {{ __('services.process_title') }}
                </h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px;">
                <div style="text-align: center;">
                    <div
                        style="width: 80px; height: 80px; background: var(--color-white); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 28px; color: var(--color-secondary); font-weight: 700;">
                        1</div>
                    <h3 style="margin-bottom: 15px; color: var(--color-dark);">{{ __('services.step_1_title') }}</h3>
                    <p style="color: var(--color-secondary);">{{ __('services.step_1_text') }}</p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 80px; height: 80px; background: var(--color-white); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 28px; color: var(--color-secondary); font-weight: 700;">
                        2</div>
                    <h3 style="margin-bottom: 15px; color: var(--color-dark);">{{ __('services.step_2_title') }}</h3>
                    <p style="color: var(--color-secondary);">{{ __('services.step_2_text') }}</p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 80px; height: 80px; background: var(--color-white); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 28px; color: var(--color-secondary); font-weight: 700;">
                        3</div>
                    <h3 style="margin-bottom: 15px; color: var(--color-dark);">{{ __('services.step_3_title') }}</h3>
                    <p style="color: var(--color-secondary);">{{ __('services.step_3_text') }}</p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 80px; height: 80px; background: var(--color-white); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; font-size: 28px; color: var(--color-secondary); font-weight: 700;">
                        4</div>
                    <h3 style="margin-bottom: 15px; color: var(--color-dark);">{{ __('services.step_4_title') }}</h3>
                    <p style="color: var(--color-secondary);">{{ __('services.step_4_text') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section-padding" style="background: var(--color-primary); text-align: center; color: var(--color-dark);">
        <div class="container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <h2 class="hero-font" style="font-size: 48px;margin-bottom: 25px;">
                    {{ __('services.bottom_title') }}
                </h2>
                <p style="font-size: 20px; color: var(--color-secondary); margin-bottom: 40px;">
                    {{ __('services.bottom_text') }}
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="/{{ app()->getLocale() }}/booking" class="btn-primary"
                        style="background-color: var(--color-accent); color: var(--color-dark); border-color: var(--color-accent);">
                        <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> {{ __('services.cta_book_now') }}
                    </a>
                    <a href="/{{ app()->getLocale() }}/contact" class="btn-secondary"
                        style="color: var(--color-dark); border-color: var(--color-secondary);">
                        <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> {{ __('services.cta_call_now') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
