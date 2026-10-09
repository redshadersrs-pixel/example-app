<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;

// Home route
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Overzicht route
Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');

// Detail route
Route::get('/planets/{planet}', [PlanetController::class, 'show'])->name('planets.show');
