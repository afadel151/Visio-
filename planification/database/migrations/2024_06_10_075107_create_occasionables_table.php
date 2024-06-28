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
        Schema::create('occasionables', function (Blueprint $table) {
            $table->foreignId('occasion_id')->constrained('occasions')->onDelete('CASCADE');
            $table->string('occasionable_type');//  App\Models\Company - App\Models\Section - App\Models\Battalion
            $table->unsignedBigInteger('occasionable_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('occasionables');
    }
};
