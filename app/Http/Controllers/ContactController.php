<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name'  => ['nullable', 'string', 'max:100'],
            'email'      => ['required', 'email', 'max:255'],
            'phone'      => ['nullable', 'string', 'max:30'],
            'package'    => ['nullable', 'string', 'max:200'],
            'message'    => ['nullable', 'string', 'max:3000'],
        ]);

        Mail::to('shalyce@memoriesareforsharing.com')
            ->send(new ContactFormSubmission($validated));

        return response()->json(['success' => true]);
    }
}
