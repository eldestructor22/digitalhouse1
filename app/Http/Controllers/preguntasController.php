<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class preguntasController extends Controller
{
  public function index(){
    return view('preguntas');

}
}