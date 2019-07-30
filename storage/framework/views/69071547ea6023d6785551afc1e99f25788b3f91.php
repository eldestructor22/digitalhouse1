<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>El destructor</title>
    <link rel="stylesheet" href="css/estilos.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">E.D</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cerrar sesion</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contenido
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Historia</a>
          <a class="dropdown-item" href="#">Personajes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Detrás de "El Destructor"</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Preguntas Frecuentes</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">

      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Tu usuario</button>

      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Puntuacion</button>
    </form>
  </div>
</nav>
<div class="d-flex justify-content-center">
  <h1><?php echo "Bienvenido[]";  ?></h1>
</div>
<div class="d-flex justify-content-center">
  <button type="button" class="btn btn-danger" href="preguntas">Jugar</button>

</div>

</head>
  <body>
<?php /**PATH /media/sf_Compartido/ultimate_quizz/resources/views/homeUsuario.blade.php ENDPATH**/ ?>