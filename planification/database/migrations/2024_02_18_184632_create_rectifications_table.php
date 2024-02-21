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
            $table->increments('rectification_id');
            //nom
            $table->unsignedInteger('absence_id');
            $table->foreign('absence_id')->references('absence_id')->on('absences');
            //date debut
            $table->date('rectification_date');

            $table->unsignedInteger('timing_id');
            $table->foreign('timing_id')->references('timing_id')->on('timings');
            $table->unsignedInteger('room_id');
            $table->foreign('room_id')->references('room_id')->on('rooms');

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
