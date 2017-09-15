<?php

include 'conexion.php';

$valor1=0;
$valor2=0;
$valor3=0;

$codigo=$_POST['vcod'];
$con=conexion();





$sql="select * from usuario where cc='".$codigo."'";
$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)==0){

 echo '<b>No hay dato</b>';

}else{
    
  $row = mysqli_fetch_array($res);
$envioc =$row[6];
$envion=$row[4];
$envioa=$row[5];
if ($row[11] == 'Femenino') {

        if ($row[13] == '1') {
            
            $sql1 = "SELECT * FROM `pesosmujer` WHERE CONCAT(`pesosmujer`.`talla`) = '".$row[10]."'";
            $res1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($res1) == 0) {

                    echo '<br><label><ul type= circle><li>Datos incorrectos</label>';
            } else {
               $row1 = mysqli_fetch_array($res1); 
               $valor1=$row1[1];
               $valor2=$row1[2];
               $valor3=$row[15];
            
              
           
            
                      
            
            
            }
            
        } else if ($row[13] ==' 2') {
            
             
            $sql1 = "SELECT * FROM `pesosmujer` WHERE CONCAT(`pesosmujer`.`talla`) = '".$row[10]."'";
            $res1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($res1) == 0) {

                   echo '<br><label><ul type= circle><li>Datos incorrectos</label>';
            } else {
               $row1 = mysqli_fetch_array($res1); 
               
            
             $valor1=$row1[3];
               $valor2=$row1[4];
               $valor3=$row[15];
              
            
            
            
            
            }
            
        } else if($row[13] == '3') {
            $sql1 = "SELECT * FROM `pesosmujer` WHERE CONCAT(`pesosmujer`.`talla`) = '".$row[10]."'";
            $res1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($res1) == 0) {

                    echo '<br><label><ul type= circle><li>Datos incorrectos</label>';
            } else {
               $row1 = mysqli_fetch_array($res1); 
               
          
            $valor1=$row1[5];
               $valor2=$row1[6];
               $valor3=$row[15];
              
               
            }
        }else {echo'complexion incorrecta';}
    } else if($row[11] == 'Masculino'){
      if ($row[13] == 1) {
            
            $sql1 = "SELECT * FROM `pesoshombre` WHERE CONCAT(`pesoshombre`.`talla`) = '".$row[10]."'";
            $res1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($res1) == 0) {

                   echo '<br><label><ul type= circle><li>Datos incorrectos</label>';
            } else {
               $row1 = mysqli_fetch_array($res1); 
               
           
           $valor1=$row1[1];
               $valor2=$row1[2];
               $valor3=$row[15];
               
            
            
            
            
            
            
            }
            
        } else if ($row[13] == '2') {
            
             
            $sql1 = "SELECT * FROM `pesoshombre` WHERE CONCAT(`pesoshombre`.`talla`) = '".$row[10]."'";
            $res1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($res1) == 0) {

                   echo '<br><label><ul type= circle><li>Datos incorrectos</label>';
            } else {
               $row1 = mysqli_fetch_array($res1); 
               
        
            $valor1=$row1[3];
               $valor2=$row1[4];
               $valor3=$row[15];
                
            
            
             
            }
            
        } else if($row[13] =='3') {
            $sql1 = "SELECT * FROM `pesoshombre` WHERE CONCAT(`pesoshombre`.`talla`) = '".$row[10]."'";
            $res1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($res1) == 0) {

                echo '<br><label><ul type= circle><li>Datos incorrectos</label>';
            } else {
               $row1 = mysqli_fetch_array($res1); 
               
             
            $valor1=$row1[5];
               $valor2=$row1[6];
               $valor3=$row[15];
                
             
            }
        }else{echo'complexion incorrecta';}
        
    }else{
        echo'Sexo incorrecto';
    
    } 
    
    
    
    
    $res2=mysqli_query($con,"SELECT * FROM `pesos` WHERE id=".$row['cc']."");
    
    
    
    $row2 = mysqli_fetch_array($res2);
    
    $peso1=$row2['peso1'];
    $peso2=$row2['peso2'];
    $peso3=$row2['peso3'];
    $peso4=$row2['peso4'];


   

 echo '<table class="table" width="200" border="0" cellspacing="60" cellpadding="20" style="border-collapse: separate;
  border-spacing:  5px;">';
 echo '<tr>';
 echo '<td>Cedula    </td>';
 echo '<td>Nombre    </td>';
 echo '<td>Acciones  </td>';
 echo '</tr>';

 echo '<tr>';
 echo '<td>'.$row['cc'].'</td>';
 echo '<td>'.$row['nombres'].'</td>';
 

 echo '<td><button type="button" style="cursor: pointer" class="btn btn-default" onclick="dieta('.$row['cc'].');mostrar('.$row['cc'].');peso('.$row['cc'].');ver('.$row['cc'].');sugerido('.$row['cc'].');desplega('.$valor1.','.$valor2.','.$valor3.','.$row[12].','.$row['masacorporal'].','.$row['cc'].','.$peso1.','.$peso2.','.$peso3.','.$peso4.');">Ver</button><br><button type="button" style="cursor: pointer" class="btn btn-default" onclick="editar('.$row['cc'].');" >Editar</button><br><button type="button" style="cursor: pointer" class="btn btn-default" onclick="confirmar('.$row['cc'].');" >Eliminar</button></th>';
 echo '</tr>';

 echo '</table>';

}

?>
