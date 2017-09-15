<?php

include 'conexion.php';



$esta=$_POST['esta'];

$con=conexion();
$cant=0;
$sql="select * from comp_alimentos where descripcion='".$esta."'";

$res=mysqli_query($con,$sql)or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");

if(mysqli_num_rows($res)==0){

 echo 'x';

}else{


$fila=mysqli_fetch_array($res);
 	$clave=$fila['grupo_a'];
 	
 	if($clave==1){
 		$cant=$fila['cant_lip'];
 	} else if($clave==2){
 		$cant=$fila['cant_carb'];
 	}else{
 		$cant=$fila['cant_prote'];
 	}
 	
 	if($clave==1){
 		$cant1=$cant-5;
 		$cant2=$cant+5;

 		$cant3=" ".$cant1." ";
 		$cant4=" ".$cant2." ";


 	$sql1='select * from comp_alimentos where grupo_a='.$clave.' AND cant_lip Between '.$cant3.' And '.$cant4. ' AND descripcion <> "'.$fila['descripcion'].'"';

	$res1=mysqli_query($con,$sql1)or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");
 	 
	 $fila1=mysqli_fetch_array($res1);
	 echo $fila1['descripcion'];
	 


	}


 

}

?>