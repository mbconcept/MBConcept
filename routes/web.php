<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/contact/{type?}', function ($type = null) {
    return view('contact', ['type' => $type]);
})->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/infos', function () {
    return view('infos');
})->name('infos');

Route::get('/solutions', function () {
    return view('solutions');
})->name('solutions');

Route::get('/réalisations', function () {
    return view('realisations');
})->name('realisations');

Route::get('/mentions-legales', function () {
    return view('legal-notices');
})->name('legal-notices');
