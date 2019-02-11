<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::view('/', 'pages.home')->name('pages.home');

Route::get('/home', 'HomeController@index')->name('home');
