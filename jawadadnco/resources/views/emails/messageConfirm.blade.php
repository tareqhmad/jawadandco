<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('contact.mail_subject_confirmation') }}</title>
</head>

<body style="font-family: 'Segoe UI', Arial, sans-serif; background-color: #f9fafb; padding: 40px 20px; margin: 0;">
    <div
        style="max-width: 600px; margin: auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.05); border: 1px solid #e5e7eb;">

        <div
            style="background-color: #ffffff; padding: 40px 30px; text-align: center; border-bottom: 1px solid #f3f4f6;">
            <h1 style="color: #111827; margin: 0; font-size: 24px; font-weight: 700; letter-spacing: 1px;">
                LUXWAY
            </h1>
            <div style="width: 50px; height: 2px; background: #111827; margin: 20px auto 0;"></div>
        </div>

        <div style="padding: 40px 30px;">
            <h2 style="color: #111827; font-size: 20px; margin-bottom: 20px;">
                {{ __('contact.mail_client_greeting', ['name' => $data['first_name']]) }}
            </h2>

            <p style="color: #4b5563; font-size: 16px; line-height: 1.6; margin-bottom: 25px;">
                {{ __('contact.mail_client_confirmation_text') }}
            </p>

            <div style="background-color: #f8fafc; padding: 25px; border-radius: 6px; border: 1px solid #edf2f7;">
                <h3
                    style="color: #111827; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; margin-top: 0; margin-bottom: 15px;">
                    {{ __('contact.mail_summary_title') }}
                </h3>
                <p style="margin: 5px 0; color: #718096; font-size: 14px;">
                    <strong>{{ __('contact.subject_label') }} :</strong> {{ $data['subject'] }}
                </p>
                <p style="margin: 5px 0; color: #718096; font-size: 14px;">
                    <strong>{{ __('contact.date_label') }} :</strong> {{ now()->format('d/m/Y') }}
                </p>
            </div>

            <p style="color: #4b5563; font-size: 16px; line-height: 1.6; margin-top: 25px;">
                {{ __('contact.mail_client_next_steps') }}
            </p>

            <p style="margin-top: 40px; color: #111827; font-weight: 600; font-size: 15px;">
                {{ __('contact.mail_signature') }}<br>
                <span style="color: #6b7280; font-weight: 400; font-size: 13px;">Luxury Chauffeur Service</span>
            </p>
        </div>

        <div style="background-color: #111827; padding: 30px; text-align: center;">
            <p style="color: #9ca3af; font-size: 12px; margin: 0;">
                &copy; {{ date('Y') }} Luxway. Tous droits réservés.
            </p>
            <p style="color: #6b7280; font-size: 11px; margin-top: 10px;">
                {{ __('contact.mail_disclaimer') }}
            </p>
        </div>
    </div>
</body>

</html>
