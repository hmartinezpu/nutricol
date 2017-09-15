<?php

function conexion(){

 $con = mysqli_connect("localhost","root","","basenueva");
mysqli_set_charset($con,'utf8');
 if (!$con){

  die('Could not connect: ' . mysqli_error());
 }

 

 return($con);

}

?>