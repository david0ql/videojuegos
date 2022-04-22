<?php

class Skins{

  private String $nombre;
  private String $ruta;
  private String $fecha_creacion;

  public function __construct($nombre, $ruta, $fecha_creacion) {
    $this->nombre = $nombre;
    $this->ruta = $ruta;
    $this->fecha_creacion = $fecha_creacion;
  }

}
?>