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
        //supplementaire (melange de sections ou companies autorise)
        Schema::create('additionals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('additive_id')->constrained('additives');
            $table->date('additional_date');
            $table->foreignId('timing_id')->constrained('timings','id');
            $table->foreignId('module_id')->constrained('modules','id');//prof
            $table->foreignId('room_id')->constrained('rooms','id');
            $table->foreignId('teacher_id')->constrained('teachers','id');
            $table->string('session_type');
            $table->boolean('absented')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additionals');
    }
};
