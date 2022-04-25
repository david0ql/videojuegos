<?php

/*

Param -> usuario :  String
Param -> clave :  String

*/

//Incluir las cabeceras
include('../conexion/conexion.php');
include('../clases/UserLogin.php');

//Incluir CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Allow: POST");

//Verificar que sean los métodos solicitados
if(verifyMethod($_SERVER['REQUEST_METHOD']))
{
  $conexion = new Conexion();
  $usuario = new UserLogin( $_POST['usuario'], $_POST['clave']);
  $usuario->verifyIfExistUser($conexion, $usuario);
}

function verifyMethod($method)
{
  return ($method == "POST") ? true : false;
}

?>