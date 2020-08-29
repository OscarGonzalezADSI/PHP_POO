<?php
abstract class ClaseAbstractaParametrosAdd {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ClaseParametrosAdd extends ClaseAbstractaParametrosAdd {
  // The child class may define optional arguments that are not in the parent's abstract method
  public function prefixName($name, $separator = ".", $greet = "Dear") {
    if ($name == "John Doe") {
      $prefix = "Mr";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}
?>