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
            $table->foreignId('additive_id')->constrained('additives')->onDelete('CASCADE');
            $table->date('additional_date');
            $table->foreignId('timing_id')->constrained('timings','id')->onDelete('CASCADE');
            $table->foreignId('module_id')->constrained('modules','id')->onDelete('CASCADE');//prof
            $table->foreignId('room_id')->constrained('rooms','id')->onDelete('CASCADE');
            $table->foreignId('teacher_id')->constrained('teachers','id')->onDelete('CASCADE');
            $table->string('session_type');//deleted?
            $table->boolean('absented')->default(false);
            $table->boolean('of_holiday_session')->default(false);
            $table->boolean('of_occasion_session')->default(false);
            $table->unsignedBigInteger('holiday/occasion_session_id')->nullable();
            $table->timestamps();
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
