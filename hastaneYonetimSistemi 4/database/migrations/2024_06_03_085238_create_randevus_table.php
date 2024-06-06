<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRandevusTable extends Migration
{
public function up()
{
Schema::create('randevus', function (Blueprint $table) {
$table->id();
$table->foreignId('hasta_id')->constrained('hastas')->onDelete('cascade');
$table->foreignId('doktor_id')->constrained('doktors')->onDelete('cascade');
$table->dateTime('randevu_tarihi');
$table->timestamps();
});
}

public function down()
{
Schema::dropIfExists('randevus');
}
}
