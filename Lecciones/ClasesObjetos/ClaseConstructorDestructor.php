<?php
class ConstructorDestructor {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
  /* todos los objetos deben estar dentro del
   * mismo paquete principal, se aplicará todo
   * el codigo insertado aqui automaticamente
   * donde haya sido creado el objeto, pero
   * todos los contenidos insertados deben
   * estar por dentro de este mismo paquete.
   */
  include "Vista/Componentes/ClaseConstructorDestructor.php";
  }
}
?>