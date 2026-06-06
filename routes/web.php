<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MemoryController;
use Illuminate\Support\Facades\Route;

// ── Main site ──
Route::view('/', 'welcome')->name('home');

// ── Contact form ──
Route::post('/contact', [ContactController::class, 'send'])
    ->middleware('throttle:6,1')
    ->name('contact.send');

// ── Memory form submission ──
Route::post('/upload-video', [MemoryController::class, 'uploadVideo']);
Route::post('/submit-memory', [MemoryController::class, 'store']);

// ── Authenticated dashboard ──
Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});