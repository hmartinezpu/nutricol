<?php
include './Calculadora.php';
include 'conexion.php';
$con=conexion();
$cc=$_POST['cc'];
$lunes=$_POST['lunes'];
$martes=$_POST['martes'];
$miercoles=$_POST['miercoles'];
$jueves=$_POST['jueves'];
$viernes=$_POST['viernes'];
$sabado=$_POST['sabado'];
$domingo=$_POST['domingo'];

$up= mysqli_query($con, "UPDATE `dietasasignadas` SET `lunes`='$lunes',`martes`='$martes',`miercoles`='$miercoles',`jueves`='$jueves',`viernes`='$viernes',`sabado`='$sabado',`domingo`='$domingo' WHERE cc=$cc");


if($up){
    
    echo "Se actualizó correctamente";
}else{
    
    echo  "<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>";
		

}
 


?>