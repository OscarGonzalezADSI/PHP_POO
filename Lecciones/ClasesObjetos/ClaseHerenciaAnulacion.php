<?php
class ClaseHerenciaAnulacion {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  // Metodo original
  public function intro() {
	echo "ClaseHerenciaAnulacion"."</br>";
	include "Vista/Componentes/ClaseHerenciaAnulacion.php";
  }
}

class HerederoAnulacion extends ClaseHerenciaAnulacion {
  public $weight;
  public function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
  // Redefinicion del metodo
  public function intro() {
    echo "HerederoAnulacion"."</br>";;	  
	include "Vista/Componentes/ClaseHerenciaAnulacionHeredero.php";
  }
}
?>