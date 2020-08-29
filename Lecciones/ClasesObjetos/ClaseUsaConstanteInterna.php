<?php
class ClaseUsaConstanteInterna {
  const LEAVING_MESSAGE = "Constante llamada desde el objeto.";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}