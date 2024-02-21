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
            $table->increments('teacher_id');
            $table->string('teacher_name');
            $table->string('teacher_grade');
            $table->foreign('teacher_type_id')->references('teacher_type_id')->on('teacher_types');
            $table->string('teacher_type');
            
            $table->unsignedInteger('department_id');
            $table->foreign('department_id')->references('department_id')->on('departments');

        });
        
        Schema::create('teacher_available_hours', function (Blueprint $table) {
            
            $table->unsignedInteger('teacher_id');
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');
            $table->string('day');
            $table->unsignedInteger('timing_id');
            $table->foreign('timing_id')->references('timing_id')->on('timings');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('teachers_modules');
        Schema::dropIfExists('teacher_available_hours');
        //drop teachers modules
    }
};
