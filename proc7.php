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
   
}





