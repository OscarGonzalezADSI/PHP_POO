<?php
abstract class ClaseAbstractaCondicional {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class HijaCondicional extends ClaseAbstractaCondicional {
  public function prefixName($name) {
    if ($name == "John Doe") {
      $prefix = "Mr.";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}
?>