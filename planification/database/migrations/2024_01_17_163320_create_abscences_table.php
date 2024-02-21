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
            $table->increments('absence_id');
            //session (teacher,Module,section,company,day,timing,sessionType)
            
            $table->unsignedInteger('session_id');
            $table->foreign('session_id')->references('session_id')->on('sessions');
            
            $table->boolean('rectified');
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
