<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('intro');
});


use App\Http\Controllers\ContactController;

Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');