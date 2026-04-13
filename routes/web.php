<?php

use App\Http\Controllers\MemoryController;
use Illuminate\Support\Facades\Route;

// ── Main birthday site ──
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

// ── Memory form submission ──
Route::post('/upload-video', [MemoryController::class, 'uploadVideo']);
Route::post('/submit-memory', [MemoryController::class, 'store']);
