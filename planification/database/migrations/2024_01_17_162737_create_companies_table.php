<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->integer('company');

            //batallion id
            $table->unsignedBigInteger('battalion_id');
            //filiere id
            $table->string('sector');
            //default amphitetre
            $table->unsignedBigInteger('default_room_id');            

            // foreign keys
            $table->foreign('battalion_id')->references('id')->on('battalions')->onDelete('CASCADE');
            $table->foreign('default_room_id')->references('id')->on('rooms');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
