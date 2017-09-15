<?php

include 'conexion.php';





$con=conexion();
$q=$_POST['q'];
$esta=str_replace("1 ","",$q);
$esta1=str_replace("2 ","",$esta);
$esta2=str_replace("3 ","",$esta1);
$esta3=str_replace("blanco ","",$esta2);
$esta4=str_replace("1/2 ","",$esta3);
$esta5=str_replace("1/4 ","",$esta4);
$esta6=str_replace("blanco","",$esta5);
$palabra=explode(" ",$esta6);


$result = count($palabra);
	if($result==4){
	$sql="select * from comp_alimentos2 where descripcion LIKE '%".$palabra[0]."%' or descripcion
	 like '%".$palabra[1]."%' or descripcion like'%".$palabra[2]."%' or descripcion like '%".$palabra[3]."%' limit 0,1";

	$res=mysqli_query($con,$sql)or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");;


	if (mysqli_num_rows($res) == 0) {

	    echo 'No hay dato';
	} else {
	    

	$row = mysqli_fetch_array($res);
	

	$res2=mysqli_query($con,"SELECT * FROM `comp_alimentos2` WHERE `grupo_a`=".$row['grupo_a']." limit 1,1");
	if (mysqli_num_rows($res2) == 0) {

	    echo 'No hay dato';
	} else {
		$row2 = mysqli_fetch_array($res2);
			echo $row['descripcion'];
	}

	}
	}else if($result==3){
	
	$sql="select * from comp_alimentos2 where descripcion LIKE '%".$palabra[0]."%' or descripcion
	 like '%".$palabra[1]."%' or descripcion like'%".$palabra[2]."%'  limit 0,1";

	$res=mysqli_query($con,$sql)or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");;


	if (mysqli_num_rows($res) == 0) {

	    echo 'No hay dato';
	} else {
	    

	$row = mysqli_fetch_array($res);
	

	$res2=mysqli_query($con,"SELECT * FROM `comp_alimentos2` WHERE `grupo_a`=".$row['grupo_a']." LIMIT 2,1");
	if (mysqli_num_rows($res2) == 0) {

	    echo 'No hay dato';
	} else {
		$row2 = mysqli_fetch_array($res2);
			echo $row['descripcion'];
	}

	}

	}else if($result==2){
	
	$sql="select * from comp_alimentos2 where descripcion LIKE '%".$palabra[0]."%' or descripcion
	 like '%".$palabra[1]."%' limit 0,1";

	$res=mysqli_query($con,$sql)or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");;


	if (mysqli_num_rows($res) == 0) {

	    echo 'No hay dato';
	} else {
	    

	$row = mysqli_fetch_array($res);
	
	

	$res2=mysqli_query($con,"SELECT * FROM `comp_alimentos2` WHERE `grupo_a`=".$row['grupo_a']." limit 1,1");
	if (mysqli_num_rows($res2) == 0) {

	    echo 'No hay dato';
	} else {
		$row2 = mysqli_fetch_array($res2);
			echo $row['descripcion'];
	}
	}
}else if($result==5){
	$sql="select * from comp_alimentos2 where descripcion LIKE '%".$palabra[0]."%' or descripcion
	 like '%".$palabra[1]."%' or descripcion like'%".$palabra[2]."%' or descripcion like '%".$palabra[3]."%' limit 0,1";

	$res=mysqli_query($con,$sql)or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");;


	if (mysqli_num_rows($res) == 0) {

	    echo 'No hay dato';
	} else {
	    

	$row = mysqli_fetch_array($res);
	
	

	$res2=mysqli_query($con,"SELECT * FROM `comp_alimentos2` WHERE `grupo_a`=".$row['grupo_a']." limit 1,1");
	if (mysqli_num_rows($res2) == 0) {

	    echo 'No hay dato';
	} else {
		$row2 = mysqli_fetch_array($res2);
			echo $row['descripcion']."hola";
	}
	}
}else if($result==1){
	$sql="select * from comp_alimentos2 where descripcion LIKE '%".$palabra[0]."%' limit 0,1";

	$res=mysqli_query($con,$sql)or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");;


	if (mysqli_num_rows($res) == 0) {

	    echo 'No hay dato';
	} else {
	    

	$row = mysqli_fetch_array($res);
	if($row['descripcion']!="Col repollo"){

	

	$res2=mysqli_query($con,"SELECT * FROM `comp_alimentos2` WHERE `grupo_a`=".$row['grupo_a']." limit 1,1");
	if (mysqli_num_rows($res2) == 0) {

	    echo 'No hay dato';
	} else {
		$row2 = mysqli_fetch_array($res2);
			echo $row['descripcion'];
	}
	}else {
		echo 'No hay dato';
	}

	}
}

?>