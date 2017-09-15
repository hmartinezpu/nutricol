<?php
class Calculadora {
	
	
	function calculaimc($talla,$peso){
		 if($talla!=null && $talla!=0){		
               
                     return $peso/($talla*$talla);
			
        } 
		
		
		
		}
	
	function tasa($peso,$talla,$edad,$sexo){
	$altura=$talla*100;	
            if ($sexo=='Femenino'){
            return (10*$peso) + (6.25*$altura) - (5*$edad )+ 5;
            }else{
		return (10*$peso)+ (6.25*$altura) - (5*$edad )- 161;
            }
            
		}
	
	
	



}
?>