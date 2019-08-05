<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Preguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('preguntas', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('enunciado', 200);
      $table->unsignedBigInteger('tema_id');
      $table->foreign('tema_id')->references('id')->on('temas');
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
        Schema::dropIfExists('preguntas');
    }
}
