<?php

/*

Param -> id_usuario : int
Param -> id_skin : int

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
  $conexion = new Conexion();
  $skin = new Ventas( $_POST['id_usuario'], $_POST['id_skin'] );
  $skin->createSale($conexion, $skin);
}

function verifyMethod($method)
{
  return ($method == "POST") ? true : false;
}

?>