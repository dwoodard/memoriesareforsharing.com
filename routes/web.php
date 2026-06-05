<?php


use App\Http\Controllers\ContactController;

Route::view('/', 'welcome')->name('home');
Route::post('/contact', [ContactController::class, 'send'])
    ->middleware('throttle:6,1')
    ->name('contact.send');
