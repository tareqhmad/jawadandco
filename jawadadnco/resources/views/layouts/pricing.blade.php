@extends('layouts.app')

@section('title', __('pricing.meta_title'))
@section('description', __('pricing.meta_description'))

@section('content')
    <!-- Hero Section -->
    <section
        style="background: linear-gradient(135deg, var(--color-primary) 0%, rgba(255, 251, 254, 0.95) 100%); min-height: 60vh; display: flex; align-items: center; color: var(--color-dark); margin-top: 80px; position: relative;">
        <div class="container" style="position: relative; z-index: 2;">
            <div style="max-width: 800px; padding: 80px 0 40px;">
                <span
                    style="color: var(--color-secondary); font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 14px;">
                    {{ __('pricing.hero_badge') }}
                </span>
                <h1 class="hero-font fade-in-up"
                    style="font-size: 56px; margin: 20px 0 25px 0; line-height: 1.1; color: var(--color-dark);">
                    {{ __('pricing.hero_title') }}
                </h1>
                <p class="fade-in-up" style="font-size: 20px; margin-bottom: 40px; color: var(--color-secondary);">
                    {{ __('pricing.hero_text') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Pricing Calculator -->
    <section class="section-padding bg-white">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 class="hero-font fade-in-up" style="font-size: 48px; color: var(--color-dark); margin-bottom: 20px;">
                    {{ __('pricing.calculator_title') }}
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    {{ __('pricing.calculator_text') }}
                </p>
            </div>

            <div
                style="max-width: 800px; margin: 0 auto; background: var(--color-primary); padding: 50px; border-radius: 8px; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 40px;">
                    <div>
                        <label style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                            {{ __('pricing.from_label') }}
                        </label>
                        <select
                            style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            <option value="">{{ __('pricing.select_location') }}</option>
                            <option value="brussels_airport">{{ __('pricing.loc_bru_airport') }}</option>
                            <option value="charleroi_airport">{{ __('pricing.loc_crl_airport') }}</option>
                            <option value="brussels_center">{{ __('pricing.loc_bru_center') }}</option>
                            <option value="antwerp">{{ __('pricing.loc_antwerp') }}</option>
                            <option value="gent">{{ __('pricing.loc_ghent') }}</option>
                            <option value="bruges">{{ __('pricing.loc_bruges') }}</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                            {{ __('pricing.to_label') }}
                        </label>
                        <select
                            style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            <option value="">{{ __('pricing.select_location') }}</option>
                            <option value="brussels_airport">{{ __('pricing.loc_bru_airport') }}</option>
                            <option value="charleroi_airport">{{ __('pricing.loc_crl_airport') }}</option>
                            <option value="brussels_center">{{ __('pricing.loc_bru_center') }}</option>
                            <option value="antwerp">{{ __('pricing.loc_antwerp') }}</option>
                            <option value="gent">{{ __('pricing.loc_ghent') }}</option>
                            <option value="bruges">{{ __('pricing.loc_bruges') }}</option>
                        </select>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 40px;">
                    <div>
                        <label style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                            {{ __('pricing.vehicle_type_label') }}
                        </label>
                        <select
                            style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            <option value="">{{ __('pricing.select_vehicle') }}</option>
                            <option value="mercedes_s">{{ __('pricing.veh_mercedes_s') }}</option>
                            <option value="bmw_7">{{ __('pricing.veh_bmw_7') }}</option>
                            <option value="limousine">{{ __('pricing.veh_exec_limo') }}</option>
                            <option value="mercedes_v">{{ __('pricing.veh_mercedes_v') }}</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 10px; font-weight: 500; color: var(--color-dark);">
                            {{ __('pricing.service_type_label') }}
                        </label>
                        <select
                            style="width: 100%; padding: 15px; border: 1px solid var(--color-accent); border-radius: 4px; font-size: 16px;">
                            <option value="">{{ __('pricing.select_service') }}</option>
                            <option value="airport">{{ __('pricing.srv_airport') }}</option>
                            <option value="corporate">{{ __('pricing.srv_corporate') }}</option>
                            <option value="event">{{ __('pricing.srv_event') }}</option>
                            <option value="hourly">{{ __('pricing.srv_hourly') }}</option>
                        </select>
                    </div>
                </div>

                <button class="btn-primary" style="width: 100%; padding: 18px; font-size: 18px;">
                    <i class="fas fa-calculator" style="margin-right: 10px;"></i> {{ __('pricing.calculate_price') }}
                </button>

                <!-- Estimated Price Display -->
                <div style="margin-top: 40px; padding: 30px; background: var(--color-white); border-radius: 4px; text-align: center; display: none;"
                    id="priceResult">
                    <div style="font-size: 18px; color: var(--color-secondary); margin-bottom: 10px;">
                        {{ __('pricing.estimated_price') }}
                    </div>
                    <div style="font-size: 48px; font-weight: 700; color: var(--color-dark);">
                        {{ __('pricing.estimated_price_value') }}
                    </div>
                    <div style="font-size: 14px; color: var(--color-secondary); margin-top: 10px;">
                        {{ __('pricing.taxes_included') }}
                    </div>

                    <a href="/{{ app()->getLocale() }}/booking" class="btn-primary" style="margin-top: 20px;">
                        <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> {{ __('pricing.book_now') }}
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
                    {{ __('pricing.packages_title') }}
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    {{ __('pricing.packages_text') }}
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
                <!-- Airport Transfer Package -->
                <div class="fade-in-up"
                    style="background: var(--color-white); border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.1);">
                    <div style="background: var(--color-secondary); padding: 30px; text-align: center;">
                        <i class="fas fa-plane-departure"
                            style="font-size: 40px; color: var(--color-white); margin-bottom: 15px;"></i>
                        <h3 style="color: var(--color-white); font-size: 24px;">{{ __('pricing.package_airport_title') }}</h3>
                    </div>
                    <div style="padding: 40px;">
                        <div style="text-align: center; margin-bottom: 30px;">
                            <div style="font-size: 36px; font-weight: 700; color: var(--color-dark);">
                                {{ __('pricing.package_airport_price') }}
                            </div>
                            <div style="color: var(--color-secondary);">{{ __('pricing.per_transfer') }}</div>
                        </div>
                        <ul style="list-style: none; margin-bottom: 40px; color: var(--color-secondary);">
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('pricing.airport_feat_1') }}
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('pricing.airport_feat_2') }}
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('pricing.airport_feat_3') }}
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('pricing.airport_feat_4') }}
                            </li>
                        </ul>
                        <a href="/{{ app()->getLocale() }}/booking" class="btn-primary" style="width: 100%;">
                            <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> {{ __('pricing.book_this_package') }}
                        </a>
                    </div>
                </div>

                <!-- Corporate Package -->
                <div class="fade-in-up"
                    style="background: var(--color-white); border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.1);">
                    <div style="background: var(--color-dark); padding: 30px; text-align: center;">
                        <i class="fas fa-briefcase"
                            style="font-size: 40px; color: var(--color-white); margin-bottom: 15px;"></i>
                        <h3 style="color: var(--color-white); font-size: 24px;">{{ __('pricing.package_corporate_title') }}</h3>
                    </div>
                    <div style="padding: 40px;">
                        <div style="text-align: center; margin-bottom: 30px;">
                            <div style="font-size: 36px; font-weight: 700; color: var(--color-dark);">
                                {{ __('pricing.package_corporate_price') }}
                            </div>
                            <div style="color: var(--color-secondary);">{{ __('pricing.per_transfer') }}</div>
                        </div>
                        <ul style="list-style: none; margin-bottom: 40px; color: var(--color-secondary);">
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('pricing.corporate_feat_1') }}
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('pricing.corporate_feat_2') }}
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('pricing.corporate_feat_3') }}
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('pricing.corporate_feat_4') }}
                            </li>
                        </ul>
                        <a href="/{{ app()->getLocale() }}/contact" class="btn-secondary" style="width: 100%;">
                            <i class="fas fa-envelope" style="margin-right: 10px;"></i> {{ __('pricing.corporate_inquiry') }}
                        </a>
                    </div>
                </div>

                <!-- Hourly Package -->
                <div class="fade-in-up"
                    style="background: var(--color-white); border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.1);">
                    <div style="background: var(--color-secondary); padding: 30px; text-align: center;">
                        <i class="fas fa-clock"
                            style="font-size: 40px; color: var(--color-white); margin-bottom: 15px;"></i>
                        <h3 style="color: var(--color-white); font-size: 24px;">{{ __('pricing.package_hourly_title') }}</h3>
                    </div>
                    <div style="padding: 40px;">
                        <div style="text-align: center; margin-bottom: 30px;">
                            <div style="font-size: 36px; font-weight: 700; color: var(--color-dark);">
                                {{ __('pricing.package_hourly_price') }}
                            </div>
                            <div style="color: var(--color-secondary);">{{ __('pricing.per_hour') }}</div>
                            <div style="font-size: 14px; color: var(--color-secondary); margin-top: 5px;">
                                {{ __('pricing.hourly_minimum') }}
                            </div>
                        </div>
                        <ul style="list-style: none; margin-bottom: 40px; color: var(--color-secondary);">
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('pricing.hourly_feat_1') }}
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('pricing.hourly_feat_2') }}
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('pricing.hourly_feat_3') }}
                            </li>
                            <li style="margin-bottom: 15px; padding-left: 25px; position: relative;">
                                <i class="fas fa-check" style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                                {{ __('pricing.hourly_feat_4') }}
                            </li>
                        </ul>
                        <a href="/{{ app()->getLocale() }}/booking" class="btn-primary" style="width: 100%;">
                            <i class="fas fa-calendar-check" style="margin-right: 10px;"></i> {{ __('pricing.book_hourly') }}
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
                    {{ __('pricing.routes_title') }}
                </h2>
                <p class="fade-in-up"
                    style="max-width: 700px; margin: 0 auto; font-size: 18px; color: var(--color-secondary);">
                    {{ __('pricing.routes_text') }}
                </p>
            </div>

            <div style="max-width: 800px; margin: 0 auto;">
                <div
                    style="background: var(--color-white); border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">
                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr style="background: var(--color-secondary);">
                                    <th style="padding: 20px; color: var(--color-white); font-weight: 600; text-align: left;">
                                        {{ __('pricing.table_route') }}
                                    </th>
                                    <th style="padding: 20px; color: var(--color-white); font-weight: 600; text-align: left;">
                                        {{ __('pricing.table_mercedes_s') }}
                                    </th>
                                    <th style="padding: 20px; color: var(--color-white); font-weight: 600; text-align: left;">
                                        {{ __('pricing.table_bmw_7') }}
                                    </th>
                                    <th style="padding: 20px; color: var(--color-white); font-weight: 600; text-align: left;">
                                        {{ __('pricing.table_exec_limo') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 1px solid var(--color-accent);">
                                    <td style="padding: 20px; color: var(--color-dark); font-weight: 500;">{{ __('pricing.route_1_label') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_1_s') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_1_bmw') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_1_limo') }}</td>
                                </tr>
                                <tr style="border-bottom: 1px solid var(--color-accent);">
                                    <td style="padding: 20px; color: var(--color-dark); font-weight: 500;">{{ __('pricing.route_2_label') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_2_s') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_2_bmw') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_2_limo') }}</td>
                                </tr>
                                <tr style="border-bottom: 1px solid var(--color-accent);">
                                    <td style="padding: 20px; color: var(--color-dark); font-weight: 500;">{{ __('pricing.route_3_label') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_3_s') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_3_bmw') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_3_limo') }}</td>
                                </tr>
                                <tr style="border-bottom: 1px solid var(--color-accent);">
                                    <td style="padding: 20px; color: var(--color-dark); font-weight: 500;">{{ __('pricing.route_4_label') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_4_s') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_4_bmw') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_4_limo') }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px; color: var(--color-dark); font-weight: 500;">{{ __('pricing.route_5_label') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_5_s') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_5_bmw') }}</td>
                                    <td style="padding: 20px; color: var(--color-dark);">{{ __('pricing.price_5_limo') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div style="padding: 20px; background: var(--color-primary); text-align: center; color: var(--color-secondary); font-size: 14px;">
                        {{ __('pricing.routes_note') }}
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
                    style="font-size: 40px; color: var(--color-dark); margin-bottom: 40px; text-align: center;">
                    {{ __('pricing.additional_title') }}
                </h2>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">
                    <div style="background: var(--color-white); padding: 30px; border-radius: 8px;">
                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <i class="fas fa-champagne-glasses" style="font-size: 24px; color: var(--color-secondary); margin-right: 15px;"></i>
                            <h3 style="color: var(--color-dark); font-size: 20px;">{{ __('pricing.add_champagne_title') }}</h3>
                        </div>
                        <p style="color: var(--color-secondary); margin-bottom: 15px;">{{ __('pricing.add_champagne_text') }}</p>
                        <div style="color: var(--color-dark); font-weight: 600; font-size: 18px;">{{ __('pricing.add_champagne_price') }}</div>
                    </div>

                    <div style="background: var(--color-white); padding: 30px; border-radius: 8px;">
                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <i class="fas fa-gift" style="font-size: 24px; color: var(--color-secondary); margin-right: 15px;"></i>
                            <h3 style="color: var(--color-dark); font-size: 20px;">{{ __('pricing.add_decor_title') }}</h3>
                        </div>
                        <p style="color: var(--color-secondary); margin-bottom: 15px;">{{ __('pricing.add_decor_text') }}</p>
                        <div style="color: var(--color-dark); font-weight: 600; font-size: 18px;">{{ __('pricing.add_decor_price') }}</div>
                    </div>

                    <div style="background: var(--color-white); padding: 30px; border-radius: 8px;">
                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <i class="fas fa-language" style="font-size: 24px; color: var(--color-secondary); margin-right: 15px;"></i>
                            <h3 style="color: var(--color-dark); font-size: 20px;">{{ __('pricing.add_multi_title') }}</h3>
                        </div>
                        <p style="color: var(--color-secondary); margin-bottom: 15px;">{{ __('pricing.add_multi_text') }}</p>
                        <div style="color: var(--color-dark); font-weight: 600; font-size: 18px;">{{ __('pricing.add_multi_price') }}</div>
                    </div>

                    <div style="background: var(--color-white); padding: 30px; border-radius: 8px;">
                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <i class="fas fa-snowflake" style="font-size: 24px; color: var(--color-secondary); margin-right: 15px;"></i>
                            <h3 style="color: var(--color-dark); font-size: 20px;">{{ __('pricing.add_ac_title') }}</h3>
                        </div>
                        <p style="color: var(--color-secondary); margin-bottom: 15px;">{{ __('pricing.add_ac_text') }}</p>
                        <div style="color: var(--color-dark); font-weight: 600; font-size: 18px;">{{ __('pricing.add_ac_price') }}</div>
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
                    {{ __('pricing.cta_title') }}
                </h2>
                <p style="font-size: 20px; color: var(--color-accent); margin-bottom: 40px;">
                    {{ __('pricing.cta_text') }}
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="/{{ app()->getLocale() }}/booking" class="btn-primary"
                        style="background-color: var(--color-white); color: var(--color-dark); border-color: var(--color-white);">
                        <i class="fas fa-calculator" style="margin-right: 10px;"></i> {{ __('pricing.cta_instant_quote') }}
                    </a>
                    <a href="/{{ app()->getLocale() }}/contact" class="btn-secondary"
                        style="color: var(--color-white); border-color: var(--color-white);">
                        <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> {{ __('pricing.cta_call_quote') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
