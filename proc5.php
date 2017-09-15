<?php
include 'conexion.php';
$con=conexion();
$codigo=$_POST['vcod'];


$up=mysqli_query($con,"DELETE FROM usuario WHERE cc='".$codigo."'");

if($up){
    
    echo 'SE ElIMINO CORRECTAMENTE';
}else{
    
    echo 'ERROR AL ELIMINAR DATOS';
}
 
?>