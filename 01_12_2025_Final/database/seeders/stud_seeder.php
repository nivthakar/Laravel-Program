<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class stud_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('stud_datas')->insert([
            [
                'student_name' => 'Jay',
                'student_email' => 'jayt@gmail.com',
                'student_phone' => '9876543210',
                'enrollment_date' => '2023-08-15',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'student_name' => 'Rima',
                'student_email' => 'rimad@gmail.com',
                'student_phone' => '8765432109',
                'enrollment_date' => '2023-09-10',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
