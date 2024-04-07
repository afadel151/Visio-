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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('week_id')->constrained('weeks')->onDelete('CASCADE');
            $table->foreignId('module_id')->constrained('modules')->onDelete('CASCADE');
            $table->char('sector',2);
            // $table->foreignId('room_id')->constrained('rooms')->onDelete('cascade');
            // $table->time('start_exam');
            // $table->time('end_exam');
            $table->char('exam_time',2);//AM - PM
            $table->date('exam_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
