
<link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="plugins/select2/select2.css" rel="stylesheet">
		<link href="plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">
		<link href="css/style_v1.css" rel="stylesheet">
		<link href="plugins/chartist/chartist.min.css" rel="stylesheet">
                 <script src="ajax3.js"></script>
                 <script src="ajax2.js"></script>
                  <script src="ajax.js"></script>
                     <script src="ajax4.js"></script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                     <script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>

<script>
 function reporte() {
                cc = document.getElementById("document");
                nom = document.getElementById("name");
                ape = document.getElementById("lastn");
                cor = document.getElementById("cor");
                tel = document.getElementById("tel");
                imc = document.getElementById("imc");
                cal = document.getElementById("calorias");
                pes = document.getElementById("peso");
                inter = document.getElementById("in");
                indice = document.getElementById("indice");
                masac = document.getElementById("masac");
                masag = document.getElementById("masag");
                masav = document.getElementById("masav");
                tazam = document.getElementById("tazam");
                act == document.getElementById("act");
                diet= document.getElementById("dieta");
                alert("exemple07a.php?cc=" + cc.innerHTML + "&nom=" + nom.innerHTML + "&ape=" + ape.innerHTML + "&cor=" + cor.innerHTML + "&tel=" + tel.innerHTML + "&imc=" + imc.innerHTML + "&cal=" + calorias.innerHTML + "&peso=" + pes.innerHTML + "&inter=" + inter.innerHTML + "&indice=" + indice.innerHTML + "&masac=" + masac.innerHTML + "&masag=" + masag.innerHTML + "&masav=" + masav.innerHTML + "&tazam=" + tazam.innerHTML + "&act=" + act.innerHTML+"&diet="+diet.innerHTML);

               window.open("exemple07a.php?cc=" + cc.innerHTML + "&nom=" + nom.innerHTML + "&ape=" + ape.innerHTML + "&cor=" + cor.innerHTML + "&tel=" + tel.innerHTML + "&imc=" + imc.innerHTML + "&cal=" + calorias.innerHTML + "&peso=" + pes.innerHTML + "&inter=" + inter.innerHTML + "&indice=" + indice.innerHTML + "&masac=" + masac.innerHTML + "&masag=" + masag.innerHTML + "&masav=" + masav.innerHTML + "&tazam=" + tazam.innerHTML + "&act=" + act.innerHTML+"&diet="+diet.innerHTML);

            }

  </script>
  <script>
      
      
      function desplega(p1,p2,p3,imc){
        
   
    
    alert("entro1");
    if(peso2==0){
        peso2=null;
    }
    if(peso3==0){
        peso3=null;
    }
    if(peso4==0){
        peso4=null;
    }

   var pesofinal=0;
   var pesoini=0;
   if(p1>p2){
    pesofinal=p2;
    pesoini=p1;
   }else if(p1<p2){
    pesofinal=p1;
    pesoini=p2;
   }
    pro=(p1+p2)/2;   
  
    var chart = AmCharts.makeChart("dieta", {
  "type": "xy",
  "theme": "light",
  "marginRight": 80,
  "dataDateFormat": "YYYY-MM-DD",
  "startDuration": 1.5,
  "trendLines": [],
  "balloon": {
    "adjustBorderColor": false,
    "shadowAlpha": 0,
    "fixedPosition": true
  },
  "graphs": [{
    "balloonText": "<div style='margin:5px;'><b>[[x]]</b><br>y:<b>[[y]]</b><br>value:<b>[[value]]</b></div>",
    "bullet": "diamond",
    "maxBulletSize": 25,
    "lineAlpha": 0.8,
    "lineThickness": 2,
    "lineColor": "#b0de09",
    "fillAlphas": 0,
    "xField": "date",
    "yField": "ay",
    "valueField": "aValue"
  }, {
    "balloonText": "<div style='margin:5px;'><b>[[x]]</b><br>y:<b>[[y]]</b><br>value:<b>[[value]]</b></div>",
    "bullet": "round",
    "maxBulletSize": 25,
    "lineAlpha": 0.8,
    "lineThickness": 2,
    "lineColor": "#fcd202",
    "fillAlphas": 0,
    "xField": "date",
    "yField": "by",
    "valueField": "bValue"
  }],
  "valueAxes": [{
    "id": "ValueAxis-1",
    "axisAlpha": 0
  }, {
    "id": "ValueAxis-2",
    "axisAlpha": 0,
    "position": "bottom"
  }],
  "allLabels": [],
  "titles": [],
  "dataProvider": 
  [{
    "date": 1,
    "ay": pesoini,
    "by": peso,
    "aValue": 15,
    "bValue": 10
  }, {
    "date": 2,
   
    "by": peso2,
    "aValue": 15,
    "bValue": 10
  }, {
    "date": 3,
   
    "by": peso3,
    "aValue": 15,
    "bValue": 10
  },{
    "date": 4,
    "ay": pesofinal,
    "by":peso4,
    "aValue": 20,
    "bValue": 10
  }],

  "export": {
    "enabled": true
  },

  "chartScrollbar": {
    "offset": 15,
    "scrollbarHeight": 5
  },

  "chartCursor": {
    "pan": true,
    "cursorAlpha": 0,
    "valueLineAlpha": 0
  }

 });

      }  



      
  </script>


