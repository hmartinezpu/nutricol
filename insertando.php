<?php
include './conexion.php';
include './Calculadora.php';
$cedula=$_POST['vcod'];

$nombres=$_POST['nom'];
$apellidos=$_POST['ape'];
$edad=$_POST['eda'];
$correo=$_POST['cor'];
$celular=$_POST['cel'];
$talla=$_POST['tal'];
$sexo=$_POST['sex'];
$complexion=$_POST['com'];
$activity=$_POST['act'];
$peso=$_POST['mac'];
$masag=$_POST['mag'];
$masav=$_POST['mav'];
$estado=$_POST['estado'];
$familiares=$_POST['fam'];
$personales=$_POST['per'];
$observaciones=$_POST['obs'];
$tipo=$_POST['tipo'];
$edadc=$_POST['edadc'];
$pesoa=$_POST['pesoa'];
$tma=$_POST['tma'];
$gea=$_POST['gea'];
$tmade=$_POST['tmade'];
$geade=$_POST['geade'];
$dietalibre="1";
$con=conexion();
$q = mysqli_query($con,"SELECT * FROM usuario WHERE cc = '$cedula'");
$calc= new Calculadora;
$IMC= $calc->calculaimc($talla, $peso);
$TM= $calc->tasa($peso, $talla, $edad, $sexo);

if($tipo==2){
	$dietalibre=0;


}else if($tipo==1){

$dietalibre=1;

}
$constante;

$dieta=0;
$m1=1;

if($estado==='0'){
if(($TM>999)&&($TM<1500)){
    $dieta='1';
   
    
}else if(($TM>=1500)&&($TM<2000)){
    $dieta='2';
    
    
}else if(($TM>=2000)&&($TM<3000)){
    
    $dieta='3';
     
}else if(($TM>=3000)&&($TM<4000)){
    
    $dieta='4';
   
}
}

if($IMC<18.5){
	$constante=3;
}else if($IMC>=18.5 && $IMC<24.99){
	$constante=2;
}else if($IMC>=25){
	$constante = 1;
}


if( mysqli_num_rows($q) == 0){


		
	$fecha_actual=date("Y-m-d");
		
        
		if( ($nombres !=null) && ($apellidos !=null) && ($cedula !=null) && ($edad !=null) && ($edadc !=null)  && ($correo !=null) && ($celular !=null) && ($talla !=null) && ($sexo !=null) && ($complexion !=null) && ($peso !=null) && ($masag !=null) && ($masav !=null) && ($nombres !='') && ($apellidos !='') && ($cedula !=0) && ($edad !=0)  && ($celular !=0) && ($talla !=0)  &&  ($peso !=0) && ($masag !=0) && ($masav !=0) && ($edadc !=0) ) {	
		mysqli_query($con,"INSERT INTO `usuario` (`id`, `login`, `passnormal`, `passadmin`, `nombres`, `apellidos`, `cc`, `edad`, `correo`, `celular`, `talla`, `sexo`, `IMC`, `complexion`, `actividad`, `masacorporal`, `masagrasa`, `grasaviceral`, `tazametabolica`, `edadcorporal`, `estadofisiologico`, `familiares`, `personales`, `observaciones`, `Dietaasi`, `dietalibre`, `tipo`,`constante`) 
			                            VALUES ('$cedula', '$cedula', '$cedula', '', '$nombres', '$apellidos', '$cedula', '$edad', '$correo', '$celular', '$talla', '$sexo', '$IMC', '$complexion', '$activity', '$peso', '$masag', '$masav', '$TM','$edadc', '$estado', '$familiares', '$personales', '$observaciones', '$dieta', '$dietalibre', '$tipo',$constante);") or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"
."</label>");


	   //mysqli_query($con,"INSERT INTO `pesos2`(`id`, `pesos`,`fecha`) VALUES ('$cedula','$peso','$fecha_actual') ")or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");
				mysqli_query($con,"INSERT INTO `pesos`(`id`, `peso1`, `peso2`, `peso3`,`peso4`) VALUES ('$cedula','$peso',0,0,0)");
				
				mysqli_query($con,"INSERT INTO `pesoadecuado`(`id`, `pesoad1`, `pesoad2`, `pesoad3`,`pesoad4`) VALUES ('$cedula','$pesoa',0,0,0)")or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"
."</label>");
				mysqli_query($con,"INSERT INTO `tma`(`id`, `tma1`, `tma2`, `tma3`, `tma4`) VALUES ('$cedula','$tma',0,0,0)")or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"
."</label>1");
				mysqli_query($con,"INSERT INTO `gea`(`id`, `gea1`, `gea2`, `gea3`, `gea4`) VALUES ('$cedula','$gea',0,0,0)")or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"
."</label>");
				mysqli_query($con,"INSERT INTO `tmade`(`id`, `tmade1`, `tmade2`, `tmade3`, `tmade4`) VALUES ('$cedula','$tmade',0,0,0)")or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"
