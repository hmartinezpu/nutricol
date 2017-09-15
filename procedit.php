<?php

include 'conexion.php';





$con=conexion();
$q=  mysqli_real_escape_string($con,$_POST['q']);
$sql="select * from usuario where nombres LIKE '".$q."%' LIMIT 0 , 5";

$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)==0){

 echo '<b>No hay sugerencias</b>';

}else{


 while($fila=mysqli_fetch_array($res)){

  echo '<div class="sugerencias" id="sug1" style="cursor: pointer" onclick="myFunction2('.$fila["cc"].')">'.$fila['nombres'].' '.$fila['apellidos']. '</div>';

 }


}

?>