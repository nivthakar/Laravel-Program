<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\insertcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::post('/add', [insertcontroller::class, 'insertdata']);
Route::get('/', [insertcontroller::class, 'viewdata']);
Route::get('/delete/{id}', [insertcontroller::class, 'record_delete']);
Route::get('/edit/{id}', [insertcontroller::class, 'view_data']);
Route::post('/update/{id}', [insertcontroller::class, 'record_update']);