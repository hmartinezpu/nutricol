<?php
    include 'conexion.php';
	$nombre = $_REQUEST['username'];
	$pass = $_REQUEST['password'];
	$con=  conexion();
	echo "CONECTo";
	
	if (!isset($_SESSION)){
		session_start();
	}
	
	$sentencia1 = "SELECT * FROM usuario where login ='".$nombre."' or correo ='".$nombre."'  and passnormal = '".$pass."'";
	$sentencia2  = "SELECT * FROM usuario where login ='".$nombre."' and passadmin = '".$pass."'";
	
	$estandar = mysqli_query($con,$sentencia1);
	$admin= mysqli_query($con, $sentencia2);
	
	if($row=mysqli_fetch_array($admin)){
		$_SESSION['login'] = $row['login'];
		session_start();
		header('Location: index_v1.php');
		echo "entro";
		
	
	
	}else if($row=mysqli_fetch_array($estandar)){
		$_SESSION['login'] = $row['login'];
		session_start();
		header('Location: indexusuario.php');
		
	}else{
		echo "<script languaje =javascript>
	   alert('Usuario o password  errados, por favor verifique');
		
	   </script>";
	   header('Location: index.html');
	   echo "<script languaje =javascript>
	   alert('Usuario o password  errados, por favor verifique');
		
	   </script>";
	}
	
	
?>