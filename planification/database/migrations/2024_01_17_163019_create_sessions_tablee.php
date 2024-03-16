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
        Schema::create('sessions_table', function (Blueprint $table) {
            $table->id();//ID
        
            $table->foreignId('timing_id')->constrained('timings')->onDelete('CASCADE');//TIMING    
            $table->foreignId('week_id')->constrained('weeks')->onDelete('CASCADE');//WEEK  
            $table->date('session_date');//DATE 
            $table->foreignId('module_id')->constrained('modules')->onDelete('CASCADE');//MODULE    
            $table->foreignId('teacher_id')->constrained('teachers')->onDelete('CASCADE');  
            // $table->string('students_type');
            $table->string('session_type');// TYPE  
            $table->string('sessionable_type');// App\Models\Company or App\Models\Section
            $table->unsignedBigInteger('sessionable_id');
            $table->foreignId('room_id')->constrained('rooms')->onDelete('CASCADE');// ROOM
            $table->boolean('absented')->default(false);//ABSENTED
            $table->boolean('anticipated')->default(false);//Anticipated
            $table->boolean('caughtup')->default(false);//caughtup
            $table->boolean('rectified')->default(false);//rectified
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions_table');
    }
};
