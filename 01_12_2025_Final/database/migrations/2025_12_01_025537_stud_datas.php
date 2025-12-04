<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('stud_datas', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_email')->unique();
            $table->string('student_phone')->nullable();
            $table->date('enrollment_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
