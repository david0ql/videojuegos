<?php
class Usuarios{

  public String $nombre;
  public String $apellido;
  public String $correo;
  public int $saldo;
  public String $clave;
  public String $fecha_nacimiento;

  public function __construct( $nombre, $apellido, $usuario, $correo, $saldo, $clave, $fecha_nacimiento ) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->usuario = $usuario;
    $this->correo = $correo;
    $this->saldo = $saldo;
    $this->clave = $clave;
    $this->fecha_nacimiento = $fecha_nacimiento;
  }

  public function createUser( Conexion $conexion, Usuarios $usuario )
  {
    $conexion->insertUser(array($usuario->nombre, $usuario->apellido, $usuario->usuario, $usuario->correo, $usuario->saldo, $usuario->clave, $usuario->fecha_nacimiento));
  }

}
?>