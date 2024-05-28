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
        if (!Schema::hasTable('raporlar')) {
            \Log::info('Table randevular already exists');
        }

        else{
        Schema::create('raporlar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hasta_id')->constrained('hastalar');
            $table->foreignId('doktor_id')->constrained('doktorlar');
            $table->text('rapor');
            $table->timestamps();

        });}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raporlar');
    }
};
