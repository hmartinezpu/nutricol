<?php

function conexion(){

 $con = mysqli_connect("localhost","root","","basenueva");

 if (!$con){

  die('Could not connect: ' . mysqli_error());
 }

 

 return($con);

}

?>