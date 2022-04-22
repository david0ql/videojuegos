<?php
class Conexion{

  public $conexion = null;
  private $username = "root";
  private $password = "";
  private $dbname = "videojuegos";
  private $servername = "localhost";

  public function __construct() {
    $this->conexion = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    $this->conexion->set_charset('utf8');
    date_default_timezone_set("America/Bogota");
  }

  public function getConnection()
  {
    return $this->conexion;
  }

  public function insertUser($args = [])
  {
    $stmt = $this->conexion->prepare('INSERT INTO usuarios ( nombre, apellido, usuario, correo, saldo, clave, fecha_nacimiento ) 
    VALUES (?, ?, ?, ?, ?, ?, ?) ');
    $stmt->bind_param( 'ssssiss' , $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $args[6] );
    $stmt->execute();
  }
}
?>
