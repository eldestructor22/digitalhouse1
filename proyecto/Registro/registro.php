<?php
$errorEnNombre = "";
 $errorEnUser ="";
 $errorEnEmail = "";
 $errorEnFoto = "";
 $errorEnContrasenia = "";
 $hayErrores = false;
 if($_POST){
       $nombre = trim($_POST["nombre"]);
       $user = trim($_POST["usuario"]);
       $email = trim($_POST["email"]);
       $foto = $_FILES["foto"];
       $contrasenia = trim($_POST["contrasenia"]);
       $confirmarContrasenia = trim($_POST["confirmarContrasenia"]);
       if ($nombre == "") {
   $errorEnNombre = "Completa el nombre";
   $hayErrores = true;
 }
 if ($user == "") {
   $errorEnUser = "Llena tu usuario";
   $hayErrores = true;
}
 if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
   $errorEnEmail = "No es valido el email";
   $hayErrores = true;
 }
 if ($contrasenia ==""){
 $errorEnContrasenia = "Completa la contraseña, por favor";
 $hayErrores = true;
}else if ($contrasenia !=$confirmarContrasenia) {
$confirmarContrasenia = "No coinciden las contraseñas";
$hayErrores = true;
}
if(isset($_FILES["foto"])){
      if($_FILES["foto"]["error"] === UPLOAD_ERR_OK){
        $nombreFoto = $_FILES["foto"]["name"];
        $origen = $_FILES["foto"]["tmp_name"];
        $ext = pathinfo($nombreFoto,PATHINFO_EXTENSION);
        $destino = "";
                $destino = $destino."fotos";
                $destino = $destino.$nombre."fotodeperfil.".$ext;
                move_uploaded_file($origen,$destino);
                $errorEnFoto = "archivo subido con exito";
 }
 }else{
        $errorEnFoto = "error con la foto";
        $hayErrores = true;
    }
 if(!$hayErrores){
     $arrayUsuario = [
     "nombre"=> $nombre,
     "email"=> $email,
     "foto" => $nombre."fotodeperfil.".$ext,
    "contraseña" => password_hash($contrasenia, PASSWORD_DEFAULT)];
    $usuarioEnJson = json_encode($usuarioEnArray);
    file_put_contents('usuarios.json',$usuarioEnJson);
    header('Location: login.php');
}
}
?>
<!DOCTYPE html>
<html lang="es">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="css/registro.css">
     <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
   <title>Registro</title>
 </head>
 <body>
   <div class="container">
     <div class="row col-12 d-flex">
       <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #C60036;"
         <a class="navbar-brand" href="#">Navbar</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
               <a class="nav-link" href="../home/home.php">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="../login/login.php">Login</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="../FAQs/FAQs.php">FAQs</a>
             </li>
           </ul>
           <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
             <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
           </form>
         </div>
       </nav>
       </div>
   <div class="container">
     <h1>Registro</h1><br>
     <form class="" action="" method="post">
       <div class="row">
         <div class="col">
           Ingrese su nombre<input type="text" class="form-control" name="nombre" placeholder="Nombre">
         </div>
         <div class="col">
           Ingrese su nombre de usuario<input type="text" class="form-control" name="usuario" placeholder="Cree su nombre de usuario">
         </div>
     <form>
</div>
<form class="" action="homeusuario.php" method="post">
 <br><br>
   <div class="form-group row">
     <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
     <div class="col-sm-10">
       <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
     <div class="col-sm-10">
       <input type="password" class="form-control" id="inputPassword3" name="contraseña" placeholder="Contraseña">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword3" class="col-sm-2 col-form-label">Confirmar Contraseña</label>
     <div class="col-sm-10">
       <input type="password" class="form-control" id="inputPassword3" name="contraseña" placeholder="Confirmar Contraseña">
     </div>
   </div>
   <fieldset class="form-group">
     <div class="row">
       <legend class="col-form-label col-sm-2 pt-0">Género</legend>
       <div class="col-sm-10">
         <div class="form-check">
           <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
           <label class="form-check-label" for="gridRadios1">
             Hombre
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
           <label class="form-check-label" for="gridRadios2">
             Mujer
           </label>
         </div>
         <div class="form-check disabled">
           <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
           <label class="form-check-label" for="gridRadios3">
             Otro
           </label>
         </div>
         <div class="foto">
         Seleccione su foto de perfil  <input type="file" name="foto" value="">
         </div>
       </div>
     </div>
   </fieldset>
   <div class="form-group row">
     <div class="col-sm-2"></div>
     <div class="col-sm-10">
     </div>
   </div>
   <div class="form-group row">
     <div class="col-sm-10">
       <button type="submit" class="btn btn-danger">Registrarse</button>
     </div>
   </div>
 </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
   </html>
