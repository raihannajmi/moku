<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeapYearController;

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


Route::get('/', [LeapYearController::class, 'index']);
Route::post('/calculate', [LeapYearController::class, 'calculate'])->name('calculate');
