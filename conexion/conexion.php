<?php
include_once ('../clases/Usuarios.php');
include_once ('../clases/Usuarios.php');
include_once ('../clases/UserLogin.php');
include_once ('../clases/Ventas.php');
include_once ('../clases/Skins.php');
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

  public function insertUser( $args = [] ) 
  { 
    $stmt = $this->conexion->prepare('INSERT INTO usuarios ( nombre, apellido, usuario, correo, clave, fecha_nacimiento ) 
    VALUES (?, ?, ?, ?, ?, ?) ');
    $stmt->bind_param( 'ssssss' , $args[0], $args[1], $args[2], $args[3], $args[4], $args[5] );
    $stmt->execute();
    $result = $stmt->get_result();
    
    echo json_encode(true);
  }

  public function insertSkin( $args = [] )
  {
    $stmt = $this->conexion->prepare('INSERT INTO skins ( nombre, ruta, precio ) VALUES ( ?, ?, ? ) ');
    $stmt->bind_param( 'ssi' , $args[0], $args[1], $args[2] );
    $stmt->execute();
  }

  public function insertSale( $args = [] )
  {
    $stmt = $this->conexion->prepare('INSERT INTO ventas ( id_usuario, id_skin ) VALUES ( ?, ? ) ');
    $stmt->bind_param( 'ii' , $args[0], $args[1] );
    $stmt->execute();
  }

  public function checkLogin( $args = [] )
  {
    $stmt = $this->conexion->prepare('SELECT * from usuarios WHERE usuario = ? ');
    $stmt->bind_param( 's' , $args[0] );
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows == 1){
      $user = $result->fetch_assoc();
      (password_verify($args[1], $user["clave"])) ? $return = Usuarios::userInfo($user) : $return = false ;
      echo json_encode($return);
    }else{
      echo json_encode('not exist');
    }
    
  }
}
?>
