<?php

include 'conexion.php';

$codigo = $_POST['vcod'];
$con = conexion();

$sql = "select * from usuario where cc='" . $codigo . "'";
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) == 0) {

    echo '<b>No hay dato</b>';
} else {

$row = mysqli_fetch_array($res);

    if($row[25]==1){
    
     $sql1="SELECT * FROM `dietalibre` WHERE `id`='1'";
     $res1 = mysqli_query($con, $sql1);
     $row1 = mysqli_fetch_array($res1);
     echo $row1[1];
     
 }else{

echo 'No hay dieta asignada';

 }    
 
}

