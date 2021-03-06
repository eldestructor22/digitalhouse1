<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
  protected $table = "respuestas";
  public $timestamps = true;

  public function pregunta(){
      return $this->belongsToMany(Pregunta::class, 'preguntas_respuestas', 'respuesta_id', 'pregunta_id')
      ->withPivot('correcto');
  }

}
