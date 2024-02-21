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
        Schema::create('weeks', function (Blueprint $table) {
            $table->increments('week_id');
            $table->unsignedInteger('battalion_id');
            
            $table->foreign('battalion_id')->references('battalion_id')->on('battalions');
            $table->date('start_week_date');
            $table->date('end_week_date');
            
            $table->char('semester',1);
            $table->string('week_type');
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weeks');
    }
};


