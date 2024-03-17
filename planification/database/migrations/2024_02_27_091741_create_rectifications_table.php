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
            $table->foreignId('additive_id')->constrained('additives')->onDelete('CASCADE');
            $table->timestamps();
            $table->foreignId('session_id')->constrained('sessions_table')->onDelete('CASCADE');
            $table->foreignId('timing_id')->constrained('timings')->onDelete('CASCADE');
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
