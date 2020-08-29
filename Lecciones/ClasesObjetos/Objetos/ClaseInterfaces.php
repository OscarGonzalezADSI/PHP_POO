<?php

abstract class ClaseAbstracta {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string; 
}

// Child classes
class Audi extends ClaseAbstracta {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!"; 
  }
}

class Volvo extends ClaseAbstracta {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!"; 
  }
}

class Citroen extends ClaseAbstracta {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!"; 
  }
}
?>