<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		
	</div>
</div>
<div align="center" >


</div>
<div class="row">
	<div class="col-xs-12 col-sm-6">
		<div class="box"  >
			<div class="box-header"  >
				<div class="box-name">
				<i class="fa fa-search"></i>Buscador de pacientes</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content" style="height: 450px;">
				
                
                <div id="xchart-3" class="form-group" style="height: 50px;">
                    

                    <div id="myDiv" align="left" style="width: 245px">
				
	<?php	
    $hola="document";			
include 'conexion.php';

$codigo = $_GET["var"]; 
$con = conexion();

$sql = "select * from usuario where cc='" . $codigo . "'";
$res = mysqli_query($con, $sql);

if (mysqli_num_rows($res) == 0) {

    echo '<b>No hay dato</b>';
} else {
    echo '<table  width="400" border = "1"> ';
    echo "<tr><th scope='col'>Atributo</th><th scope='col'>Valor</th></tr>";
    $row = mysqli_fetch_array($res);
    echo "<tr><td >Nombres</td><td id='name'>$row[4]</td></tr> \n";
    echo "<tr><td >Apellidos</td><td id='lastn'>$row[5]</td></tr> \n";
    echo "<tr><td>C.C.</td><td id='document'>$row[6]</td></tr> \n";
    echo "<tr><td>Edad</td><td >$row[7]</td></tr> \n";
    echo "<tr><td>Correo</td><td id='cor'>$row[8]</td></tr> \n";
    echo "<tr><td>Celular</td><td id='tel'>$row[9]</td></tr> \n";
    echo "<tr><td>Talla</td><td>$row[10]</td></tr> \n";
    echo "<tr><td>Sexo</td><td>$row[11]</td></tr> \n";
    echo "<tr><td>IMC</td><td id='indice'>$row[12]</td></tr> \n";
    echo "<tr><td>Complexion</td><td >$row[13]</td></tr> \n";
    echo "<tr><td>Grado de actividad fisica</td><td id='act' >$row[14]</td></tr> \n";
    echo "<tr><td>Masa corporal</td><td id='masac'>$row[15]</td></tr> \n";
    echo "<tr><td>Masa Grasa</td><td id='masag'>$row[16]</td></tr> \n";
    echo "<tr><td>Masa viceral</td><td id='masav'>$row[17]</td></tr> \n";
    echo "<tr><td>Taza metabolica</td><td id='tazam'>$row[18]</td></tr> \n";
    echo "<tr><td> Edad Corporal</td><td>$row[19]</td></tr> \n";
    echo "<tr><td> Referencias familiares</td><td>$row[20]</td></tr> \n";
    echo "<tr><td>Referencias personales</td><td>$row[21]</td></tr> \n";
    echo "<tr><td> Observacion</td><td id='ob'>$row[22]</td></tr> \n";
    echo "</table> \n";
    
}
?>
					
					
                                           </div>



