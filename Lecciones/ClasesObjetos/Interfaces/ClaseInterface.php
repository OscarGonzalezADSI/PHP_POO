<?php
interface ClaseInterface {
  public function makeSound();
}

class HijaClaseInterface implements ClaseInterface {
  public function makeSound() {
    include "Vista/Componentes/ClaseInterface.php";
  }
}
?>