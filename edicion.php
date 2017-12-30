<?php
include 'conexion.php';

$codigo=$_POST['vcod'];

$con=conexion();
$consulta=mysqli_query($con,"SELECT * FROM usuario WHERE cc='".$codigo."'");




 $row = mysqli_fetch_array($consulta);
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
    
    
    
    
    $res2=mysqli_query($con,"SELECT * FROM `pesos` WHERE id=".$codigo."");
    
    
    
    $row2 = mysqli_fetch_array($res2);
    
    $peso1=$row2['peso1'];
    $peso2=$row2['peso2'];
    $peso3=$row2['peso3'];
    $peso4=$row2['peso4'];

      $res3=mysqli_query($con,"SELECT * FROM `pesoadecuado` WHERE id=".$codigo."");
    
    
    
    $row3 = mysqli_fetch_array($res3);
    
    $pesoa1=$row3['pesoad1'];
    $pesoa2=$row3['pesoad2'];
    $pesoa3=$row3['pesoad3'];
    $pesoa4=$row3['pesoad4'];

      $res4=mysqli_query($con,"SELECT * FROM `tma` WHERE id=".$codigo."");
    
    
    
    $row4 = mysqli_fetch_array($res4);
    
    $tma1=$row4['tma1'];
    $tma2=$row4['tma2'];
    $tma3=$row4['tma3'];
    $tma4=$row4['tma4'];

     $res5=mysqli_query($con,"SELECT * FROM `gea` WHERE id=".$codigo."");
    
    
    
    $row5 = mysqli_fetch_array($res5);
    
    $gea1=$row5['gea1'];
    $gea2=$row5['gea2'];
    $gea3=$row5['gea3'];
    $gea4=$row5['gea4'];





    $pesof=0;

    if($peso2==0 && $peso3==0 && $peso4==0){
      $pesof=$peso1;
    }else if($peso2!=0 && $peso3==0 && $peso4==0){
      $pesof=$peso2;
    }else if($peso2!=0 && $peso3!=0 && $peso4==0){
      $pesof=$peso3;
    }
    else if($peso2!=0 && $peso3!=0 && $peso4!=0){
      $pesof=$peso4;
    }









?>

<div class="form-group has-success has-feedback">
            

              
            <label class="col-sm-2 control-label">Nombres</label>
            <div class="col-sm-6">
              <input id="nombresedit" type="text" class="form-control" placeholder="Nombres" data-original-title="" title="" value="<?php echo $row['nombres'] ?> " required>
            </div>
            <br>
            <br>


            <label class="col-sm-2 control-label" style='text-aling="right"'>Apellidos</label>
            <div class="col-sm-6">
              <input id="apellidosedit"type="text" class="form-control" placeholder="Apellidos" data-original-title="" title="" value="<?php echo $row['apellidos'] ?>">
              
            </div>

            <br>
            <br>

           
           

            
            <label class="col-sm-2 control-label">Correo</label>
            <div class="col-sm-6">
              <input type="email" id="correoedit" class="form-control" placeholder="E-Mail" data-original-title="" title="" value="<?php echo $row['correo'] ?>">
              
            </div>
            <br>
            <br>
            

            
            <label class="col-sm-2 control-label" >Telefono</label>
            <div class="col-sm-6">
              <input type="number" class="form-control" id="celularedit" placeholder="Telefono" data-original-title="" title="" required  min="3001111111" max="3219999999" value="<?php echo $row['celular'] ?>" >
              
            </div>


            
           
            <br>
            <br>

            
            <label class="col-sm-2 control-label">Complexion</label>
            <div class="col-sm-6">
                 <select id="complexionedit" class="form-control" >
                            <option value="1">Peque&ntilde;a</option>
                           <option value="2">Mediana</option>
                          <option value="3">Grande</option>
                     </select>
              
            </div>


            <br>
            <br>


          


            
            <label class="col-sm-2 control-label">Peso</label>
            <div class="col-sm-6">
              <input  type="number" step="0.01" id="masaceditt"  placeholder="Masa Corporal" required  type="text" class="form-control" value="<?php echo $pesof ?>">
              
            </div>

            <br>
            <br>
            <br>

            
           
            
            <label class="col-sm-2 control-label">Actividad fisica</label>
            <div class="col-sm-8">
               <select id="actividadedit" class="form-control" >
                             <option value="poco">Poco o ningún ejercicio</option>                                            
            <option value="ligero">Ejercicio ligero (1-3 días a la semana)</option>
            <option value="moderado">Ejercicio moderado (3-5 días a la semana)  </option>
            <option value="fuerte">Ejercicio fuerte (6-7 días a la semana)</option>
             <option value="muy">Ejercicio muy fuerte (dos veces al día, entrenamientos muy duros)</option>
          </select>
              
            </div>

            <br>
              <br>
                <br>

            <label class="col-sm-2 control-label">Estado fisiológico</label>
            <div class="col-sm-6">
              <select id="estadoedit" class="form-control" >
                              <option value="0">Adulto</option>                                 
                             <option value="1">Deportista</option>                                            
            <option value="2">Vegetariano</option>
            <option value="3">Deportista vegetriano </option>
            <option value="4">Mujer embarazada</option>
            
             
          </select><br>
           
            </div>
             
            <br>
            <br>
            <br>
                <label class="col-sm-2 control-label" style='text-aling="right"'>Edad</label>
            <div class="col-sm-6">
              <input id="edadeditt" type="text" class="form-control" placeholder="Edad"   disabled value="<?php echo $row['edad'] ?>">
              
            </div>
            <br>
            <br>
             <label class="col-sm-2 control-label" style='text-aling="right"'>Género</label>
            <div class="col-sm-6">
              <input id="generoedit" type="text" class="form-control" placeholder="Apellidos" data-original-title="" title=""  disabled value="<?php echo $row['sexo'] ?>">
              
            </div>
            <br>
            <br>
            <br>
            <div  class="form-group">
            <div  class="col-sm-7" >
        <button  class="btn btn-primary btn-label-left" onclick="Guardaredicion(<?php echo $row['cc']?>,<?php echo $row[7]?>,<?php echo $row[15]?>,'<?php echo $row[11]?>');desplega('<?php echo $valor1?>','<?php echo $valor2?>','<?php echo $valor3?>','<?php echo $row[12]?>','<?php echo $row['masacorporal']?>','<?php echo $row['cc'] ?>','<?php echo $peso1 ?>',' <?php echo $peso2?>',' <?php echo $peso3?>','<?php echo $peso4?>');desplega2('<?php echo $tma1 ?>','<?php echo $tma2 ?>','<?php echo $tma3 ?>','<?php echo $tma4 ?>')">
              Editar</button>  

              <?php

              $res10=mysqli_query($con,"SELECT * FROM `pesos` WHERE id=".$codigo."");
    
    
    
              $row10 = mysqli_fetch_array($res10);
              
              $peso11=$row10['peso1'];
              $peso22=$row10['peso2'];
              $peso33=$row10['peso3'];
              $peso44=$row10['peso4'];
              ?>     

               <button  class="btn btn-primary btn-label-left" onclick="desplega('<?php echo $valor1?>','<?php echo $valor2?>','<?php echo $valor3?>','<?php echo $row[12]?>','<?php echo $row['masacorporal']?>','<?php echo $row['cc'] ?>','<?php echo $peso11 ?>',' <?php echo $peso22?>',' <?php echo $peso33?>','<?php echo $peso44?>');">
              Actualizar gráfico</button>

                   </div>




              <br>
         
            


