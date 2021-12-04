<?php

use Illuminate\Support\Facades\Route;

Route::get('about-laravel', 'AboutUsController');

Route::get('/', function () {
    return view('welcome');
});
