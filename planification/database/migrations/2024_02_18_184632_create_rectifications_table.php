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
            //nom
            $table->unsignedBigInteger('absence_id');
            $table->foreign('absence_id')->references('id')->on('absences');
            //date debut
            $table->date('rectification_date');

            $table->unsignedBigInteger('timing_id');
            $table->foreign('timing_id')->references('id')->on('timings');
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');

            //date fin
            
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
