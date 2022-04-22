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
}
?>
