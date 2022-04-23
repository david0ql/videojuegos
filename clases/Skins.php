<?php

class Skins{

  public String $nombre;
  public String $ruta;
  public int $precio;

  public function __construct($nombre, $ruta, $precio) {
    $this->nombre = $nombre;
    $this->ruta = $ruta;
    $this->precio = $precio;
  }

  public function createSkin( Conexion $conexion, Skins $skin )
  {
    $conexion->insertSkin(array($skin->nombre, $skin->ruta, $skin->precio));
  }

}
?>