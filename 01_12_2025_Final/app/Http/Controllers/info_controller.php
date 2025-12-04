<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stud_info;
use Carbon\Traits\Timestamp;
use Illuminate\Support\Facades\DB;


class info_controller extends Controller
{
    //

    public function show_Info()
    {
        $info = stud_info::all();
        return view('info_view', compact('info'));
    }

    public function insert_Data(Request $request)
    {
        DB::insert('insert into stud_infos (address, date_of_birth,guardian_name,guardian_contact) values (?,?,?,?)', ['Ahmedabad', '2001-09-20', 'google', '9876543210' ]);
        
        return "Data Inserted Successfully";
    } 
    
    
}

