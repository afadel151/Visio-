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
            //session (teacher,Module,section,company,day,timing,sessionType)
            $table->foreignId('session_id')->constrained('sessions','id')->onDelete('CASCADE');
            $table->string('absenceable_type');
            $table->unsignedBigInteger('absenceable_id');
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
