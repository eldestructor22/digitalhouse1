<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PartidaPregunta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partida_pregunta', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('partida_id');
      $table->foreign('partida_id')->references('id')->on('partidas');
      $table->unsignedBigInteger('pregunta_id');
      $table->foreign('pregunta_id')->references('id')->on('preguntas');
      $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('partida_pregunta');

    }
}
