
<?php
include "librerias.php";
include "menu.php";
?>
<?php echo "<br>";?>
<?php echo "<br>";?>
Las clases y métodos abstractos son cuando la<?php echo "<br>";?>
clase principal tiene un método con nombre,<?php echo "<br>";?>
pero necesita su (s) clase (s) secundaria (s)<?php echo "<br>";?>
para completar las tareas.<?php echo "<br>";?>
<?php echo "<br>";?>
Una clase abstracta es una clase que contiene<?php echo "<br>";?>
al menos un método abstracto. Un método abstracto<?php echo "<br>";?>
es un método que se declara, pero no se implementa<?php echo "<br>";?>
en el código.<?php echo "<br>";?>
<?php echo "<br>";?>
Una clase o método abstracto se define con la<?php echo "<br>";?>
abstract palabra clave:<?php echo "<br>";?>
<?php echo "<br>";?>
abstract class ParentClass {<?php echo "<br>";?>
abstract public function someMethod1();<?php echo "<br>";?>
abstract public function someMethod2($name, $color);<?php echo "<br>";?>
abstract public function someMethod3() : string;<?php echo "<br>";?>
}
<?php echo "<br>";?>
<?php echo "<br>";?>