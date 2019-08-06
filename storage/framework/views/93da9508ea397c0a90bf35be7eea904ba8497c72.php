<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ultimate Quiz</title>
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
        <li class="nav-link" href="#">Home <span class="sr-only">(current)</span></li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('logout')); ?>"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            <?php echo e(__('Cerrar Sesion')); ?>

        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faqs">Preguntas Frecuentes</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">

      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Ranking</button>
    </form>
  </div>
</nav>
<div class="d-flex justify-content-center">
  <a class="nav-link" href="juego">Click aqui para jugar</a>

</div>

</head>
  <body>
<?php /**PATH /var/www/html/proyecto/resources/views/HomeUsuario.blade.php ENDPATH**/ ?>