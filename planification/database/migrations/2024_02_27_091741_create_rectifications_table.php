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
        Schema::create('rectifications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('additive_id')->constrained('additives')->onDelete('CASCADE');
            $table->foreignId('session_id')->constrained('sessions_table')->onDelete('CASCADE');
            $table->foreignId('timing_id')->constrained('timings')->onDelete('CASCADE');
            $table->foreignId('room_id')->constrained('rooms')->onDelete('cascade');
            $table->boolean('absented')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rectifications');
    }
};
