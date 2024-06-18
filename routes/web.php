<?php

use Illuminate\Support\Facades\Route;

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

