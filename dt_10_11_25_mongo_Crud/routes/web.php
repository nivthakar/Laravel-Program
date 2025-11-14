<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\info_controller;

use App\Models\info_tables;


Route::get('/insert',function(){
  
        info_tables::create([
            'name'=>'Samir',
            'email'=>'samir@gmail.com',
            'city'=>'New York',
            'contact'=>'1234567890'
            
        ]);
        return "Data Inserted";
});
route::get('/read',function(){
    $data=info_tables::all();
    return $data;
});

Route::get('/', function () {
    return view('welcome');
});

route::get('/add_data',[info_controller::class,'insert_data']);

route::get('/view_data',[info_controller::class,'fetch_data']);
route::get('/dummy',[info_controller::class,'dummy_function']);