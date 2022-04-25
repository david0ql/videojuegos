<?php

/*

Param -> nombre : String
Param -> ruta : String
Param -> precio : int

*/

//Incluir las cabeceras
include('../conexion/conexion.php');
include('../clases/Skins.php');

//Incluir CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Allow: POST");

//Verificar que sean los métodos solicitados
if(verifyMethod($_SERVER['REQUEST_METHOD']))
{
  $conexion = new Conexion();
  $skin = new Skins( $_POST['nombre'], $_POST['ruta'], $_POST['precio'] );
  $skin->createSkin($conexion, $skin);
}

function verifyMethod($method)
{
  return ($method == "POST") ? true : false;
}

?>