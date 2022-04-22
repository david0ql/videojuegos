<?php
class Usuarios{

  private String $nombre;
  private String $apellido;
  private String $correo;
  private int $saldo;
  private String $clave;
  private String $fecha_nacimiento;

  public function __construct($nombre, $apellido, $correo, $saldo, $clave, $fecha_nacimiento) {
    $this->nombre = $correo;
    $this->apellido = $apellido;
    $this->correo = $correo;
    $this->saldo = $saldo;
    $this->clave = $clave;
    $this->fecha_nacimiento = $fecha_nacimiento;
  }

  public function createUser($args = [])
  {
    echo $args;
  }

}
?>