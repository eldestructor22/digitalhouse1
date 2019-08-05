<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = "preguntas";
    public $timestamps = true;

    public function respuestas(){
      return $this->belongsToMany(Respuesta::class, 'preguntas_respuestas');
    }
}
