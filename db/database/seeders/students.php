<?php

namespace Database\Seeders;

use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class students extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        //
        DB::table('students')->insert([
            'name' => 'John Doe',
            'email' => 'nirav@gmail.com',
            'course' => 'BCA',
            'city' => 'Ahmedabad'
        ]);   


    }
}
