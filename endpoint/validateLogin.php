<?php

/*

Param -> usuario :  String
Param -> clave :  String

*/

//Incluir las cabeceras
include('../conexion/conexion.php');

//Incluir CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Allow: POST");

//Verificar que sean los métodos solicitados
if(verifyMethod($_SERVER['REQUEST_METHOD']))
{
  if(!empty($_POST['usuario']) && !empty($_POST['clave'])){
    $conexion = new Conexion();
    $usuario = new UserLogin( $_POST['usuario'], $_POST['clave']);
    $usuario->verifyIfExistUser($conexion, $usuario);
  }else{
    echo json_encode("true");
  }
  
}

function verifyMethod($method)
{
  return ($method == "POST") ? true : false;
}

?>