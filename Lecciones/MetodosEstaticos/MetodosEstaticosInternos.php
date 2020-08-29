<?php
class MetodosEstaticosInternos {
	public static function welcomeInternos() {
		echo "MetodosEstaticosInternos";
	}
	public function __construct() {
		self::welcomeInternos();
	}
}
?>