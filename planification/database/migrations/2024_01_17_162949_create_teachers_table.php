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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_name');
            $table->string('teacher_grade');
            $table->string('teacher_type');
            
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments');

        });
        
        Schema::create('teacher_available_hours', function (Blueprint $table) {
            
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->string('day');
            $table->unsignedBigInteger('timing_id');
            $table->foreign('timing_id')->references('id')->on('timings');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
        
        Schema::dropIfExists('teacher_available_hours');
        //drop teachers modules
    }
};
