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

Route::get('/companies', function () {
    return view('companies');
})->name('companies');

Route::get('/individuals', function () {
    return view('individuals');
})->name('individuals');

Route::get('/mentions-legales', function () {
    return view('legal-notices');
})->name('legal-notices');
