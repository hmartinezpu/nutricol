<?php

include 'conexion.php';





$con=conexion();
$q=mysqli_real_escape_string($con,$_POST['q']);
$sql="select * from comp_alimentos where descripcion LIKE '".$q."%' LIMIT 0 , 5";

$res=mysqli_query($con,$sql)or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");

if(mysqli_num_rows($res)==0){

 echo '<b>No hay sugerencias</b>';

}else{


 while($fila=mysqli_fetch_array($res)){
 $f=$fila['codigo'];
  echo '<div class="sugerencias" style="cursor: pointer" onclick="insertar('.$f.')" >'.$fila['descripcion'].'</div>';

 }

}

?>