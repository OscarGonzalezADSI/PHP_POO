<?php
class MetodosEstaticosSubClase {
  protected static function getWebsiteName() {
    return "MetodosEstaticosSubClase";
  }
}

class SubClase extends MetodosEstaticosSubClase {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}
?>