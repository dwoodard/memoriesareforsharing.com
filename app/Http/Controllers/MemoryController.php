<?php

namespace App\Http\Controllers;

use App\Mail\MemorySubmitted;
use App\Models\Memory;
use App\Models\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MemoryController extends Controller
{
    public function uploadVideo(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:120',
            'video' => 'required|file|mimes:mp4,mov,avi,webm,m4v,3gp|max:1048576', // 1024MB
        ]);

        $name = Str::slug($request->input('name'));
        $ext = $request->file('video')->getClientOriginalExtension();
        $filename = 'videos/'.$name.'_'.time().'.'.$ext;

        // Ensure directory exists and upload file
        $this->uploadToSpaces($filename, $request->file('video'));

        $url = Storage::disk('spaces')->url($filename);

        Video::create([
            'name' => $request->input('name'),
            'filename' => $filename,
            'url' => $url,
        ]);

        return response()->json(['success' => true, 'url' => $url]);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:120',
            'contact' => ['required', 'string', 'max:200', function ($attribute, $value, $fail) {
                if (! filter_var($value, FILTER_VALIDATE_EMAIL) && ! preg_match('/^[\+\d\s\.\-\(\)]{7,}$/', $value)) {
                    $fail('The '.$attribute.' must be a valid email address or phone number.');
                }
            }],
            'story' => 'required|string|max:10000',
            'year' => 'nullable|string|max:20',
            'relation' => 'nullable|string|max:60',
            'photo' => 'nullable|file|image|max:1048576', // 1024MB
        ]);

        $photoUrl = null;

        if ($request->hasFile('photo')) {
            $name = Str::slug($request->input('name'));
            $ext = $request->file('photo')->getClientOriginalExtension();
            $filename = 'photos/'.$name.'_'.time().'.'.$ext;

            // Ensure directory exists and upload file
            $this->uploadToSpaces($filename, $request->file('photo'));

            $photoUrl = Storage::disk('spaces')->url($filename);
        }

        $memory = Memory::create([
            'name' => $request->input('name'),
            'contact' => $request->input('contact'),
            'story' => $request->input('story'),
            'year' => $request->input('year'),
            'relation' => $request->input('relation'),
            'photo_url' => $photoUrl,
        ]);

        Mail::to(env('MEMORY_SUBMISSION_EMAIL', 'shalyce@gmail.com'))->send(new MemorySubmitted([
            'name' => $memory->name,
            'contact' => $memory->contact,
            'story' => $memory->story,
            'year' => $memory->year ?? 'Unknown',
            'relation' => $memory->relation ?? '',
            'photo_url' => $memory->photo_url,
        ]));

        return response()->json(['success' => true]);
    }

    private function uploadToSpaces(string $path, $file): void
    {
        // Upload file to Digital Ocean Spaces
        // Note: S3/DO Spaces automatically creates path prefixes, no need to create directories
        Storage::disk('spaces')->put($path, file_get_contents($file), 'public');
    }
}
