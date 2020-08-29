<?php
// Interface definition
interface ClaseInterfacePersonajes {
  public function makeSound();
}

// Class definitions
class Cat implements ClaseInterfacePersonajes {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements ClaseInterfacePersonajes {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements ClaseInterfacePersonajes {
  public function makeSound() {
    echo " Squeak ";
  }
}
?>