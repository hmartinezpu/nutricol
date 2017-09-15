<?php

include 'conexion.php';
header("Content-Type: text/html;charset=utf-8");
$codigo = $_POST['vcod'];
$con = conexion();
mysqli_query($con,"SET NAMES 'utf8'");

$sql = "select * from usuario where cc='" . $codigo . "'";
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) == 0) {

    echo '<b>No hay dato</b>';
} else {
    

$row = mysqli_fetch_array($res);
 

if($row['constante']=='1'){

     $sql1 = "select * from bajarasignadas where id='".$codigo."'";
     $res1 = mysqli_query($con, $sql1);
     $row1 = mysqli_fetch_array($res1);
     echo "<p id='documento'>".$codigo."</p>";
     echo"<table border='1' id='tabladieta' class='table table-hover' align='center' style='width:100%; font-size:10px !important'>";
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
     
     
 }
}
?>
