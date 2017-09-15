<?php

include 'conexion.php';





$con=conexion();
$q=  $_GET['q'];
$sql="select * from pesos2 where id=".$q." ORDER BY fecha ASC";

$res=mysqli_query($con,$sql);
$pesos = array();
if(mysqli_num_rows($res)==0){

 echo '<b>No hay sugerencias</b>';

}else{
$a=1;

 while($fila=mysqli_fetch_array($res)){
 	$p=$fila['pesos'];
  	$pesos[]= array('date'=>$a,'ay'=> $p,'aVaule'=>10,'bVaule'=>15);
  	$a=$a+1;
 }
 echo json_encode($pesos);

}

?>