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
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('module_id');
            $table->string('module');
            $table->unsignedInteger('department_id');
            $table->foreign('department_id')->references('department_id')->on('departments');
            $table->unsignedInteger('module_head_id');
            $table->foreign('module_head_id')->references('teacher_id')->on('teachers');
            $table->unsignedInteger('battalion_id');
            $table->foreign('battalion_id')->references('battalion_id')->on('battalions');
            
            $table->char('module_sector',2);
            
            
        });
        Schema::create('teachers_modules', function (Blueprint $table) {
            //do we need to add ID to this table  
            $table->unsignedInteger('teacher_id');
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');
            $table->unsignedInteger('module_id');
            $table->foreign('module_id')->references('module_id')->on('modules');
        });
       
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
