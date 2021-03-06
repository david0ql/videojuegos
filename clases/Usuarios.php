<?php
class Usuarios{

  public String $nombre;
  public String $apellido;
  public String $correo;
  public String $usuario;
  public ?String $clave;
  public String $fecha_nacimiento;

  public function __construct( $nombre, $apellido, $usuario, $correo, ?String $clave, $fecha_nacimiento ) {
    
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->usuario = $usuario;
    $this->correo = $correo;
    $this->clave = $clave;
    $this->fecha_nacimiento = $fecha_nacimiento;
  }

  public function createUser( Conexion $conexion, Usuarios $usuario )
  {
    $conexion->insertUser(array($usuario->nombre, $usuario->apellido, $usuario->usuario, $usuario->correo, $usuario->clave, $usuario->fecha_nacimiento));
  }

  public static function userInfo($args = [])
  {
        return new Usuarios( $args["nombre"], $args["apellido"], $args["usuario"], $args["correo"], null, $args["fecha_nacimiento"] );
  }

}
?>