<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\NewVolunteersController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VolunteersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', [EventsController::class, 'index']);

Route::get('/za-krik', function () {
    return view('za-krik');
})->name('za-krik');

Route::get('/uslugi', function () {
    return view('uslugi');
})->name('uslugi');


Route::get('/arhiva', function () {
    return view('arhiva');
})->name('arhiva');
Route::get('/new/volunteer', [NewVolunteersController::class, 'index'])
    ->name('volunteer');

Route::post('/new/volunteer/store', [NewVolunteersController::class, 'store'])
    ->name('volunteer.store');

Route::get('/volunteers', [VolunteersController::class, 'index'])
    ->name('volunteers');

Route::get('/projects/proekti', [ProjectController::class, 'proekti'])->name('projects.proekti');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');
    
Route::get('/team', [TeamController::class, 'index'])
    ->name('team');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');