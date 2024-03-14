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
        Schema::create('additionables', function (Blueprint $table) {
            $table->foreignId('additional_id')->constrained('additionals','id')->onDelete('CASCADE');
            $table->string('additionable_type');//  App\Models\Company or App\Models\Section.
            $table->unsignedBigInteger('additionable_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additionables');
    }
};
