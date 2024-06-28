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
        Schema::create('occasion_timings', function (Blueprint $table) {
            $table->foreignId('occasion_id')->constrained('occasions')->cascadeOnDelete();
            $table->foreignId('timing_id')->constrained('timings')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('occasion_timings');
    }
};
