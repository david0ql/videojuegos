<?php

class Ventas{

  private int $id_usuario;
  private int $id_skin;

  public function __construct($id_usuario, $id_skin) {
    $this->id_usuario = $id_usuario;
    $this->id_skin = $id_skin;
  }

  public function createSale(Conexion $conexion, Ventas $venta)
  {
    $conexion->insertSale(array($venta->id_usuario, $venta->id_skin));
  }

}

?>