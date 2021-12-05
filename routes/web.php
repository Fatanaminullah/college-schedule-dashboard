<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'CollegeScheduleController@list');

Route::get('/input', 'CollegeScheduleController@input');
Route::post('/input', 'CollegeScheduleController@store');

Route::get('/edit/{id}', 'CollegeScheduleController@edit');
Route::post('/edit/{id}', 'CollegeScheduleController@update');

Route::delete('/delete/{id}', 'CollegeScheduleController@delete');
