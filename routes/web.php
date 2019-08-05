<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('sitio');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
//
// Route::get('/home', 'SitioController@index')->name('sitio');

Route::get('/faqs', "FaqsController@ayuda");

Route::get('/homeUsuario', "HomeUsuarioController@index");

Route::get('/preguntas', "preguntasController@index");

Route::get('/crearPregunta', function(){
  return view('crearPregunta');
});
Route::post('/crearPregunta','preguntasController@crear');
Route::get('/juego','juegoController@show');
