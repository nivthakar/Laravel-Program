<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stud_data;
use Illuminate\Support\Facades\DB;

class stud_controller extends Controller
{
    //
    public function show_Data()
    {
       
     //   $data = DB::table('stud_datas')->where('id',10)->first();
        $data = DB::table('stud_datas')->where('student_name', 'rima')->value('student_email');
        echo "Email: ".$data;
        // echo "Email: ".$data->student_email."<br>";
        // echo "Phone: ".$data->student_phone."<br>";
        // echo "Enrollment Date: ".$data->enrollment_date."<br>"; 
        // // $data = stud_data::all();

        // foreach($data as $stud)
        // {
        //     echo "ID: ".$stud->id."<br>";
        //     echo "Name: ".$stud->student_name."<br>";
        //     echo "Email: ".$stud->student_email."<br>";
        //     echo "Phone: ".$stud->student_phone."<br>";
        //     echo "Enrollment Date: ".$stud->enrollment_date."<br>";
        //     echo "<hr>";
        // }
      
     }

     public function join_StudInfo()
    {   
    $data = DB::table('stud_infos')
        ->join('stud_datas', 'stud_infos.id', '=', 'stud_datas.id')
        ->select('stud_infos.*', 'stud_datas.student_phone','stud_datas.student_email')
        ->get();

    return $data;
    }
        
}
