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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('module');
            $table->foreignId('department_id')->constrained('departments')->onDelete('CASCADE');
            $table->timestamps();
        });
        Schema::create('teachers_modules', function (Blueprint $table) {
            $table->timestamps();
            $table->foreignId('teacher_id')->constrained('teachers')->onDelete('CASCADE');
            $table->foreignId('module_id')->constrained('modules')->onDelete('CASCADE');
            $table->foreignId('schoolyear_id')->constrained('schoolyears');
            $table->boolean('cours');
            $table->boolean('td');
            $table->boolean('tp');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
        Schema::dropIfExists('teachers_modules');

    }
};
