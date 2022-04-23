<?php
class UserLogin{

  public String $usuario;
  public String $clave;

  public function __construct( $usuario, $clave ) {

    $this->usuario = $usuario;
    $this->clave = $clave;
  }

  public function verifyIfExistUser(Conexion $conexion, UserLogin $usuario)
  {
    $conexion->checkLogin(array($usuario->usuario, $usuario->clave));
  }

}
?>