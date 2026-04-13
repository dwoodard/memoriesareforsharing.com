<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoryController;

// ── Main birthday site ──
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

// ── Memory form submission ──
Route::post('/submit-memory', [MemoryController::class, 'submit'])
    ->name('memory.submit');
