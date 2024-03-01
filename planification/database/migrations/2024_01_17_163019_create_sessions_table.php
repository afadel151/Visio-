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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();//ID
        
            $table->unsignedBigInteger('timing_id');
            $table->foreign('timing_id')->references('id')->on('timings');//TIMING
            $table->unsignedBigInteger('week_id');
            $table->foreign('week_id')->references('id')->on('weeks');//WEEK
            $table->date('session_date');//DATE
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id')->references('id')->on('modules');//MODULE
            $table->unsignedBigInteger('first_teacher_id');
            $table->foreign('first_teacher_id')->references('id')->on('teachers');//FIRST TEACHER
            $table->unsignedBigInteger('second_teacher_id')->default(null);
            $table->foreign('second_teacher_id')->references('id')->on('teachers');//SECOND TEACHER
            // $table->string('students_type');
            $table->string('session_type');// TYPE 
            $table->string('sessionsable_type');// App\Models\Company or App\Models\Section
            $table->unsignedBigInteger('sessionable_id');
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');// ROOM
            $table->boolean('absented')->default(false);//ABSENTED
            $table->boolean('anticipated')->default(false);//Anticipated
            $table->boolean('caughtup')->default(false);//caughtup
            $table->boolean('rectified')->default(false);//rectified
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
