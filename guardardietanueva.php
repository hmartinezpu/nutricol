<?php

include 'conexion.php';
       $dlacteos=$_POST["dlacteos"];
       $dproteinas=$_POST["dproteinas"];
       $dfarinaceo=$_POST["dfarinaceo"];
       $dfrutas=$_POST["dfrutas"];
       $dgrasos=$_POST["dgrasos"];
       $mfrutas=$_POST["mfrutas"];
       $aproteina=$_POST["aproteina"];
       $afarinaceo=$_POST["afarinaceo"];
       $agraso=$_POST["agraso"];
       $averduras=$_POST["averduras"];
       $afrutas=$_POST["afruta"];
       $mlacteos=$_POST["mlacteos"];
       $mfrutas=$_POST["mfrutas"];
       $mfarinaceo=$_POST["mfarinaceo"];
       $cproteina=$_POST["cproteina"];
       $cfarinaceo=$_POST["cfarinaceo"];
       $cgraso=$_POST["cgraso"];
       $cverdura=$_POST["cverdura"];
       $cproteico=$_POST["cproteico"];
       $cfrutas=$_POST["cfrutas"];
        $documento=$_POST["doc"];




$con=conexion();

$sql="UPDATE `bajarasignadas` SET `Dlacteos`='".$dlacteos."',`Dproteina`='".$dproteinas."',`Dfarinaceo`='".$dfarinaceo."',`Dfrutas`='".$dfrutas."',`Dgraso`='".$dgrasos."',`Mfruta`='".$mfrutas."',`Aproteina`='".$aproteina."',`Afarinaceo`='".$afarinaceo."',`Agraso`='".$agraso."',`Averduras`='".$averduras."',`Afruta`='".$afrutas."',`Mlacteos`='".$mlacteos."',`Mfrutas`='".$mfrutas."',`Mfarinaceo`='".$mfarinaceo."',`Cproteina`='".$cproteina."',`Cfarinaceo`='".$cfarinaceo."',`Cgraso`='".$cgraso."',`Cverdura`='".$cverdura."',`Cproteico`='".$cproteico."',`Cfrutas`='".$cfrutas."' WHERE id='".$documento."'";
 
$res=mysqli_query($con,$sql)or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");


if($res){
       echo "Se almacenó la dieta correctamente";
}else{
       echo "Error en almacenar la información";
}
?>