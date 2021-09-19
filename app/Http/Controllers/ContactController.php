<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('welcome');
    }


    public function sendEmail(Request $request)
    {
        $this->validate($request, [
            'Nom' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email',
            'Sujet' => 'required|min:3',
            'Message' => 'required|min:10'
        ]);

        $mailData = [
            'Nom' => $request->Nom,
            'email' => $request->email,
            'Sujet' => $request->Sujet,
            'Message' => $request->Message
        ];
        Mail::to($request->email)->send(new ContactMail($mailData));
        return back()->with('message', 'Votre message a été envoyé');
    }
}
