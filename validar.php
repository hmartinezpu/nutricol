<?php


include 'conexion.php';
function nombre($cc){

$con = conexion();

$sql = "select * from usuario where cc='" . $cc . "'";
$res = mysqli_query($con, $sql);


$row = mysqli_fetch_array($res);
$nom=$row[4];
return $nom;

}


?>                                                                                                                                                                                                                                                      