."</label>");
				mysqli_query($con,"INSERT INTO `geade`(`id`, `geade1`, `geade2`, `geade3`, `geade4`) VALUES ('$cedula','$geade',0,0,0)")or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"
."</label>");

				
			    $res1 = mysqli_query($con,"SELECT * FROM usuario WHERE cc = '$cedula'");
				
			    $row1 = mysqli_fetch_array($res1);

			    

			    $sql1="SELECT * FROM `dietas` WHERE `indice`=".$row1['Dietaasi']."";
				$res2 = mysqli_query($con, $sql1);
				$row2 = mysqli_fetch_array($res2);

				$up=null;

				mysqli_query($con,"INSERT INTO `dietasasignadas`(`cc`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `sabado`, `domingo`, `id`) VALUES ('$cedula','".$row2['lunes']."','$row2[2]','$row2[3]','$row2[4]','$row2[5]','$row2[6]','$row2[7]','$cedula')")or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");
				if($constante==3){
					 $sql5="INSERT INTO bajarasignadas SELECT * FROM dietasubir WHERE id='1'";
					 
					 $up=mysqli_query($con, $sql5)or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");
					 mysqli_query($con,"UPDATE `bajarasignadas` SET `id`=$cedula WHERE id='1'");

				}else if($constante==2){
					$sql5="INSERT INTO bajarasignadas SELECT * FROM dietamantener WHERE id='1'";
					 $up=mysqli_query($con, $sql5)or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");
					 mysqli_query($con,"UPDATE `bajarasignadas` SET `id`=$cedula WHERE id='1'");
				}else if($constante==1){
						$sql5="INSERT INTO bajarasignadas SELECT * FROM dietabajar WHERE id='1'";
					 $up=mysqli_query($con, $sql5)or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");
					 mysqli_query($con,"UPDATE `bajarasignadas` SET `id`=$cedula WHERE id='1'");
				}
				echo "IMC: ".$IMC;


			   /* if($row1['estadofisiologico']==0){
							if( $row1[25]=='1'){
							    
							    
							     $sql1="SELECT * FROM `dietas` WHERE `indice`='1'";
							     $res2 = mysqli_query($con, $sql1);
							     $row2 = mysqli_fetch_array($res1);

							     mysqli_query($con,"INSERT INTO `dietasasignadas`(`cc`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `sabado`, `domingo`, `id`) VALUES ('$cc','$row2[2]','$row2[3]','$row2[4]','$row2[5]','$row2[6]','$row2[7]','$row2[8]','$$cc')");
							    
							     
							 }else if( $row1[25]=='2'){
							 	
							     $sql1="SELECT * FROM `dietas` WHERE `indice`='2'";
							     $res2 = mysqli_query($con, $sql1);
							     $row2 = mysqli_fetch_array($res1);

							     mysqli_query($con,"INSERT INTO `dietasasignadas`(`cc`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `sabado`, `domingo`, `id`) VALUES ('$cc','$row2[2]','$row2[3]','$row2[4]','$row2[5]','$row2[6]','$row2[7]','$row2[8]','$$cc')");
							   
							     
							 }else if( $row1[25]=='3'){
							 
							     $sql1="SELECT * FROM `dietas` WHERE `indice`='3'";
							     $res2 = mysqli_query($con, $sql1);
							     $row2 = mysqli_fetch_array($res1);

							     mysqli_query($con,"INSERT INTO `dietasasignadas`(`cc`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `sabado`, `domingo`, `id`) VALUES ('$cc','$row2[2]','$row2[3]','$row2[4]','$row2[5]','$row2[6]','$row2[7]','$row2[8]','$$cc')");
							   
							   
							     
							 }else if( $row1[25]=='4'){
							 
							     $sql1="SELECT * FROM `dietas` WHERE `indice`='4'";
							     $res2 = mysqli_query($con, $sql1);
							     $row2 = mysqli_fetch_array($res1);

							     mysqli_query($con,"INSERT INTO `dietasasignadas`(`cc`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `sabado`, `domingo`, `id`) VALUES ('$cc','$row2[2]','$row2[3]','$row2[4]','$row2[5]','$row2[6]','$row2[7]','$row2[8]','$$cc')");
							   
							  
							 }

							}else if($row1['estadofisiologico']=='1'){
							  
							 
							    
							    
							}else if($row1['estadofisiologico']=='2'){
							    
							  
							    
							}
							else if($row1['estadofisiologico']=='3'){
							    
							    
							    
							}else if($row1['estadofisiologico']=='4'){
							   
							    
						
							}
                      // or die("<label>". mysqli_errno($con) . ": " . mysqli_error($con). "\n"."</label>");     */           
                
              
		
}else{
	
	echo '2';
	   
		
	
	}
	
	
}else{
	echo '3';

}
?>