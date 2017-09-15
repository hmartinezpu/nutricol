<?php

include 'conexion.php';





$con=conexion();
$palabra=$_POST['q'];

$sepa= explode(" ", $palabra);
 $longitud = count($sepa);
 for ($i=0; $i <$longitud ; $i++) { 
 	
 	if($sepa[$i]=!'vaso'){
 		echo $sepa[$i];
 	}
 }



?>