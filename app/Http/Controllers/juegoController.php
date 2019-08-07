<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
use App\Preguntas_respuestas;
use App\Respuesta;
use Auth;

class juegoController extends Controller
{

   public function show(){
     // $pregunta = Pregunta::where('tema_id',$id)->first();
     $preguntas = Pregunta::all();
     // $pregunta = pregunta::find($tema_id);
      return view('juego',['preguntas'=>$preguntas]);

  }
  public function game(Request $request){
    // $usuario = Auth::user()->id;
    // $puntaje = $request->all();
    $correctas = 0;
    $incorrectas = 0;
    foreach ($request->respuesta as $pregunta_id => $respuesta_id) {
      $pregunta = Preguntas_respuestas::where('pregunta_id', $pregunta_id)
      ->where('correcto', 1)->first();
      if ($pregunta->respuesta_id == $respuesta_id) {
        $correctas++;
      } else {
        $incorrectas++;
      }

    }

    // dd($correctas, $incorrectas);

    return view('juegoTerminado', compact('correctas', 'incorrectas'));


  }
}
