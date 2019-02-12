<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::view('/', 'pages.home')->name('pages.home');

Route::get('/dashboard', 'Dashboard\Actions\ShowHomePage')->name('dashboard.home');
