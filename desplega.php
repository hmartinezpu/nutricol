<?php

include 'conexion.php';





$con=conexion();
$codigo= $_POST['q'];
$res2=mysqli_query($con,"SELECT * FROM `pesos` WHERE id=".$codigo."")or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");
    
    
    
    $row2 = mysqli_fetch_array($res2);
    
    $peso1=$row2['peso1'];
    $peso2=$row2['peso2'];
    $peso3=$row2['peso3'];
    $peso4=$row2['peso4'];

    echo $peso1.",".$peso2.",".$peso3.",".$peso4;

?>