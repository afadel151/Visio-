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
            $table->foreignId('additive_id')->constrained('additives');
            $table->timestamps();
            $table->foreignId('session_id')->constrained('sessions');
            $table->foreignId('timing_id')->constrained('timings');
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
