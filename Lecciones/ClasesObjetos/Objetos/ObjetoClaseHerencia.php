<?php
// OK. __construct() is public
$heredero = new Heredero("Strawberry", "red");

/*
	OK. message() is public and it calls intro()
	(which is protected) from within the derived class
*/ 
$heredero->message();
?>