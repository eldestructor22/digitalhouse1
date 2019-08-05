<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preguntas extends Model
{
    protected $table = "preguntas";
    public $timestamps = true;
    public function respuestas(){
      return $this->belongsToMany(Respuestas::class, 'preguntas_respuestas');
    }
}
