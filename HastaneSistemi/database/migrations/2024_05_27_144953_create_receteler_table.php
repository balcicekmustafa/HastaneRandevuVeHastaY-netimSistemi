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

        Schema::create('receteler', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hasta_id')->constrained('hastalar');
            $table->foreignId('doktor_id')->constrained('doktorlar');
            $table->text('recete');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receteler');
    }
};
