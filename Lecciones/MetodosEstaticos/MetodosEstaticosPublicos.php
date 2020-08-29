<?php
class MetodosEstaticosPublicos {
  public static function welcome() {
    echo "</br>";	  
    echo "MetodosEstaticosPublicos!";
    echo "</br>";
  }
}

class SomeOtherClass {
  public function message() {
    MetodosEstaticosPublicos::welcome();
  }
}

?>