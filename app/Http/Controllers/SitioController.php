<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
  public function index()
  {
      return view('sitio');
  }
}
