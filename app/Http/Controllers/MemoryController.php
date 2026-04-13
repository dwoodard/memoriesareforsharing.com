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
            'video' => 'required|file|mimes:mp4,mov,avi,webm,m4v,3gp|max:512000', // 500MB
        ]);

        $name = Str::slug($request->input('name'));
        $ext = $request->file('video')->getClientOriginalExtension();
        $filename = 'videos/'.$name.'_'.time().'.'.$ext;

        Storage::disk('spaces')->put($filename, file_get_contents($request->file('video')), 'public');

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
            'contact' => 'required|string|max:200',
            'story' => 'required|string|max:10000',
            'year' => 'nullable|string|max:20',
            'relation' => 'nullable|string|max:60',
            'photo' => 'nullable|file|image|max:15360', // 15MB
        ]);

        $photoUrl = null;

        if ($request->hasFile('photo')) {
            $name = Str::slug($request->input('name'));
            $ext = $request->file('photo')->getClientOriginalExtension();
            $filename = 'photos/'.$name.'_'.time().'.'.$ext;
            Storage::disk('spaces')->put($filename, file_get_contents($request->file('photo')), 'public');
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

        Mail::to(config('mail.from.address'))->send(new MemorySubmitted([
            'name' => $memory->name,
            'contact' => $memory->contact,
            'story' => $memory->story,
            'year' => $memory->year ?? 'Unknown',
            'relation' => $memory->relation ?? '',
            'photo_url' => $memory->photo_url,
        ]));

        return response()->json(['success' => true]);
    }
}
