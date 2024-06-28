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
            $table->id();
            $table->unsignedInteger('section');
            $table->foreignId('company_id')->constrained('companies')->cascadeOnDelete();
            $table->foreignId('default_room_id')->constrained('rooms')->cascadeOnDelete();
            $table->unsignedInteger('nb_students')->default(22);
            $table->timestamps();
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
