<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaporsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raporlar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasta_id');
            $table->unsignedBigInteger('doktor_id');
            $table->text('rapor');
            $table->timestamp('olusturulma_tarihi')->useCurrent();
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
        Schema::dropIfExists('raporlar');
    }
}
