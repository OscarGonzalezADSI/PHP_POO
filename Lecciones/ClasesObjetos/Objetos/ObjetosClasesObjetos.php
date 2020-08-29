<?php
/* Definicion de Objetos
---------------------------------------------*/
$manzana = new ClasesObjetos();
$Pera = new ClasesObjetos();

/* Entrada de datos  Dos (2) formas
---------------------------------------------*/
/* Primera forma
---------------------------------------------*/
$manzana->set_name('manzana');
$manzana->set_color('Red');

/* Segunda forma
---------------------------------------------*/
$Pera->name = "Pera";
$Pera->color = "verde";

/* Salida de datos
---------------------------------------------*/
$frutaNombre1 = $manzana->get_name();
$frutaNombre2 = $Pera->get_name();
$frutaColor1 = $manzana->get_color();
$frutaColor2 = $manzana->get_color();

?>