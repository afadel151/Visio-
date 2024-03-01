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
        Schema::create('anticipations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('additive_id')->constrained('additives');
            $table->foreignId('session_id')->constrained('sessions');
            $table->date('anticipation_date');
            $table->foreignId('timing_id')->constrained('timings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anticipations');
    }
};
