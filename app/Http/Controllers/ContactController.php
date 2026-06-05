<?php
namespace App\Http\Controllers;

use App\Mail\ContactInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Honeypot — bots fill this, humans never see it.
        if ($request->filled('company')) {
            return redirect('/#contact');
        }

        $data = $request->validate([
            'name'    => ['required', 'string', 'max:120'],
            'email'   => ['required', 'email', 'max:160'],
            'phone'   => ['nullable', 'string', 'max:40'],
            'package' => ['nullable', 'string', 'max:120'],
            'message' => ['required', 'string', 'max:4000'],
        ]);

        Mail::to('shalyce@memoriesareforsharing.com')->send(new ContactInquiry($data));

        return redirect('/#contact')
            ->with('success', 'Thank you — your message is on its way. Shalyce will be in touch soon.');
    }
}
