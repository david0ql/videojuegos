<?php

/*

Param -> nombre :  String
Param -> apellido :  String
Param -> usuario :  String
Param -> correo :  String
Param -> saldo :  int
Param -> clave :  String
Param -> fecha_nacimiento :  String

*/

//Incluir las cabeceras
include('../conexion/conexion.php');
include('../clases/Usuarios.php');

//Incluir CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Allow: POST");

//Verificar que sean los métodos solicitados
if(verifyMethod($_SERVER['REQUEST_METHOD']))
{
  $conexion = new Conexion();
  $usuario = new Usuarios( $_GET['nombre'], $_GET['apellido'], $_GET['usuario'],
   $_GET['correo'], $_GET['saldo'], $_GET['clave'], $_GET['fecha_nacimiento']);
  $usuario->createUser($conexion, $usuario);
}

function verifyMethod($method)
{
  return ($method == "POST") ? true : false;
}

?>