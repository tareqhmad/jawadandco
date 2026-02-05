<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ClientMail;
use App\Mail\MessageConfirmMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {

        $data = $request->validate([
            'trip_type' => 'required|string',
            'pickup' => 'required|string',
            'destination' => 'required|string',
            'pickup_date' => 'required|date',
            'pickup_time' => 'required',
            'vehicle_type' => 'required|string',
            'service_type' => 'required|string',
            'passengers' => 'required|integer|min:1',
            'luggage' => 'required|integer|min:0',
            'instructions' => 'nullable|string',

            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
            $message->to('tareqam3@gmail.com')
                ->replyTo($data['email'])
                ->subject('🚘 Nouvelle demande de réservation – Luxway');
        });

        Mail::to($data['email'])->send(new ClientMail($data));

        return back()->with('success', __('booking.success_message'));
    }


    public function contactform(Request $request)
    {

        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email',
            'phone'      => 'nullable|string',
            'subject'    => 'required|string',
            'message'    => 'required|string',
        ]);

        Mail::send('emails.message', ['data' => $data], function ($message) use ($data) {
            $message->to('tareqam3@gmail.com')
                ->replyTo($data['email'])
                ->subject('🚘 Nouveau Message  – Luxway');
        });

        Mail::to($data['email'])->send(new MessageConfirmMail($data));

        return back()->with('success', __('booking.success_message'));
    }
}
