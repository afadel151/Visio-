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
        Schema::create('rooms', function (Blueprint $table) {
            //nom 
            $table->increments('room_id');
            $table->string('room'); //A3 A14
            //type
            // $table->unsignedInteger('room_type_id');
            // $table->foreign('room_type_id')->references('room_type_id')->on('room_types');
            $table->string('room_type');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
