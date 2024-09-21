<?php

use App\Http\Controllers\NewVolunteersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/za-krik', function () {
    return view('za-krik');
})->name('za-krik');

Route::get('/uslugi', function () {
    return view('uslugi');
});

Route::get('/new/volunteer', [NewVolunteersController::class, 'index'])
    ->name('volunteer');

Route::post('/new/volunteer/store', [NewVolunteersController::class, 'store'])
    ->name('volunteer.store');
