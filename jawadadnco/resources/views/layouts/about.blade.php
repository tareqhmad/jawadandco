@extends('layouts.app')

@section('title', __('about.meta_title'))
@section('description', __('about.meta_description'))

@section('content')
    <!-- Hero Section -->
    <section
        style="background: linear-gradient(135deg, var(--color-primary) 0%, rgba(255, 251, 254, 0.95) 100%); min-height: 60vh; display: flex; align-items: center; color: var(--color-dark); margin-top: 80px; position: relative;">
        <div class="container" style="position: relative; z-index: 2;">
            <div style="max-width: 800px; padding: 80px 0 40px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">
                    {{ __('about.hero_badge') }}
                </span>
                <h1 class="hero-font fade-in-up"
                    style="font-size: 56px; margin: 20px 0 25px 0; line-height: 1.1; color: var(--color-dark);">
                    {{ __('about.hero_title') }}
                </h1>
                <p class="fade-in-up" style="font-size: 20px; margin-bottom: 40px; color: var(--color-secondary);">
                    {{ __('about.hero_text') }}
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
                        {{ __('about.journey_title') }}
                    </h2>
                    <div class="fade-in-up" style="color: var(--color-secondary); margin-bottom: 30px;">
                        <p style="margin-bottom: 20px; font-size: 18px;">
                            {{ __('about.journey_p1') }}
                        </p>
                        <p style="margin-bottom: 20px; font-size: 18px;">
                            {{ __('about.journey_p2') }}
                        </p>
                        <p style="font-size: 18px;">
                            {{ __('about.journey_p3') }}
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
                            {{ __('about.badge_years_title') }}
                        </div>
                        <div style="color: var(--color-secondary);">
                            {{ __('about.badge_years_text') }}
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
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">
                    {{ __('about.values_badge') }}
                </span>
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    {{ __('about.values_title') }}
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    {{ __('about.values_text') }}
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
                <div style="text-align: center;">
                    <div class="icon-circle">
                        <i class="fas fa-handshake" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">
                        {{ __('about.value_1_title') }}
                    </h3>
                    <p style="color: var(--color-secondary);">
                        {{ __('about.value_1_text') }}
                    </p>
                </div>

                <div style="text-align: center;">
                    <div class="icon-circle">
                        <i class="fas fa-shield-alt" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">
                        {{ __('about.value_2_title') }}
                    </h3>
                    <p style="color: var(--color-secondary);">
                        {{ __('about.value_2_text') }}
                    </p>
                </div>

                <div style="text-align: center;">
                    <div class="icon-circle">
                        <i class="fas fa-user-secret" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">
                        {{ __('about.value_3_title') }}
                    </h3>
                    <p style="color: var(--color-secondary);">
                        {{ __('about.value_3_text') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section-padding">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">
                    {{ __('about.team_badge') }}
                </span>
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    {{ __('about.team_title') }}
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    {{ __('about.team_text') }}
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
                <div style="text-align: center;">
                    <div
                        style="width: 200px; height: 200px; background: linear-gradient(45deg, var(--color-accent) 0%, var(--color-secondary) 100%); border-radius: 50%; margin: 0 auto 30px; display: flex; align-items: center; justify-content: center; font-size: 60px; color: var(--color-white);">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 style="margin-bottom: 10px; color: var(--color-dark); font-size: 24px;">
                        {{ __('about.team_1_name') }}
                    </h3>
                    <div style="color: var(--color-secondary); font-weight: 500; margin-bottom: 20px;">
                        {{ __('about.team_1_role') }}
                    </div>
                    <p style="color: var(--color-secondary);">
                        {{ __('about.team_1_text') }}
                    </p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 200px; height: 200px; background: linear-gradient(45deg, var(--color-primary) 0%, var(--color-secondary) 100%); border-radius: 50%; margin: 0 auto 30px; display: flex; align-items: center; justify-content: center; font-size: 60px; color: var(--color-white);">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 style="margin-bottom: 10px; color: var(--color-dark); font-size: 24px;">
                        {{ __('about.team_2_name') }}
                    </h3>
                    <div style="color: var(--color-secondary); font-weight: 500; margin-bottom: 20px;">
                        {{ __('about.team_2_role') }}
                    </div>
                    <p style="color: var(--color-secondary);">
                        {{ __('about.team_2_text') }}
                    </p>
                </div>

                <div style="text-align: center;">
                    <div
                        style="width: 200px; height: 200px; background: linear-gradient(45deg, var(--color-secondary) 0%, var(--color-accent) 100%); border-radius: 50%; margin: 0 auto 30px; display: flex; align-items: center; justify-content: center; font-size: 60px; color: var(--color-white);">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 style="margin-bottom: 10px; color: var(--color-dark); font-size: 24px;">
                        {{ __('about.team_3_name') }}
                    </h3>
                    <div style="color: var(--color-secondary); font-weight: 500; margin-bottom: 20px;">
                        {{ __('about.team_3_role') }}
                    </div>
                    <p style="color: var(--color-secondary);">
                        {{ __('about.team_3_text') }}
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
                        {{ __('about.chauffeurs_title') }}
                    </h2>
                    <div class="fade-in-up" style="color: var(--color-secondary);">
                        <p style="margin-bottom: 20px; font-size: 18px;">
                            {{ __('about.chauffeurs_p1') }}
                        </p>
                        <p style="margin-bottom: 20px; font-size: 18px;">
                            {{ __('about.chauffeurs_p2') }}
                        </p>
                        <ul style="list-style: none; color: var(--color-secondary);">
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('about.chauffeurs_li_1') }}
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('about.chauffeurs_li_2') }}
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('about.chauffeurs_li_3') }}
                            </li>
                            <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check"
                                    style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('about.chauffeurs_li_4') }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="fade-in-up"
                    style="background: linear-gradient(45deg, var(--color-primary) 0%, var(--color-accent) 100%); padding: 60px; border-radius: 8px; text-align: center;">
                    <i class="fas fa-id-card-alt"
                        style="font-size: 80px; color: var(--color-secondary); margin-bottom: 30px;"></i>
                    <h3 style="color: var(--color-dark); font-size: 24px; margin-bottom: 20px;">
                        {{ __('about.qualifications_title') }}
                    </h3>
                    <div style="color: var(--color-secondary); margin-bottom: 30px;">
                        {{ __('about.qualifications_text') }}
                    </div>
                    <div style="display: flex; justify-content: center; gap: 20px;">
                        <div style="text-align: center;">
                            <div style="font-size: 36px; font-weight: 700; color: var(--color-dark);">
                                {{ __('about.qualifications_stat1_value') }}
                            </div>
                            <div style="color: var(--color-secondary);">
                                {{ __('about.qualifications_stat1_label') }}
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 36px; font-weight: 700; color: var(--color-dark);">
                                {{ __('about.qualifications_stat2_value') }}
                            </div>
                            <div style="color: var(--color-secondary);">
                                {{ __('about.qualifications_stat2_label') }}
                            </div>
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
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">
                    {{ __('about.community_badge') }}
                </span>
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    {{ __('about.community_title') }}
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    {{ __('about.community_text') }}
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
                <div
                    style="text-align: center; background: var(--color-white); padding: 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div class="icon-circle">
                        <i class="fas fa-hands-helping" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">
                        {{ __('about.community_1_title') }}
                    </h3>
                    <p style="color: var(--color-secondary);">
                        {{ __('about.community_1_text') }}
                    </p>
                </div>

                <div
                    style="text-align: center; background: var(--color-white); padding: 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div class="icon-circle">
                        <i class="fas fa-graduation-cap" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">
                        {{ __('about.community_2_title') }}
                    </h3>
                    <p style="color: var(--color-secondary);">
                        {{ __('about.community_2_text') }}
                    </p>
                </div>

                <div
                    style="text-align: center; background: var(--color-white); padding: 40px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div class="icon-circle">
                        <i class="fas fa-leaf" style="font-size: 32px;"></i>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">
                        {{ __('about.community_3_title') }}
                    </h3>
                    <p style="color: var(--color-secondary);">
                        {{ __('about.community_3_text') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section-padding bg-dark">
        <div class="container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <h2 class="hero-font" style="font-size: 48px; color: var(--color-white); margin-bottom: 25px;">
                    {{ __('about.cta_title') }}
                </h2>
                <p style="font-size: 20px; color: var(--color-accent); margin-bottom: 40px;">
                    {{ __('about.cta_text') }}
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="/booking" class="btn-primary"
                        style="background-color: var(--color-white); color: var(--color-dark); border-color: var(--color-white);">
                        <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> {{ __('about.cta_book') }}
                    </a>
                    <a href="/contact" class="btn-secondary"
                        style="color: var(--color-white); border-color: var(--color-white);">
                        <i class="fas fa-envelope" style="margin-right: 10px;"></i> {{ __('about.cta_contact') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
