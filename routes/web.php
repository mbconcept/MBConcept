<?php

use App\Http\Controllers\EstimateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/devis', function () {
    return view('estimate');
})->name('estimate');

Route::post('/devis', [EstimateController::class, 'submit'])->name('estimate.submit');
