<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stud_controller;
use App\Http\Controllers\info_controller;
   

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show',[stud_controller::class,'show_Data']);
Route::get('/view',[info_controller::class,'show_Info']);
Route::get('/insert',[info_controller::class,'insert_Data']);
Route::get('/join', [stud_controller::class, 'join_StudInfo']);
