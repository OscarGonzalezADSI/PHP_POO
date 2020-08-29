<?php
class ClaseHerencia {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  protected function intro() {
    echo "ClaseHerencia"."</br>";	  
	include "Vista/Componentes/ClaseHerencia.php";
  }
}

class Heredero extends ClaseHerencia {
  public function message() {
    echo "Am I a fruit or a berry? "."</br></br>";
    // Call protected method from within derived class - OK
    $this -> intro();
  }
}
?>