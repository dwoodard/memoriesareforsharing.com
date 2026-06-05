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


/*


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
    */