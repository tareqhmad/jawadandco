@extends('layouts.app')

@section('title', __('fleet.meta_title'))
@section('description', __('fleet.meta_description'))

@section('content')
<!-- Hero Section -->
<section
    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-white) 100%); min-height: 60vh; display: flex; align-items: center; color: var(--color-dark); margin-top: 80px; position: relative;">
    <div class="container" style="position: relative; z-index: 2;">
        <div style="max-width: 800px; padding: 80px 0 40px;">
            <span
                style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">
                {{ __('fleet.hero_badge') }}
            </span>
            <h1 class="hero-font fade-in-up"
                style="font-size: 56px; margin: 20px 0 25px 0; line-height: 1.1; color: var(--color-dark);">
                {{ __('fleet.hero_title') }}
            </h1>
            <p class="fade-in-up" style="font-size: 20px; margin-bottom: 40px; color: var(--color-secondary);">
                {{ __('fleet.hero_text') }}
            </p>
        </div>
    </div>
</section>

<!-- Fleet Grid -->
<section class="section-padding">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 50px;">
            @foreach ($fleetVehicles as $v)
            <x-fleet-card
                :title="__('fleet.vehicles.' . $v['key'] . '.title')"
                :passengers="__('fleet.vehicles.' . $v['key'] . '.passengers')"
                :luggage="__('fleet.vehicles.' . $v['key'] . '.luggage')"
                :category="__('fleet.vehicles.' . $v['key'] . '.category')"
                :description="__('fleet.vehicles.' . $v['key'] . '.description')"
                :features="__('fleet.vehicles.' . $v['key'] . '.features')"
                :imageName="$v['imageName']"
                :icon="$v['icon']"
                :iconColor="$v['iconColor']"
                :headerTextColor="$v['headerTextColor']"
                :gradientFrom="$v['gradientFrom']"
                :gradientTo="$v['gradientTo']" />
            @endforeach

        </div>
    </div>
</section>

<!-- Fleet Features -->
<section class="section-padding bg-accent">
    <div class="container">
        <div style="text-align: center; margin-bottom: 80px;">
            <span
                style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">
                {{ __('fleet.features_badge') }}
            </span>
            <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                {{ __('fleet.features_title') }}
            </h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
            <div style="text-align: center;">
                <div class="icon-circle">
                    <i class="fas fa-sync-alt" style="font-size: 32px;"></i>
                </div>
                <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">
                    {{ __('fleet.feature_1_title') }}
                </h3>
                <p style="color: var(--color-secondary);">
                    {{ __('fleet.feature_1_text') }}
                </p>
            </div>

            <div style="text-align: center;">
                <div class="icon-circle">
                    <i class="fas fa-tools" style="font-size: 32px;"></i>
                </div>
                <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">
                    {{ __('fleet.feature_2_title') }}
                </h3>
                <p style="color: var(--color-secondary);">
                    {{ __('fleet.feature_2_text') }}
                </p>
            </div>

            <div style="text-align: center;">
                <div class="icon-circle">
                    <i class="fas fa-spray-can" style="font-size: 32px;"></i>
                </div>
                <h3 style="margin-bottom: 20px; color: var(--color-dark); font-size: 22px;">
                    {{ __('fleet.feature_3_title') }}
                </h3>
                <p style="color: var(--color-secondary);">
                    {{ __('fleet.feature_3_text') }}
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Fleet Selection Help -->
<section class="section-padding bg-white">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            <h2 class="hero-font" style="font-size: 40px; color: var(--color-dark); margin-bottom: 25px;">
                {{ __('fleet.help_title') }}
            </h2>
            <p style="font-size: 18px; color: var(--color-secondary); margin-bottom: 40px;">
                {{ __('fleet.help_text') }}
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="/{{ app()->getLocale() }}/contact" class="btn-primary">
                    <i class="fas fa-headset" style="margin-right: 10px;"></i> {{ __('fleet.cta_contact_experts') }}
                </a>
                <a href="/{{ app()->getLocale() }}/pricing" class="btn-secondary">
                    <i class="fas fa-euro-sign" style="margin-right: 10px;"></i> {{ __('fleet.cta_view_pricing') }}
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
