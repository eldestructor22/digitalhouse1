<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use \App\preguntas;
// use \App\Respuestas;

class juegoController extends Controller
{
  public function index(){
    return view('juego');

}
   public function show($tema_id){
     $pregunta = pregunta::find($tema_id);
     return view('juego',['tema_id'=>$pregunta]);
  }
}
