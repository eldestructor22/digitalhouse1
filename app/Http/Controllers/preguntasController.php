<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\preguntas;
use \App\Respuestas;
use \App\Preguntas_respuestas;

class preguntasController extends Controller
{
  public function index(){
    return view('preguntas');

}
public function crear(Request $request){
    $pregunta = new preguntas;
    $pregunta->enunciado = $request->enunciado;
    $pregunta->tema_id= $request->tema;
    $pregunta->save();
    $respuesta1 = new Respuestas;
    $respuesta1->enunciado = $request->respuesta1;
    $respuesta1->save();
    $respuesta2 = new Respuestas;
    $respuesta2->enunciado = $request->respuesta2;
    $respuesta2->save();
    $respuesta3 = new Respuestas;
    $respuesta3->enunciado = $request->respuesta3;
    $respuesta3->save();
    $respuesta4 = new Respuestas;
    $respuesta4->enunciado = $request->respuesta4;
    $respuesta4->save();

    $pregunta_respuesta = new Preguntas_respuestas;
    $pregunta_respuesta->pregunta_id = $pregunta->id;
    $pregunta_respuesta->respuesta_id = $respuesta1->id;
    $pregunta_respuesta->correcto = 1;
    $pregunta_respuesta->save();
    $pregunta_respuesta = new Preguntas_respuestas;
    $pregunta_respuesta->pregunta_id = $pregunta->id;
    $pregunta_respuesta->respuesta_id = $respuesta2->id;
    $pregunta_respuesta->correcto = 0;
    $pregunta_respuesta->save();
    $pregunta_respuesta = new Preguntas_respuestas;
    $pregunta_respuesta->pregunta_id = $pregunta->id;
    $pregunta_respuesta->respuesta_id = $respuesta3->id;
    $pregunta_respuesta->correcto = 0;
    $pregunta_respuesta->save();
    $pregunta_respuesta = new Preguntas_respuestas;
    $pregunta_respuesta->pregunta_id = $pregunta->id;
    $pregunta_respuesta->respuesta_id = $respuesta4->id;
    $pregunta_respuesta->correcto = 0;
    $pregunta_respuesta->save();

  } 
}
