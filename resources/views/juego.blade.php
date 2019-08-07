<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ultimate Quiz</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js">
    </script>
  </head>
  <body>
    <div class="container">
      <form class="" action="/juego/test" method="post">
        @csrf

      <div class="pregunta1">
        @foreach($preguntas as $pregunta)
          <li>{{$pregunta->enunciado}}</li>
          @foreach ($pregunta->respuestas as $respuestita)
            <input type="radio" name="respuesta[{{$pregunta->id}}]" value="{{$respuestita->id}}">{{$respuestita->enunciado}}
          @endforeach
        @endforeach
      </div>
      <button type="submit" name="button">Responder</button>
            </form>
      {{-- <div class="pregunta2">
        {{-- <script>
          $( ".pregunta2" ).hide(function(){

          });
        </script>
        <h2>{{$pregunta->enunciado}}</h2>
        <ul>
          @foreach ($respuesta as $respuestita)
            <li>{{$respuestita->enunciado}}</li>
          @endforeach
        </ul>
        <button type="button" name="button">Responder</button>
      </div>
      <div class="pregunta3">
        <script>
        $( ".pregunta3" ).hide(function(){

        });
        </script>
        <h2 name="enunciado">pregunta3</h2>
        <ul>
          <li>respuesta1</li>
          <li>respuesta2</li>
          <li>respuesta3</li>
          <li>respuesta4</li>
        </ul>
        <button type="button" name="button">Responder</button>
      </div>
      <div class="pregunta4">
        <script>
        $( ".pregunta4" ).hide(function(){

        });
        </script>
        <h2 name="enunciado">pregunta4</h2>
        <ul>
          <li>respuesta1</li>
          <li>respuesta2</li>
          <li>respuesta3</li>
          <li>respuesta4</li>
        </ul>
        <button type="button" name="button">Responder</button>
      </div>
      <div class="pregunta5">
        <script>
        $( ".pregunta5" ).hide(function(){

        });
        </script>
        <h2 name="enunciado">pregunta5</h2>
        <ul>
          <li>respuesta1</li>
          <li>respuesta2</li>
          <li>respuesta3</li>
          <li>respuesta4</li>
        </ul>
        <button type="button" name="button">Responder</button>
      </div> --}}
    </div>
  </body>
</html>
