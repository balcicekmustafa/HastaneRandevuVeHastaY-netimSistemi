<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRandevusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('randevular', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasta_id');
            $table->unsignedBigInteger('doktor_id');
            $table->dateTime('randevu_tarihi');
            $table->enum('durum', ['beklemede', 'onaylandı', 'iptal'])->default('beklemede');
            $table->timestamps();

            $table->foreign('hasta_id')->references('id')->on('hastalar')->onDelete('cascade');
            $table->foreign('doktor_id')->references('id')->on('doktorlar')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('randevular');
    }
}
