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
        Schema::create('exam_rooms_groups', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('week_id')->constrained('weeks')->onDelete('cascade');
            $table->char('sector',2);
            $table->string('group');
            $table->foreignId('room_id')->constrained('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_rooms_groups');
    }
};
