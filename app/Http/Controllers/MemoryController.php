<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MemorySubmitted;

class MemoryController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'name'     => 'required|string|max:255',
        'contact'  => 'required|string|max:255',
        'story'    => 'required|string',
        'year'     => 'nullable|string|max:50',
        'relation' => 'nullable|string|max:100',
        'photo'    => 'nullable|image|max:15360',
    ]);

    $validated['submittedAt'] = now()->format('F j, Y \a\t g:i A');  // ← add this

    Mail::to('shalyce@gmail.com')->send(new MemorySubmitted($validated, $request->file('photo')));

    return response()->json(['success' => true]);
}
}