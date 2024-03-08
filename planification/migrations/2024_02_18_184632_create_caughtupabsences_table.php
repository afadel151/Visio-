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
        Schema::create('caughtupabsences', function (Blueprint $table) {
            $table->id();
            //nom
            $table->foreignId('additive_id')->constrained('additives');
            $table->foreignId('absence_id')->constrained('absences');
            //date 
            $table->date('catchup_date');
            $table->foreignId('timing_id')->constrained('timings');
            $table->foreignId('room_id')->constrained('rooms');
            $table->boolean('absented')->default(false);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caughtupabsences');
    }
};
