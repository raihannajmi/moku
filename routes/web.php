<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeapYearController;
use App\Http\Controllers\DateController;


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


Route::get('/year', [LeapYearController::class, 'index']);
Route::post('/calculate', [LeapYearController::class, 'calculate'])->name('calculate');
Route::get('/find-dates', function () {
    return view('date_form');
});

Route::post('/show-dates', [DateController::class, 'showDates'])->name('showDates');
