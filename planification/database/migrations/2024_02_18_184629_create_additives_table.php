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
        Schema::create('additives', function (Blueprint $table) {
            $table->increments('additive_id');
            // $table->unsignedInteger('day_id');
            // $table->foreign('day_id')->references('day_id')->on('days');
            $table->date('additive_date');
            $table->unsignedInteger('timing_id');
            $table->foreign('timing_id')->references('timing_id')->on('timings');
            //module (...,,EPS)
            $table->unsignedInteger('module_id');
            $table->foreign('module_id')->references('module_id')->on('modules');
            //prof
            $table->unsignedInteger('room_id');
            $table->foreign('room_id')->references('room_id')->on('rooms');
            
            $table->unsignedInteger('teacher_id');
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');
            //section Nullable
            $table->unsignedInteger('week_id');
            $table->foreign('week_id')->references('week_id')->on('weeks');
            
            // $table->unsignedInteger('section_id');
            // $table->foreign('section_id')->references('section_id')->on('sections');
            // //company Nullable
            // $table->unsignedInteger('company_id');
            // $table->foreign('company_id')->references('company_id')->on('companies');
            //type (TD,TP,Cour,Sport,Bibliotheque,A la disposition)
            $table->string('session_type');
            // $table->foregn('session_type_id')->references('session_type_id')->on('session_types');
            //salle
           //additive type
            $table->string('additive_type');

            $table->boolean('absented');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additives');
    }
};
