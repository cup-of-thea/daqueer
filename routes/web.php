<?php

use App\Http\Controllers\AssociationsController;
use App\Http\Controllers\CurrentEditionController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('home');

Route::get('/events/current', CurrentEditionController::class)->name('events.current');

Route::get('/associations', AssociationsController::class)->name('associations.index');