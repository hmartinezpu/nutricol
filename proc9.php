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
 
if ($row[11] == 'Femenino') {

        if ($row[13] == 1) {
            
            $sql1 = "SELECT * FROM `pesosmujer` WHERE CONCAT(`pesosmujer`.`talla`) = '".$row[10]."'";
            $res1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($res1) == 0) {

                    echo '<label id="peso"><ul type= circle><li>Datos incorrectos</label>';
            } else {
               $row1 = mysqli_fetch_array($res1); 
               
             echo '<label id="peso"><ul type= circle><li>Su peso ideal esta entre '.$row1[1].' Kilogramos y '.$row1[2].' Kilogramos</ul></label><br>';
              
            $resta1=$row1[1]-$row[15];
            $resta2=$row1[2]-$row[15];
            $resta3=$row[15]-$row1[2];
            $resta4=$row[15]-$row1[1];
            
            if($row[15]<$row1[1]){
                echo '<label id="in"><ul type= circle><li>Debe aumentar al menos '.$resta1.' Kilogramos y maximo '.$resta2.' Kilogramos</label>';
                
            }else if($row[15]>$row1[2]){
                 echo '<label id="in"><ul type= circle><li>Debe disminuir al menos '.$resta3.' Kilogramos y maximo '.$resta4.' Kilogramos </label>';
                
            }else{
                echo '<label id="in"><ul type= circle><li>Su peso es estable, siga las indicaciones de consumo de calorias para mantener su peso</label>';
                
            }            
            
            
            }
            
        } else if ($row[13] == 2) {
            
             
            $sql1 = "SELECT * FROM `pesosmujer` WHERE CONCAT(`pesosmujer`.`talla`) = '".$row[10]."'";
            $res1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($res1) == 0) {

                   echo '<label id="peso"><ul type= circle><li>Datos incorrectos</label>';
            } else {
               $row1 = mysqli_fetch_array($res1); 
               
            echo '<label id="peso"><ul type= circle><li >Su peso ideal esta entre '.$row1[3].' Kilogramos y '.$row1[4].' Kilogramos</ul></label><br>';
              
            $resta1=$row1[3]-$row[15];
            $resta2=$row1[4]-$row[15];
            $resta3=$row[15]-$row1[4];
            $resta4=$row[15]-$row1[3];
            
            if($row[15]<$row1[3]){
                echo '<label id="in"><ul type= circle><li>Debe aumentar al menos '.$resta1.' Kilogramos y maximo '.$resta2.' Kilogramos</label>';
                
            }else if($row[15]>$row1[4]){
                 echo '<label id="in"><ul type= circle><li>Debe disminuir al menos '.$resta3.' Kilogramos y maximo '.$resta4.' Kilogramos </label>';
                
            }else{
                echo '<label id="in"><ul type= circle><li>Su peso es estable, siga las indicaciones de consumo de calorias para mantener su peso</label>';
                
            }  
            }
            
        } else if($row[13] ==3) {
            $sql1 = "SELECT * FROM `pesosmujer` WHERE CONCAT(`pesosmujer`.`talla`) = '".$row[10]."'";
            $res1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($res1) == 0) {

                    echo '<label id="peso"><ul type= circle><li>Datos incorrectos</label>';
            } else {
               $row1 = mysqli_fetch_array($res1); 
               
           echo '<label id="peso"><ul type= circle><li>Su peso ideal esta entre '.$row1[5].' Kilogramos y '.$row1[6].' Kilogramos</ul></label><br>';
              
            $resta1=$row1[5]-$row[15];
            $resta2=$row1[6]-$row[15];
            $resta3=$row[15]-$row1[6];
            $resta4=$row[15]-$row1[5];
            
            if($row[15]<$row1[5]){
                echo '<label id="in"><ul type= circle><li>Debe aumentar al menos '.$resta1.' Kilogramos y maximo '.$resta2.' Kilogramos</label>';
                
            }else if($row[15]>$row1[6]){
                 echo '<label id="in"><ul type= circle><li>Debe disminuir al menos '.$resta3.' Kilogramos y maximo '.$resta4.' Kilogramos </label>';
                
            }else{
                echo '<label id="in"><ul type= circle><li>Su peso es estable, siga las indicaciones de consumo de calorias para mantener su peso</label>';
                
            }     
            }
        }else {echo'compleaxion incorrecta';}
    } else if($row[11] == 'Masculino'){
      if ($row[13] == 1) {
            
            $sql1 = "SELECT * FROM `pesoshombre` WHERE CONCAT(`pesoshombre`.`talla`) = '".$row[10]."'";
            $res1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($res1) == 0) {

                   echo '<label id="peso"><ul type= circle><li>Datos incorrectos</label>';
            } else {
               $row1 = mysqli_fetch_array($res1); 
               
            echo '<label id="peso"><ul type= circle><li>Su peso ideal esta entre '.$row1[1].' Kilogramos y '.$row1[2].' Kilogramos</ul></label><br>';
              
            $resta1=$row1[1]-$row[15];
            $resta2=$row1[2]-$row[15];
            $resta3=$row[15]-$row1[2];
            $resta4=$row[15]-$row1[1];
            
            if($row[15]<$row1[1]){
                echo '<label id="in"><ul type= circle><li>Debe aumentar al menos '.$resta1.' Kilogramos y maximo '.$resta2.' Kilogramos</label>';
                
            }else if($row[15]>$row1[2]){
                 echo '<label id="in"><ul type= circle><li>Debe disminuir al menos '.$resta3.' Kilogramos y maximo '.$resta4.' Kilogramos </label>';
                
            }else{
                echo '<label id="in"><ul type= circle><li>Su peso es estable, siga las indicaciones de consumo de calorias para mantener su peso</label>';
                
            } 
            
            
            
            
            
            }
            
        } else if ($row[13] == 2) {
            
             
            $sql1 = "SELECT * FROM `pesoshombre` WHERE CONCAT(`pesoshombre`.`talla`) = '".$row[10]."'";
            $res1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($res1) == 0) {

                   echo '<label id="peso"><ul type= circle><li>Datos incorrectos</label>';
            } else {
               $row1 = mysqli_fetch_array($res1); 
               
           echo '<label id="peso"><ul type= circle><li>Su peso ideal esta entre '.$row1[3].' Kilogramos y '.$row1[4].' Kilogramos</ul></label><br>';
              
            $resta1=$row1[3]-$row[15];
            $resta2=$row1[4]-$row[15];
            $resta3=$row[15]-$row1[4];
            $resta4=$row[15]-$row1[3];
            
            if($row[15]<$row1[3]){
                echo '<label id="in"><ul type= circle><li>Debe aumentar al menos '.$resta1.' Kilogramos y maximo '.$resta2.' Kilogramos</label>';
                
            }else if($row[15]>$row1[4]){
                 echo '<label id="in"><ul type= circle><li>Debe disminuir al menos '.$resta3.' Kilogramos y maximo '.$resta4.' Kilogramos </label>';
                
            }else{
                echo '<label id="in"><ul type= circle><li>Su peso es estable, siga las indicaciones de consumo de calorias para mantener su peso</label>';
                
            } 
            
             
            }
            
        } else if($row[13] == 3) {
            $sql1 = "SELECT * FROM `pesoshombre` WHERE CONCAT(`pesoshombre`.`talla`) = '".$row[10]."'";
            $res1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($res1) == 0) {

                echo '<label id="peso"><ul type= circle><li>Datos incorrectos</label>';
            } else {
               $row1 = mysqli_fetch_array($res1); 
               
            echo '<label id="peso"><ul type= circle><li>Su peso ideal esta entre '.$row1[5].' Kilogramos y '.$row1[6].' Kilogramos</ul></label><br>';
              
            $resta1=$row1[5]-$row[15];
            $resta2=$row1[6]-$row[15];
            $resta3=$row[15]-$row1[6];
            $resta4=$row[15]-$row1[5];
            
            if($row[15]<$row1[5]){
                echo '<label id="in"><ul type= circle><li>Debe aumentar al menos '.$resta1.' Kilogramos y maximo '.$resta2.' Kilogramos</label>';
                
            }else if($row[15]>$row1[6]){
                 echo '<label id="in"><ul type= circle><li>Debe disminuir al menos '.$resta3.' Kilogramos y maximo '.$resta4.' Kilogramos </label>';
                
            }else{
                echo '<label id="in"><ul type= circle><li>Su peso es estable, siga las indicaciones de consumo de calorias para mantener su peso</label>';
                
            }   
            }
        }else{echo' <label>complexion incorrecta</label>';}
        
    }else{echo'<label id="peso">Sexo incorrecto</label>';}
}