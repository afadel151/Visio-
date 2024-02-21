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
            $table->increments('session_id');
        
            $table->unsignedInteger('timing_id');
            $table->foreign('timing_id')->references('timing_id')->on('timings');
            $table->unsignedInteger('week_id');
            $table->foreign('week_id')->references('week_id')->on('weeks');
            $table->date('session_date');
            $table->unsignedInteger('module_id');
            $table->foreign('module_id')->references('module_id')->on('modules');
            $table->unsignedInteger('teacher_id');
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');
            
            $table->string('session_type');
            $table->unsignedInteger('room_id');
            $table->foreign('room_id')->references('room_id')->on('rooms');
            $table->boolean('absented')->default(false);
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
