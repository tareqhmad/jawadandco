@extends('layouts.app')

@section('title', __('booking.meta_title'))
@section('description', __('booking.meta_description'))

@section('content')
<!-- Hero Section -->
<section
    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-white) 100%); min-height: 60vh; display: flex; align-items: center; color: var(--color-dark); margin-top: 80px; position: relative;">
    <div class="container" style="position: relative; z-index: 2;">
        <div style="max-width: 800px; padding: 80px 0 40px;">
            <span
                style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">
                {{ __('booking.hero_badge') }}
            </span>
            <h1 class="hero-font fade-in-up"
                style="font-size: 56px; margin: 20px 0 25px 0; line-height: 1.1; color: var(--color-dark);">
                {{ __('booking.hero_title') }}
            </h1>
            <p class="fade-in-up" style="font-size: 20px; margin-bottom: 40px; color: var(--color-secondary);">
                {{ __('booking.hero_text') }}
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
                        {{ __('booking.form_title') }}
                    </h2>

                    <form style="display: grid; gap: 25px;" method="POST"
                        action="{{ route('contact.send', app()->getLocale()) }}">
                        @csrf
                        <div>
                            <label
                                style="display: block; margin-bottom: 15px; font-weight: 600; color: var(--color-dark); font-size: 16px;">
                                {{ __('booking.trip_type_label') }}
                            </label>

                            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;">
                                <label
                                    style="display: flex; align-items: center; padding: 15px; border: 2px solid var(--color-accent); border-radius: 4px; cursor: pointer; transition: all 0.3s ease;">
                                    <input type="radio" name="trip_type" value="oneway" style="margin-right: 10px;"
                                        checked>
                                    <div>
                                        <div style="font-weight: 600; color: var(--color-dark);">
                                            {{ __('booking.trip_oneway') }}
                                        </div>
                                        <div style="font-size: 14px; color: var(--color-secondary);">
                                            {{ __('booking.trip_oneway_hint') }}
                                        </div>
                                    </div>
                                </label>

                                <label
                                    style="display: flex; align-items: center; padding: 15px; border: 2px solid var(--color-accent); border-radius: 4px; cursor: pointer; transition: all 0.3s ease;">
                                    <input type="radio" name="trip_type" value="roundtrip"
                                        style="margin-right: 10px;">
                                    <div>
                                        <div style="font-weight: 600; color: var(--color-dark);">
                                            {{ __('booking.trip_roundtrip') }}
                                        </div>
                                        <div style="font-size: 14px; color: var(--color-secondary);">
                                            {{ __('booking.trip_roundtrip_hint') }}
                                        </div>
                                    </div>
                                </label>

                                <label
                                    style="display: flex; align-items: center; padding: 15px; border: 2px solid var(--color-accent); border-radius: 4px; cursor: pointer; transition: all 0.3s ease;">
                                    <input type="radio" name="trip_type" value="hourly" style="margin-right: 10px;">
                                    <div>
                                        <div style="font-weight: 600; color: var(--color-dark);">
                                            {{ __('booking.trip_hourly') }}
                                        </div>
                                        <div style="font-size: 14px; color: var(--color-secondary);">
                                            {{ __('booking.trip_hourly_hint') }}
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                    {{ __('booking.pickup_label') }}
                                </label>
                                <div style="position: relative;">
                                    <i class="fas fa-map-marker-alt"
                                        style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                    <input type="text" name="pickup" required
                                        style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;"
                                        placeholder="{{ __('booking.pickup_placeholder') }}">
                                </div>
                            </div>

                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                    {{ __('booking.destination_label') }}
                                </label>
                                <div style="position: relative;">
                                    <i class="fas fa-flag-checkered"
                                        style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                    <input type="text" name="destination" required
                                        style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;"
                                        placeholder="{{ __('booking.destination_placeholder') }}">
                                </div>
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                    {{ __('booking.pickup_date_label') }}
                                </label>
                                <div style="position: relative;">
                                    <i class="far fa-calendar-alt"
                                        style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                    <input type="date" name="pickup_date" required
                                        style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                                </div>
                            </div>

                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                    {{ __('booking.pickup_time_label') }}
                                </label>
                                <div style="position: relative;">
                                    <i class="far fa-clock"
                                        style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                    <input type="time" name="pickup_time" required
                                        style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label
                                style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                {{ __('booking.vehicle_type_label') }}
                            </label>
                            <div style="position: relative;">
                                <i class="fas fa-car"
                                    style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                <select name="vehicle_type" required
                                    style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                                    @foreach ($fleetVehicles as $v)
                                    <option value="{{ $v['key'] }}">{{ __('fleet.vehicles.' . $v['key'] . '.title') }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div>
                            <label
                                style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                {{ __('booking.service_type_label') }}
                            </label>
                            <div style="position: relative;">
                                <i class="fas fa-concierge-bell"
                                    style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                <select name="service_type" required
                                    style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                                    <option value="">{{ __('booking.service_select_placeholder') }}</option>
                                    <option value="airport">{{ __('booking.service_airport') }}</option>
                                    <option value="corporate">{{ __('booking.service_corporate') }}</option>
                                    <option value="event">{{ __('booking.service_event') }}</option>
                                    <option value="hourly">{{ __('booking.service_hourly') }}</option>
                                    <option value="tour">{{ __('booking.service_tour') }}</option>
                                </select>
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                    {{ __('booking.passengers_label') }}
                                </label>
                                <div style="position: relative;">
                                    <i class="fas fa-users"
                                        style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                    <input type="number" name="passengers" min="1" max="8" required
                                        style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;"
                                        placeholder="{{ __('booking.passengers_placeholder') }}">
                                </div>
                            </div>

                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                    {{ __('booking.luggage_label') }}
                                </label>
                                <div style="position: relative;">
                                    <i class="fas fa-suitcase"
                                        style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                    <input type="number" name="luggage" min="0" max="10" required
                                        style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;"
                                        placeholder="{{ __('booking.luggage_placeholder') }}">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label
                                style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                {{ __('booking.instructions_label') }}
                            </label>
                            <textarea name="instructions"
                                style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px; min-height: 120px;"
                                placeholder="{{ __('booking.instructions_placeholder') }}"></textarea>
                        </div>

                        <h3
                            style="font-size: 24px; color: var(--color-dark); margin: 40px 0 20px; padding-top: 30px; border-top: 1px solid var(--color-accent);">
                            {{ __('booking.contact_title') }}
                        </h3>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                    {{ __('booking.first_name_label') }}
                                </label>
                                <input type="text" name="first_name" required
                                    style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            </div>
                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                    {{ __('booking.last_name_label') }}
                                </label>
                                <input type="text" name="last_name" required
                                    style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                    {{ __('booking.email_label') }}
                                </label>
                                <div style="position: relative;">
                                    <i class="fas fa-envelope"
                                        style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                    <input type="email" name="email" required
                                        style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                                </div>
                            </div>

                            <div>
                                <label
                                    style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                                    {{ __('booking.phone_label') }}
                                </label>
                                <div style="position: relative;">
                                    <i class="fas fa-phone"
                                        style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: var(--color-secondary);"></i>
                                    <input type="tel" name="phone" required
                                        style="width: 100%; padding: 15px 15px 15px 45px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn-primary"
                            style="width: 100%; padding: 18px; font-size: 18px; margin-top: 30px;">
                            <i class="fas fa-paper-plane" style="margin-right: 10px;"></i>
                            {{ __('booking.submit') }}
                        </button>
                    </form>
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
            <h2 class="hero-font" style="font-size: 40px; color: var(--color-dark); margin-bottom: 20px;">
                {{ __('booking.guarantee_title') }}
            </h2>
            <p style="font-size: 18px; color: var(--color-secondary); margin-bottom: 40px;">
                {{ __('booking.guarantee_text') }}
            </p>
            <div style="display: flex; gap: 30px; justify-content: center; flex-wrap: wrap; margin-top: 50px;">
                <div style="text-align: center;">
                    <div class="icon-circle" style="width: 60px; height: 60px; margin-bottom: 15px;">
                        <i class="fas fa-lock" style="font-size: 22px;"></i>
                    </div>
                    <div style="font-weight: 600; color: var(--color-dark);">{{ __('booking.badge_secure_payment') }}
                    </div>
                </div>
                <div style="text-align: center;">
                    <div class="icon-circle" style="width: 60px; height: 60px; margin-bottom: 15px;">
                        <i class="fas fa-clock" style="font-size: 22px;"></i>
                    </div>
                    <div style="font-weight: 600; color: var(--color-dark);">{{ __('booking.badge_30min') }}</div>
                </div>
                <div style="text-align: center;">
                    <div class="icon-circle" style="width: 60px; height: 60px; margin-bottom: 15px;">
                        <i class="fas fa-user-check" style="font-size: 22px;"></i>
                    </div>
                    <div style="font-weight: 600; color: var(--color-dark);">{{ __('booking.badge_chauffeur') }}</div>
                </div>
                <div style="text-align: center;">
                    <div class="icon-circle" style="width: 60px; height: 60px; margin-bottom: 15px;">
                        <i class="fas fa-car" style="font-size: 22px;"></i>
                    </div>
                    <div style="font-weight: 600; color: var(--color-dark);">{{ __('booking.badge_vehicle') }}</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
