<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Contact;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact = Contact::create($validatedData);

        Mail::to('tkms.dffg.qb16@gmail.com')->send(new ContactMail($validatedData));

        return response()->json(['message' => 'お問い合わせが送信されました'], 200);
    }
}