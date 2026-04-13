<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoryController;

// ── Main birthday site ──
Route::get('/', function () {
    return view('welcome');
});

// ── Memory form submission ──
Route::post('/submit-memory', [MemoryController::class, 'submit'])
    ->name('memory.submit');
