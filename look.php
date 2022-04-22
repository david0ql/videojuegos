<?php
include('conexion/conexion.php');
include('clases/Usuarios.php');
$usuario = new Usuarios("David", "Gomez", "josedavid@gbs.com.co", 10000, "06f60ff6f", "2001-05-07");
var_dump($usuario);
?>