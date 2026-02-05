<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <title>{{ __('booking.mail_client_subject') }}</title>
</head>

<body style="font-family: Arial, sans-serif; background:#f9fafb; padding:20px;">
    <div style="max-width:650px; margin:auto; background:#ffffff; padding:24px; border-radius:8px;">

        <h2 style="color:#111827;">
            {{ __('booking.mail_client_title') }}
        </h2>

        <p>
            {{ __('booking.mail_client_intro', ['name' => $data['first_name']]) }}
        </p>

        <h3>{{ __('booking.mail_summary_title') }}</h3>

        <ul>
            <li><strong>{{ __('booking.pickup_label') }} :</strong> {{ $data['pickup'] }}</li>
            <li><strong>{{ __('booking.destination_label') }} :</strong> {{ $data['destination'] }}</li>
            <li><strong>{{ __('booking.pickup_date_label') }} :</strong>
                {{ \Carbon\Carbon::parse($data['pickup_date'])->format('d/m/Y') }}
            </li>
            <li><strong>{{ __('booking.pickup_time_label') }} :</strong> {{ $data['pickup_time'] }}</li>
            <li><strong>{{ __('booking.service_type_label') }} :</strong> {{ $data['service_type'] }}</li>
        </ul>

        <p>
            {{ __('booking.mail_client_outro') }}
        </p>

        <p style="margin-top:30px;">
            <strong>Luxway</strong><br>
            {{ __('booking.mail_signature') }}
        </p>

        <hr style="margin:25px 0;">

        <p style="font-size:12px; color:#6b7280;">
            {{ __('booking.mail_disclaimer') }}
        </p>
    </div>
</body>

</html>
