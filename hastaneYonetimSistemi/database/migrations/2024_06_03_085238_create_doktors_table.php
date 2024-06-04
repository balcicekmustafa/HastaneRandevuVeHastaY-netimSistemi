<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoktorsTable extends Migration
{
    public function up()
    {
        Schema::create('doktors', function (Blueprint $table) {
            $table->id();
            $table->string('tc_no')->unique();
            $table->string('ad_soyad');
            $table->string('uzmanlik');
            $table->string('email')->unique();
            $table->string('sifre');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doktors');
    }
}

