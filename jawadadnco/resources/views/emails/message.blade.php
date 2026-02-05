<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact - Luxway</title>
</head>

<body style="font-family: 'Segoe UI', Arial, sans-serif; background-color: #f3f4f6; padding: 40px 20px; margin: 0;">
    <div
        style="max-width: 600px; margin: auto; background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #e5e7eb;">

        <div style="background-color: #111827; padding: 30px; text-align: center;">
            <h1 style="color: #ffffff; margin: 0; font-size: 22px; text-transform: uppercase; letter-spacing: 2px;">
                Luxway
            </h1>
            <p style="color: #9ca3af; margin-top: 10px; font-size: 14px;">Notification de nouveau contact</p>
        </div>

        <div style="padding: 40px;">
            <h2
                style="color: #1f2937; font-size: 18px; margin-bottom: 25px; border-bottom: 2px solid #f3f4f6; padding-bottom: 10px;">
                Détails du message
            </h2>

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="padding: 10px 0; color: #6b7280; font-size: 14px; width: 150px;"><strong>Expéditeur
                            :</strong></td>
                    <td style="padding: 10px 0; color: #111827; font-size: 15px;">{{ $data['first_name'] }}
                        {{ $data['last_name'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; color: #6b7280; font-size: 14px;"><strong>Email :</strong></td>
                    <td style="padding: 10px 0; color: #111827; font-size: 15px;">
                        <a href="mailto:{{ $data['email'] }}"
                            style="color: #3b82f6; text-decoration: none;">{{ $data['email'] }}</a>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; color: #6b7280; font-size: 14px;"><strong>Téléphone :</strong></td>
                    <td style="padding: 10px 0; color: #111827; font-size: 15px;">
                        {{ $data['phone'] ?? 'Non renseigné' }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; color: #6b7280; font-size: 14px;"><strong>Sujet :</strong></td>
                    <td style="padding: 10px 0; color: #111827; font-size: 15px; font-weight: 600;">
                        {{ $data['subject'] }}</td>
                </tr>
            </table>

            <div
                style="margin-top: 30px; background-color: #f9fafb; padding: 20px; border-radius: 8px; border-left: 4px solid #111827;">
                <p
                    style="margin: 0 0 10px 0; color: #6b7280; font-size: 13px; font-weight: bold; text-transform: uppercase;">
                    Message :</p>
                <p style="margin: 0; color: #374151; font-size: 15px; line-height: 1.6; white-space: pre-wrap;">
                    {{ $data['message'] }}</p>
            </div>

            <div style="margin-top: 40px; text-align: center;">
                <a href="mailto:{{ $data['email'] }}"
                    style="background-color: #111827; color: #ffffff; padding: 15px 25px; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 14px; display: inline-block;">
                    Répondre directement
                </a>
            </div>
        </div>

        <div style="background-color: #f9fafb; padding: 20px; text-align: center; border-top: 1px solid #e5e7eb;">
            <p style="color: #9ca3af; font-size: 12px; margin: 0;">
                Ce message a été envoyé depuis le formulaire de contact de votre site Luxway.<br>
                Date d'envoi : {{ now()->format('d/m/Y H:i') }}
            </p>
        </div>
    </div>
</body>

</html>
