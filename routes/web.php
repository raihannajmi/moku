<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeController;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/rating', function () {
    return view('rating');
});

Route::get('/prime-form', [PrimeController::class, 'index']);

Route::post('/primes', [PrimeController::class, 'showPrimes'])->name('show.primes');
