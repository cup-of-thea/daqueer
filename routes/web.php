<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('home');

Route::get('/about', fn() => view('about'))->name('about');

Route::get('/events/incoming', fn() => view('events.show'))->name('events.incoming');

Route::get('/associations', fn() => view('associations.index'))->name('associations.index');