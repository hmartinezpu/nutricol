<?php
include './Calculadora.php';
include 'conexion.php';
$con=conexion();
$codigo=$_POST['vcod'];
$nombre=$_POST['n'];
$apellido=$_POST['a'];
$cc=$_POST['c'];
$correo=$_POST['d'];
$celular=$_POST['e'];
$talla=$_POST['f'];
$masac=$_POST['g'];
$calc= new Calculadora;
$IMC= $calc->calculaimc($talla, $masac);
$TM= $calc->tasa($peso, $talla, $edad, $sexo);
$up= mysqli_query($con, "UPDATE usuario SET nombres='".$nombre."',apellidos='".$apellido."',cc='".$cc."',correo='".$correo."',celular='".$celular."',talla='".$talla."' ,masacorporal='".$masac."' ,IMC='".$IMC."' ,tazametabolica='".$TM."' WHERE  cc='".$codigo."'");


if($up){
    
    echo 'SE EDITO CORRECTAMENTE';
}else{
    
    echo 'ERROR AL EDITAR DATOS';
}
 
?>