<div id="pers" style="width: 300px; height: 600px;" ></div>
  <div align="right" id="este"></div>              
                
                
                </div>
			</div>
		</div>
	</div>
    
    <div class="col-xs-12 col-sm-6">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Valoracion del IMC</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
                            <div id="xchart-1" style="height: 50px; width: 100%;">
                                
                                <div id="imc">
								<?php
							 if ($row[12] < 18) {

        echo "<label id='imc'><UL type = circle > <LI>El Usuario " . $row[4] . " " . $row[5] . " tiene el peso bajo.<br><br><LI>Necesario valorar signos de desnutrici&oacuten.</UL> </label>";
    } else if ($row[12] >= 18 && $row[12] < 25) {
        echo "<label id='imc'> <UL type = circle > <LI>El Usuario " . $row[4] . " " . $row[5] . " Tiene peso normal, es estable. <br> <LI> Puede subir o bajar de peso segun las restricciones. </label>";
    } else if ($row[12] >= 25 && $row[12] < 27) {
        echo "<label id='imc'> <UL type = circle > <LI>El Usuario " . $row[4] . " " . $row[5] . " Tiene indices de sobrepeso,<br><br><LI> necesita reducir su masa corporal.</UL> </label>";
    } else if ($row[12] >= 27 && $row[12] < 30) {
        echo "<label id='imc'><UL type = circle > <LI> El Usuario " . $row[4] . " " . $row[5] . " Presenta Obesidad grado I.<br><br><LI> Riesgo relativo alto para desarrollar enfermedades cardiovasculares.</UL> </label>";
    } else if ($row[12] >= 30 && $row[12] < 40) {
        echo "<label id='imc'><UL type = circle > <LI> El Usuario " . $row[4] . " " . $row[5] . " Presenta Obesidad grado II.<br><br><LI> Riesgo relativo muy alto para el desarrollo de enfermedades cardiovasculares.</UL> </label>";
    } else if ($row[12] >= 30 && $row[12] < 40) {
        echo "<label id='imc'><UL type = circle > <LI> El Usuario " . $row[4] . " " . $row[5] . " PresentaObesidad grado III Extrema o Mórbida.<br><br><LI> Riesgo relativo extremadamente alto para el desarrollo de enfermedades cardiovasculares. </UL></label>";
    }else{echo '<label><ul type= circle><li>Datos incorrectos para realizar el calculo</label>';}
								
								
								?>
								
								
								</div>
                                
                                
                            </div>
			</div>
		</div>
	</div>
    <div class="col-xs-12 col-sm-6">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>DATOS SOBRE EL PESO</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					
				</div>
				<div class="no-move"></div>
                                 
			</div>
			<div class="box-content">
                            <div id="tm">
                              
<?php


if ($row[14] == 'poco') {

        $cal = $row[18] * 1.2;
        echo "<label id='calorias'><ul type= circle><li>El consumo de calorias diarias para mantener su peso es de :" . $cal . " Calorias.</ul></label><br>";
    } else if ($row[14] == 'ligero') {
        $cal = $row[18] * 1.375;
        echo "<label id='calorias'><ul type= circle><li>El consumo de calorias diarias para mantener su peso es de :" . $cal . " Calorias.</ul></label><br>";
    } else if ($row[14] == 'moderado') {
        $cal = $row[18] * 1.55;
        echo "<label id='calorias'><ul type= circle><li>El consumo de calorias diarias para mantener su peso es de :" . $cal . " Calorias.</ul></label><br>";
    } else if ($row[14] == 'fuerte') {
        $cal = $row[18] * 1.725;
        echo "<label id='calorias'><ul type= circle><li>El consumo de calorias diarias para mantener su peso es de :" . $cal . " Calorias.</ul></label><br>";
    } else if ($row[14] == 'muy') {
        $cal = $row[18] * 1.9;
        echo "<label id='calorias'><ul type= circle><li>El consumo de calorias diarias para mantener su peso es de :" . $cal . " Calorias.</ul></label><br>";
    } else {
        echo"<label id='calorias'><ul type= circle><li>Datos incorrectos para realizar el calculo</label>";
    }                        
   ?>                             
                            </div>
                            <div id="sug">
                                
                                <?php
                                $valor1=0;
                                $valor2=0;
                                    $valor3=0;
                                
                                
                                
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
         
   
    echo '<script>desplega('.$valor1.','.$valor2.','.$valor3.','.$row[12].');</script>';
    echo '<br><br>';
echo '<button type="button" style="cursor: pointer" class="btn btn-default" onclick="reporte();" >Mostrar informe</button><br>';
                                ?>
                                
                                
                            </div>
                                <div id="xchart-2" style="height:40px; width: 100%;">
                                       <div id="tm"></div>
                                       
                                </div>
                                
			</div>
		</div>
	</div>
	
