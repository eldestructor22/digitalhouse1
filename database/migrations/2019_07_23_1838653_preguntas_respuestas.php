<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PreguntasRespuestas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas_respuestas', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('pregunta_id');
      $table->foreign('pregunta_id')->references('id')->on('preguntas');
      $table->unsignedBigInteger('respuesta_id');
      $table->foreign('respuesta_id')->references('id')->on('respuestas');
      $table->tinyInteger('correcto');
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
      Schema::dropIfExists('preguntas_respuestas');

    }
}
