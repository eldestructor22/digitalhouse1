<?php

$usuario = [""];

$usuarioEnJson = json_encode($usuario);
file_put_contents('usuarios.json',$usuarioEnJson,FILE_APPEND | LOCK_EX);
TOMA TODOS LOS USUARIOS
$usuarios = file_get_contents('usuarios.json');
$usuariosEnArray = json_decode($usuarios,true);
$usuariosEnArray[] = [""];
$nuevoUsuario = json_encode($usuariosEnArray);
file_put_contents('usuarios.json',$nuevoUsuario,FILE_APPEND | LOCK_EX);
 ?>
