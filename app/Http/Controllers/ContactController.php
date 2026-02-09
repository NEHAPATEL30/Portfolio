<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'phone'   => 'required',
            'message' => 'required|string',
        ]);

        Mail::to('np1553156@gmail.com') // 👈 yaha apna email
            ->send(new ContactMail($request->all()));

        return back()->with('success', 'Message sent successfully!');
    }
}
