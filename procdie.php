<?php

include 'conexion.php';

$codigo = $_POST['vcod'];
$con = conexion();

$sql = "select * from `dietasasignadas` where cc='" . $codigo . "'";
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) == 0) {

    echo '<b>No hay dato</b>';
} else {

$row = mysqli_fetch_array($res);

$lunes=$row['lunes'];
$martes=$row['martes'];
$miercoles=$row['miercoles'];
$jueves=$row['jueves'];
$viernes=$row['viernes'];
$sabado=$row['sabado'];
$domingo=$row['domingo'];
}
    
  //  echo "".$row['lunes']."*".$row['martes']."*".$row['miercoles']."*".$row['jueves']."*".$row['viernes']."*".$row['sabado']."*".$row['domingo']."";
     ?>
     <script type="text/javascript">
     $("#accordion").accordion({icons: icons });
	// Create UI spinner
	$("#ui-spinner").spinner();
	// Add Drag-n-Drop to boxes
	WinMove();</script>

     <div class="box-content" id="accordion">
				<h3>Lunes</h3>
				<div>
					<textarea type="text" id="inlu" ><?php echo $row['lunes'] ?></textarea>
				</div>
				<br>
				<h3>Martes</h3>
				<div>
					<textarea type="text" id="inma" ><?php echo $row['martes'] ?></textarea>
				</div>
				<br>
				<h3>Miercoles</h3>
				<div>
					<textarea type="text" id="inmi" ><?php echo $row['miercoles'] ?></textarea>
				</div>
				<br>
				<h3>Jueves</h3>
				<div>
					<textarea type="text" id="inju" ><?php echo $row['jueves'] ?></textarea>
				</div>
				<br>
				<h3>Viernes</h3>
				<div>
					<textarea type="text" id="invi" ><?php echo $row['viernes'] ?></textarea>
				</div>
				<br>
				<h3>Sabado</h3>	
				<div>
					<textarea type="text" id="insa" ><?php echo $row['sabado'] ?></textarea>
				</div>
				<br>
					<h3>Domingo</h3>
				<div>
					<textarea type="text" id="indo" ><?php echo $row['domingo'] ?></textarea>
				</div>
			</div>
			 <div  class="col-sm-7" >
        <button  class="btn btn-primary btn-label-left" onclick="Guardaredicion1(<?php echo $row['cc'];?>)">
              Editar</button>            </div>
              <br>
 

     
 


