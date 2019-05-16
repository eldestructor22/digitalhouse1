<?php
session_start();

if(isset($_SESSION['usuarioLogueado'])){
  echo "Ya estas logueado ".$_SESSION['usuarioLogueado'];
  echo "<a href='logout.php'>Cerrar sesion</a>";

}
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>El destructor</title>
    <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
<a class="navbar-brand" href="#">U.Q</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
 <ul class="navbar-nav mr-auto">
   <li class="nav-item active">
     <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="#"></a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="../FAQs/FAQs.php">FAQs</a>
   </li>

 </ul>
    <form class="form-inline my-2 my-lg-0">

      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Tu usuario</button>

      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Puntuacion</button>
    </form>
  </div>
</nav>
<div class="d-flex justify-content-center">
  <h1><?php echo "Bienvenido";  ?></h1>

</div>
  </head>
  <body>
