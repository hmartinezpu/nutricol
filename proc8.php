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
    $altura=$row[10];
    
}