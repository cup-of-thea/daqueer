<?php

use App\Http\Controllers\AssociationsController;
use App\Http\Controllers\IncomingEditionController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('home');

Route::get('/events/incoming', IncomingEditionController::class)->name('events.incoming');

Route::get('/associations', AssociationsController::class)->name('associations.index');