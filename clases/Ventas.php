<?php

class Ventas{

  private int $id_usuario;
  private int $id_skin;
  private String $fecha_compra;

  public function __construct($id_usuario, $id_skin, $fecha_compra) {
    $this->id_usuario = $id_usuario;
    $this->id_skin = $id_skin;
    $this->fecha_compra = $fecha_compra;
  }

}

?>