<?php

use App\Http\Controllers\CardsController;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('LandingPage');
})->name('LandingPage');

Route::get('/{rota_dinamica}', [CardsController::class, 'read']);