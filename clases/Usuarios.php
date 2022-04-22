<?php
class Usuarios{

  private String $nombre;
  private String $apellido;
  private String $correo;
  private int $saldo;
  private String $clave;
  private String $fecha_nacimiento;

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
    $stmt = $conexion->prepare('INSERT INTO usuarios ( nombre, apellido, usuario, correo, saldo, clave, fecha_nacimiento ) 
    VALUES (?, ?, ?, ?, ?, ?, ?) ');
    $stmt->bind_param('sssiss', $nombre, $apellido, $usuario, $correo, $saldo, $clave, $fecha_nacimiento);
    $stmt->execute();
    $stmt->close();
  }

}
?>