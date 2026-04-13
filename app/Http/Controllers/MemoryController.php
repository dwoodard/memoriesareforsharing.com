<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Mail\MemorySubmitted;

class MemoryController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:100',
            'contact'  => 'required|string|max:150',
            'story'    => 'required|string|max:10000',
            'year'     => 'nullable|string|max:10',
            'relation' => 'nullable|string|max:50',
            'photo'    => 'nullable|image|max:8192',   // 8 MB max
        ]);

        // Handle photo upload
        $photoPath = null;
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $photoPath = $request->file('photo')->store('memory-photos', 'local');
        }

        $data = [
            'name'      => $validated['name'],
            'contact'   => $validated['contact'],
            'story'     => $validated['story'],
            'year'      => $validated['year'] ?? 'Not specified',
            'relation'  => $validated['relation'] ?? 'Not specified',
            'photoPath' => $photoPath,
            'submittedAt' => now()->format('F j, Y \a\t g:i A'),
        ];

        Mail::to(config('mail.from.address'))
            ->send(new MemorySubmitted($data));

        return response()->json([
            'success' => true,
            'message' => 'Memory submitted successfully!',
        ]);
    }
}
