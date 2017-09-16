<?php

include 'conexion.php';

$codigo = $_POST['vcod'];
$con = conexion();

$sql = "select * from usuario where cc='" . $codigo . "'";
$res = mysqli_query($con, $sql);

if (mysqli_num_rows($res) == 0) {

    echo '<b>No hay dato</b>';
} else {
    echo '<table  width="400" border = "1" class="table table-hover"> ';
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
    echo "<tr><td>Peso</td><td id='masac'>$row[15]</td></tr> \n";
    echo "<tr><td>Masa Grasa</td><td id='masag'>$row[16]</td></tr> \n";
    echo "<tr><td>Masa Visceral</td><td id='masav'>$row[17]</td></tr> \n";
    echo "<tr><td>Tasa Metabólica</td><td id='tazam'>$row[18]</td></tr> \n";
    echo "<tr><td> Edad Corporal</td><td>$row[19]</td></tr> \n";
    echo "<tr><td> Antecedentes Familiares</td><td>$row[20]</td></tr> \n";
    echo "<tr><td>Antecedentes Personales</td><td>$row[21]</td></tr> \n";
    echo "<tr><td> Observacion</td><td id='ob'>$row[22]</td></tr> \n";
    echo "</table> \n";
    
}

echo '<br><br>';
echo '<button type="button" style="cursor: pointer" class="btn btn-default" onclick="reporte();" >Mostrar informe</button><br>';
?>


