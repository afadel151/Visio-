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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            //nom
            $table->string('event');
            $table->dateTime('event_date');
            // $table->unsignedBigInteger('global_week_id');
            // $table->foreign('week_id')->references('id')->on('weeks');
            //date fin
            $table->foreignId('global_week_id')->constrained('global_weeks');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
