<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/za-krik', function () {
    return view('za-krik');
})->name('za-krik');
