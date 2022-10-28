<?php

$selec	= $_POST['selec'];

if($selec=="pag1"){
	include 'pag/pag1.php';
} else if($selec=="pag2"){
	include 'pag/pag2.php';
} 

?>