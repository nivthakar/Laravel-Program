<?php

namespace App\Http\Controllers;
use App\Models\register_tables;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class info_controller extends Controller
{

        public function insert_data(Request $req)      
        {
                register_tables::create([
                    'studname'=>$req->studname,
                    'studemail'=>$req->studemail,
                    'studcity'=>$req->studcity,
                    'studcontact'=>$req->studcontact
                ]);
            // register_tables::create([
            //     'studname'=>'abc',
            //     'studemail'=>'abc@gmail.com',
            //     'studcity'=>'Los Angeles',
            //     'studcontact'=>'0987654321'
            // ]);
            return "Data Inserted using Controller";
        }

        public function fetch_data()
        {
          
          $data = register_tables::all();
            return  view('viewdata',compact('data'));
        }

        public function dummy_function(){

            $response = Http::get('https://dummyjson.com/carts');

        // Convert JSON to array
        $carts = $response->json();

        // Pass data to view or return as JSON
           return view('dummyjason', ['carts' => $carts]);
        }
    //
}       
