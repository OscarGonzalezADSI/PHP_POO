<?php
class ClaseHerenciaNoAnulacion {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  // Metodo original
  final function intro() {
	echo "ClaseHerenciaNoAnulacion"."</br>";
	include "Vista/Componentes/ClaseHerenciaNoAnulacion.php";
  }
}

class HerederoFiel extends ClaseHerenciaNoAnulacion {
  public $weight;
  public function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
}
?>