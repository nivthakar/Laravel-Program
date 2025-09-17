<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sum', function () {
    return 99+99;
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/info', function () {
    return view('info');
});

Route::view('/contact', 'contact');
Route::view('/services', 'services');

