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
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('section_id');
            $table->unsignedInteger('section');
            //company
            $table->unsignedInteger('company_id');
            $table->foreign('company_id')->references('company_id')->on('companies');
            //default room
            $table->unsignedInteger('default_room_id');
            $table->foreign('default_room_id')->references('room_id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
