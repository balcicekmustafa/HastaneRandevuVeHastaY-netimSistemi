<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetesTable extends Migration
{
public function up()
{
Schema::create('recetes', function (Blueprint $table) {
$table->id();
$table->foreignId('hasta_id')->constrained('hastas')->onDelete('cascade');
$table->foreignId('doktor_id')->constrained('doktors')->onDelete('cascade');
$table->text('icerik');
$table->timestamps();
});
}

public function down()
{
Schema::dropIfExists('recetes');
}
}
