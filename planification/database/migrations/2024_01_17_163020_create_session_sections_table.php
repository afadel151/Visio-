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
        Schema::create('session_sections', function (Blueprint $table) {
            $table->foreignId('session_id')->constrained('sessions','id')->onDelete('CASCADE');
            $table->foreignId('section_id')->constrained('sections','id')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_sections');
    }
};
