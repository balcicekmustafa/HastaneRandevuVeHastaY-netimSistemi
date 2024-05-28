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
        if (Schema::hasTable('randevular')) {
            \Log::info('Table randevular already exists');
        } else {
            Schema::create('randevular', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('hasta_id')->unsigned();
                $table->bigInteger('doktor_id')->unsigned();
                $table->dateTime('randevu_tarihi');
                $table->string('durum')->default('beklemede');
                $table->timestamps();
            });
    }}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('randevular');
    }
};
