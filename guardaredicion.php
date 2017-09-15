<?php
include './Calculadora.php';
include 'conexion.php';
$con=conexion();
$codigo=$_POST['vcod'];
$nombre=$_POST['n'];
$apellido=$_POST['a'];
$genero=$_POST['generoo'];
$estatura=$_POST['estatura'];
$correo=$_POST['d'];
$celular=$_POST['e'];
$edad=$_POST['edadd'];

$masac=$_POST['g'];
$pesoa=$_POST['pesoa'];
$tma=$_POST['tma'];
$gea=$_POST['gea'];
$tmade=$_POST['tmade'];
$geade=$_POST['geade'];
$calc= new Calculadora;


    

	$peso=$masac;

	$sexo=$genero;
	$talla=$estatura;


	$IMC= $calc->calculaimc($talla, $peso);
	$TM= $calc->tasa($peso, $talla, $edad, $sexo);
		
//UPDATE `pesos` SET `id`=[value-1],`peso1`=[value-2],`peso2`=[value-3],`peso3`=[value-4] WHERE 1
	

	//consulta 1
	$consult=mysqli_query($con,"SELECT * FROM `pesos` WHERE id=".$codigo."");


	$row = mysqli_fetch_array($consult);
	$p2=$row['peso2'];
	$p3=$row['peso3'];
	$p4=$row['peso4'];

	if($p2==0 && $p3==0 && $p4==0){
		mysqli_query ($con,"UPDATE `pesos` SET `peso2`=".$peso." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else if($p2!=0 && $p3==0 && $p4==0){
		mysqli_query ($con,"UPDATE `pesos` SET `peso3`=".$peso." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else if($p2!=0 && $p3!=0 && $p4==0){
		mysqli_query ($con,"UPDATE `pesos` SET `peso4`=".$peso." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else {
		mysqli_query ($con,"UPDATE `pesos` SET `peso4`=".$peso." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}
	
// consulta 2 $consult=mysqli_query($con,"SELECT * FROM `pesos` WHERE id=".$codigo."");

	$consult2=mysqli_query($con,"SELECT * FROM `tma` WHERE id=".$codigo."");
	$row2 = mysqli_fetch_array($consult2);
	$tma2=$row2['tma2'];
	$tma3=$row2['tma3'];
	$tma4=$row2['tma4'];

	if($tma2==0 && $tma3==0 && $tma4==0){
		mysqli_query ($con,"UPDATE `tma` SET `tma2`=".$tma." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else if($tma2!=0 && $tma3==0 && $tma4==0){
		mysqli_query ($con,"UPDATE `tma` SET `tma3`=".$tma." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else if($tma2!=0 && $tma3!=0 && $tma4==0){
		mysqli_query ($con,"UPDATE `tma` SET `tma4`=".$tma." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else {
		mysqli_query ($con,"UPDATE `tma` SET `tma4`=".$tma." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}


//consulta 3
$consult3=mysqli_query($con,"SELECT * FROM `gea` WHERE id=".$codigo."");
	$row3 = mysqli_fetch_array($consult3);
	$gea2=$row3['gea2'];
	$gea3=$row3['gea3'];
	$gea4=$row3['gea4'];

	if($gea2==0 && $gea3==0 && $gea4==0){
		mysqli_query ($con,"UPDATE `gea` SET `gea2`=".$gea." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else if($gea2!=0 && $gea3==0 && $gea4==0){
		mysqli_query ($con,"UPDATE `gea` SET `gea3`=".$gea." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else if($gea2!=0 && $gea3!=0 && $gea4==0){
		mysqli_query ($con,"UPDATE `gea` SET `gea4`=".$gea." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else {
		mysqli_query ($con,"UPDATE `gea` SET `gea4`=".$gea." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}





//consulta 4
$consult4=mysqli_query($con,"SELECT * FROM `tmade` WHERE id=".$codigo."");
	$row4 = mysqli_fetch_array($consult4);
	$tmade2=$row4['tmade2'];
	$tmade3=$row4['tmade3'];
	$tmade4=$row4['tmade4'];

	if($tmade2==0 && $tmade3==0 && $tmade4==0){
		mysqli_query ($con,"UPDATE `tmade` SET `tmade2`=".$tmade." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else if($tmade2!=0 && $tmade3==0 && $tmade4==0){
		mysqli_query ($con,"UPDATE `tmade` SET `tmade3`=".$tmade." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else if($tmade2!=0 && $tmade3!=0 && $tmade4==0){
		mysqli_query ($con,"UPDATE `tmade` SET `tmade4`=".$tmade." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else {
		mysqli_query ($con,"UPDATE `tmade` SET `tmade4`=".$tmade." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}
//consulta 5
$consult5=mysqli_query($con,"SELECT * FROM `geade` WHERE `id`=".$codigo."");
	$row5 = mysqli_fetch_array($consult5);
	$geade2=$row5['geade2'];
	$geade3=$row5['geade3'];
	$geade4=$row5['geade4'];

	if($geade2==0 && $geade3==0 && $geade4==0){
		mysqli_query ($con,"UPDATE `geade` SET `geade2`=".$geade." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else if($geade2!=0 && $geade3==0 && $geade4==0){
		mysqli_query ($con,"UPDATE `geade` SET `geade3`=".$geade." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else if($geade2!=0 && $geade3!=0 && $geade4==0){
		mysqli_query ($con,"UPDATE `geade` SET `geade4`=".$geade." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}else {
		mysqli_query ($con,"UPDATE `geade` SET `geade4`=".$geade." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>"); 
	}


//consulta 1
	$consult6=mysqli_query($con,"SELECT * FROM `pesoadecuado` WHERE id=".$codigo."");


	$row = mysqli_fetch_array($consult6);
	$pa2=$row['pesoad2'];
	$pa3=$row['pesoad3'];
	$pa4=$row['pesoad4'];

	if($pa2==0 && $pa3==0 && $pa4==0){
		mysqli_query ($con,"UPDATE `pesoadecuado` SET `pesoad2`=".$peso." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>1"); 
	}else if($pa2!=0 && $pa3==0 && $pa4==0){
		mysqli_query ($con,"UPDATE `pesoadecuado` SET `pesoad3`=".$peso." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>2"); 
	}else if($pa2!=0 && $pa3!=0 && $pa4==0){
		mysqli_query ($con,"UPDATE `pesoadecuado` SET `pesoad4`=".$peso." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>3"); 
	}else {
		mysqli_query ($con,"UPDATE `pesoadecuado` SET `pesoad4`=".$peso." WHERE id=".$codigo."") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>4"); 
	}






	$up= mysqli_query($con, "UPDATE usuario SET nombres='".$nombre."',apellidos='".$apellido."',correo='".$correo."',celular='".$celular."' ,IMC='".$IMC."' ,tazametabolica='".$TM."' WHERE  cc='".$codigo."'")or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");






	

if($up){
    
    echo "1";
}else{
    
    echo '2';
}

 


?>