<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Nouvelle demande de réservation – Luxway</title>
</head>

<body style="font-family: Arial, sans-serif; background:#f3f4f6; padding:20px;">
    <div style="max-width:650px; margin:auto; background:#ffffff; padding:24px; border-radius:8px;">

        <h2 style="margin-bottom:20px; color:#111827;">
            🚘 Nouvelle demande de réservation – Luxway
        </h2>

        <h3>Détails du trajet</h3>
        <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse: collapse;">
            <tr>
                <td><strong>Type de trajet</strong></td>
                <td>{{ ucfirst($data['trip_type']) }}</td>
            </tr>
            <tr>
                <td><strong>Pickup</strong></td>
                <td>{{ $data['pickup'] }}</td>
            </tr>
            <tr>
                <td><strong>Destination</strong></td>
                <td>{{ $data['destination'] }}</td>
            </tr>
            <tr>
                <td><strong>Date</strong></td>
                <td>{{ \Carbon\Carbon::parse($data['pickup_date'])->format('d/m/Y') }}</td>
            </tr>
            <tr>
                <td><strong>Heure</strong></td>
                <td>{{ $data['pickup_time'] }}</td>
            </tr>
            <tr>
                <td><strong>Véhicule</strong></td>
                <td>{{ $data['vehicle_type'] }}</td>
            </tr>
            <tr>
                <td><strong>Service</strong></td>
                <td>{{ $data['service_type'] }}</td>
            </tr>
            <tr>
                <td><strong>Passagers</strong></td>
                <td>{{ $data['passengers'] }}</td>
            </tr>
            <tr>
                <td><strong>Bagages</strong></td>
                <td>{{ $data['luggage'] }}</td>
            </tr>
        </table>

        @if (!empty($data['instructions']))
            <hr style="margin:20px 0;">
            <p><strong>Instructions spéciales :</strong></p>
            <p style="white-space: pre-line;">{{ $data['instructions'] }}</p>
        @endif

        <hr style="margin:20px 0;">

        <h3>Coordonnées client</h3>
        <p><strong>Nom :</strong> {{ $data['first_name'] }} {{ $data['last_name'] }}</p>
        <p><strong>Email :</strong> {{ $data['email'] }}</p>
        <p><strong>Téléphone :</strong> {{ $data['phone'] }}</p>

        <hr style="margin:20px 0;">

        <p style="font-size:12px; color:#6b7280;">
            Message envoyé depuis le formulaire de réservation du site Luxway.
        </p>

    </div>
</body>

</html>
