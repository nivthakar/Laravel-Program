<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class info_seeder extends Seeder
{
    public function run(): void
    {
        
        DB::table('stud_info')->insert([
            [
                'address' => '123 Main St, Cityville',
                'date_of_birth' => '2000-01-15',
                'guardian_name' => 'John Doe',
                'guardian_contact' => '555-1234',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => '456 Oak Ave, Townsville',
                'date_of_birth' => '1999-05-22',
                'guardian_name' => 'Jane Smith',
                'guardian_contact' => '555-5678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
       
    }
   
}
