<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('absences', function (Blueprint $table)
        {
            $table->id();
            $table->string('absenceable_type');
            $table->unsignedBigInteger('absenceable_id');
            $table->string('reason')->default('no reason');
            $table->boolean('caughtup')->default(false);
            $table->timestamps();
            
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absences');
    }
};
