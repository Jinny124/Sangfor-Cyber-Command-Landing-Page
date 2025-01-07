<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('thankyoupage');
});

Route::get('/home', function () {
    return view('homepage');
})->name('home');

Route::post('/thank-you', function () {
    return view('thankyoupage'); 
})->name('thankyou');