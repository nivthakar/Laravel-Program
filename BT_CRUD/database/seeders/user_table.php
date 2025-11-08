<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;    


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user_table extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('users_tables')->insert([
            'name' => Str::random(10),'John abc',
            'email' => Str::random(10).'abc@example.com',
            'gender' =>Str::random(6),'Male',
            'city' => Str::random(10),'Abc City',
            'hobby' => Str::random(15),'Reading,Writing',
            'address' => Str::random(50),'123, ABC Street, City'       
        ]);
    }
}
