<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);


        Mail::send([], [], function ($mail) use ($request) {
            $mail->to('rlagmouch7@gmail.com')
            ->subject('New Contact Form Submission')
            ->text('emails.contact', [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]);
        });


        return redirect()->route('contact.form')->with('success', 'Your message has been sent successfully!');
    }
}
