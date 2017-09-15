<?php

include './conexion.php';

$con=conexion();
$fecha_actual=date("Y-m-d");
  mysqli_query($con,"INSERT INTO `pesos2`(`id`, `pesos`,`fecha`) VALUES (56,56,'$fecha_actual') ")or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");


?>