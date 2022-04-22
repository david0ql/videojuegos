<?php
include('conexion/conexion.php');
include('clases/Usuarios.php');
$conexion = new Conexion();
$usuario = new Usuarios("David", "Gomez", "0qldude", "josedavid@gbs.com.co", 10000, "06f60ff6f", "2001-05-07");
$newUser = $usuario->createUser($conexion, $usuario);

?>