<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
use App\Respuesta;

class juegoController extends Controller
{

   public function show(){
     // $pregunta = Pregunta::where('tema_id',$id)->first();
     $preguntas = Pregunta::all();
     // $pregunta = pregunta::find($tema_id);
      return view('juego',['preguntas'=>$preguntas]);

  }
}
