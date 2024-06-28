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
        Schema::create('global_weeks', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('global_week_number');
            $table->foreignId('schoolyear_id')->constrained('schoolyears')->onDelete('CASCADE');
            $table->timestamps();
            $table->date('start_week_date');
            $table->date('end_week_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('global_weeks');
    }
};