</div>

  <div class="row">
  <div class="col-xs-12 col-sm-6">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-bar-chart-o"></i>
					<span>Graficos</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content"  style="height:  220px">
			 <div id="chartdiv1" style="width:520px; height:300px;"></div>
                                
                            
                            
            </div>		
                            
                            
			</div>
		</div>
	</div>
            
	
      <div class="col-xs-12 col-sm-6">
            <div class="box" style="height: 680px">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-circle"></i>
					<span>Dieta Sugerida</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content"  style="height: 680px;" id="grafo" >
			
                            <div id="dieta" align="justify" style="width:450px; height:150px;font-size:11px;">
                                
                                
                            <?php    
                                
                                
                                
                              
 
$sql = "select * from usuario where cc='" . $codigo . "'";
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) == 0) {

    echo '<b>No hay dato</b>';
} else {
    

$row = mysqli_fetch_array($res);
 



     $sql1 = "select * from bajarasignadas where id='".$codigo."'";
     $res1 = mysqli_query($con, $sql1);
     $row1 = mysqli_fetch_array($res1);
     echo "<p id='documento'>".$codigo."</p>";
     echo"<table border='1' id='tabladieta' class='table table-hover' align='center' style='font-size:10px !important'>";
     echo '<tr><td colspan="2" style="text-align: center" >Desayuno</td></tr>';
     echo '<tr><td>Lacteos</td><td id="dlacteos">'.$row1['Dlacteos'].'</td>';
     echo '<tr><td> Alimento proteico</td><td id="dproteinas">'.$row1['Dproteina'].'</td>';
     echo '<tr><td>Alimento farinaceo</td><td id="dfarinaceo">'.$row1['Dfarinaceo'].'</td>';
     echo '<tr><td>Frutas</td><td id="dfrutas">'.$row1['Dfrutas'].'</td>';
     echo '<tr><td>Complemento graso</td><td id="dgrasos">'.$row1['Dgraso'].'</td>';
     echo '<tr><td colspan="2" style="text-align: center"style="text-align: center">Media mañana</td></tr>';
     echo '<tr><td>Frutas</td><td id="mfrutas">'.$row1['Mfrutas'].'</td>';
     echo '<tr><td colspan="2" >Almuerzo</td></tr>';
     echo '<tr><td>Alimento proteico</td><td id="aproteina">'.$row1['Aproteina'].'</td>';
     echo '<tr><td>Alimento farinaceo</td><td id="afarinaceo">'.$row1['Afarinaceo'].'</td>';
     echo '<tr><td>Complemento graso</td><td id="agraso">'.$row1['Agraso'].'</td>';
     echo '<tr><td>Hortalizas y verduras</td><td id="averduras">'.$row1['Averduras'].'</td>';
     echo '<tr><td>holi</td><td id="afrutas">'.$row1['Afruta'].'</td>';
     echo '<tr><td colspan="2" style="text-align: center">Media tarde</td></tr>';
     echo '<tr><td>Lacteos</td><td id="mlacteos">'.$row1['Mlacteos'].'</td>';
     echo '<tr><td>Frutas</td><td id="mfrutas">'.$row1['Mfrutas'].'</td>';
     echo '<tr><td>Alimento farinaceo</td><td id="mfarinaceo">'.$row1['Mfarinaceo'].'</td>';
     echo '<tr><td colspan="2" style="text-align: center">Cena</td></tr>';
     echo '<tr><td>Alimento proteico</td><td id="cproteina">'.$row1['Cproteina'].'</td>';
     echo '<tr><td>Alimento farinaceo</td><td id="cfarinaceo">'.$row1['Cfarinaceo'].'</td>';
     echo '<tr><td>Complemento graso</td><td id="cgraso">'.$row1['Cgraso'].'</td>';
     echo '<tr><td>Hortalizas y verduras</td><td id="cverdura">'.$row1['Cverdura'].'</td>';
     echo '<tr><td>Alimento proteico</td><td id="cproteico">'.$row1['Cproteico'].'</td>';
     echo '<tr><td>Frutas</td><td id="cfrutas">'.$row1['Cfrutas'].'</td>';
     echo "</table>";
     
 
                                
    ?>                            
                                
                                
                                
                                
                            </div>	

				
			</div>
		</div>
	</div>
</div>