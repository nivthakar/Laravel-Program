<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users_table;
use Illuminate\Support\Facades\DB;


class insertcontroller extends Controller
{
    //
    function insertdata(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users_tables,email',
            'gender' => 'required',
            'city' => 'required',
            'hobby' => 'required',
            'address' => 'required',
        ]);   

        $user = new users_table;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->gender = $req->gender;
        $user->city = $req->city;
        $user->hobby = implode(", ", $req->hobby);
        $user->address = $req->address;
        $user->save();
        return redirect('/')->with('message', 'User Added Successfully!');

    }

    function viewdata()
    {
       $data = users_table::all(); 
       $data = users_table::paginate(5);  
       return view('welcome', ['data' => $data]); 
    }

    function record_delete($id){
        $data = users_table::find($id);
        $data->delete();
        return redirect('/')->with('status', 'User Deleted Successfully!');
      //  return  back('/')->with('status', 'User Deleted Successfully!');

    }

    function view_data($id){
        $data = users_table::find($id);  
        return view('edit', ['data' => $data]);
    }
    function record_update(Request $req,$id){
        $data=users_table::find($id);
        $data->name=$req->name; 
        $data->email=$req->email;
        $data->gender=$req->gender;
        $data->city=$req->city;
        $data->hobby = implode(", ", $req->hobby);

        $data->address=$req->address;
        $data->save();
        return redirect('/')->with('status', 'User Updated Successfully!');   
    }


}
