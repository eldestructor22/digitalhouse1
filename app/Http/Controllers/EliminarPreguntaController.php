<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eliminar;
use App\Pregunta;

class EliminarPreguntaController extends Controller
{
  public function destroy($id){
    $pregunta = Pregunta::find($id);
    $pregunta->delete();
    return redirect("crearPregunta");

  }
}
