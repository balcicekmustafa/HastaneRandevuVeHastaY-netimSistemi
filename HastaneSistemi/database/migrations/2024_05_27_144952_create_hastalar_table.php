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
        Schema::create('hastalar', function (Blueprint $table) {
            $table->id();  // Otomatik olarak 'id' sütunu oluşturur
            $table->string('ad');
            $table->string('soyad');
            $table->string('kullanici_adi')->unique();
            $table->string('sifre');
            $table->date('dogum_tarihi')->nullable();
            $table->string('cinsiyet')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hastalar');
    }
};
