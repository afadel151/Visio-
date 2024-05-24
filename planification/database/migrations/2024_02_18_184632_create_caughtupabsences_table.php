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
            $table->timestamps();
            $table->foreignId('additive_id')->constrained('additives')->onDelete('CASCADE');
            $table->foreignId('absence_id')->constrained('absences')->onDelete('CASCADE');
            $table->date('catchup_date');
            $table->foreignId('timing_id')->constrained('timings')->onDelete('CASCADE');
            $table->foreignId('room_id')->constrained('rooms')->onDelete('CASCADE');
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
