<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php
session_start();
if (!$_SESSION) {
    echo '<script language = javascript>
alert("usuario no autenticado")
self.location = "index.php"
</script>';
}
?>
 
  <script>
    $(document).ready(function(){
  $("#sug1").hover(function(){
    $("#sug1").css("background-color", "#000000");
    }, function(){
      $("#sug1").css("background-color", "#C3C3C3");
    });
});  
      
      function desplega(p1,p2,p3,imc,peso,cc,peso1,peso2,peso3,peso4){
    
	
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
    $('#grafo').slideUp('slow',function(){
	var chart = AmCharts.makeChart("chartdiv1", {
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
 });
$('#grafo').slideDown('slow');
      }  
function buscarporpartes(){
	var resultado="";
	var palabra= document.getElementById("busespecial").value;
   var porcion=document.getElementById("bus1").value;
   if(palabra!="" && porcion!=""){
	var envio=palabra.replace("de ","");
	envio=envio.replace("del ","");
	envio=envio.replace("en ","");
	envio=envio.replace("blanco ","");
	envio=envio.replace("sin ","");
	loadDoc("q="+envio,"service.php",function(){
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
    resultado=xmlhttp.responseText;
      if(resultado!="No hay dato"){

         $('#tabladieta tr').each(function () {
            var palabra=$(this).find("td").eq(1).html();
            if(palabra!=undefined){
           var array= palabra.split(" o "); 
           var esta= document.getElementById("busespecial").value;
           var reemplazo=resultado;
           var porcion=document.getElementById("bus1").value;
           for (var i=0; i<array.length; i++) {
                      if(array[i]==esta)
                      {
                        var conca=porcion+" de "+reemplazo;
                      palabra=palabra.replace(esta,conca);
                      $(this).find("td").eq(1).html(palabra);
                      }
                  }  
               }
            });
        }else{
          alert("No se encontraron coincidencias");
        }

    }else{ 
    
    	 }
  });

}else{
  alert("Debes llenar todos los campos")
}



}

function dieta(cod){
        $('#dieta').slideUp('slow',function(){
 loadDoc4("vcod="+cod,"proc10.php",function(){
  if (xmlhttp4.readyState==4 && xmlhttp4.status==200){
    document.getElementById("dieta").innerHTML=xmlhttp4.responseText;	
    var palabras=[];
	var reemplaced; 
  var cont=0;
  var r;
  $('#tabladieta tr').each(function () {
  var palabra=$(this).find("td").eq(1).html();
       cont++;
       if(palabra!=undefined){
       var result= palabra.split(" o "); 
      
       var esta= document.getElementById("bus2").value;
       for (var i=0; i<result.length; i++) {
              	palabras.push(result[i]);
           }  
      }
});
  var palabras2=[];
  var palabras3=[];
    $( "#bus2" ).autocomplete({
      source: palabras
    });
    $( "#busespecial" ).autocomplete({
      source: palabras
    });
   
    <?php  

    	

    		include 'conexion.php';
    		$con=conexion();
			mysqli_query($con,"SET NAMES 'utf8'");
			$sql="SELECT * FROM comp_alimentos2 ";

			$res=mysqli_query($con,$sql);
			if(mysqli_num_rows($res)==0){

			 echo '<b>No hay sugerencias</b>';

			}else{
		 while($fila=mysqli_fetch_array($res)){
			 ?>

			 palabras2.push('<?php echo $fila['descripcion']?>');
			 palabras3.push('<?php echo $fila['porcion']?>');
			 <?php
 			}
 		}
      ?>
 $( "#bus3" ).autocomplete({
      source: palabras2
    });
 $( "#bus1" ).autocomplete({
      source: palabras3
    });
 $( "#bus4" ).autocomplete({
      source: palabras3
    });
    
    }else{ document.getElementById("dieta").innerHTML='<img src="load.gif" width="50" height="50" />'; }

  });
 });
$('#dieta').slideDown('slow');
        }
  function reemplazarmanual(){
	var reemplaced; 
  var cont=0;
  var r;
  var esta= document.getElementById("bus2").value;
       var reemplazo=document.getElementById("bus3").value;
       var porcion=document.getElementById("bus4").value
        if( esta !=""   && reemplazo !=""  && porcion!=""){

  $('#tabladieta tr').each(function () {


  var palabra=$(this).find("td").eq(1).html();

       cont++;
       if(palabra!=undefined){
       var result= palabra.split(" o "); 
      
       
              for (var i=0; i<result.length; i++) {
              		if(result[i]==esta)
              		{
              			var conca=porcion+" de "+reemplazo;
              		palabra=palabra.replace(esta,conca);
              		$(this).find("td").eq(1).html(palabra);
              		}
           } 



      }
});
}else{
  alert("Agrega todos los capos")
}


}
function buscarreemplazomanual(){
 var palabras=[];
	var reemplaced; 
  var cont=0;
  var r;
  $('#tabladieta tr').each(function () {
  var palabra=$(this).find("td").eq(1).html();
       cont++;
       if(palabra!=undefined){
       var result= palabra.split(" o "); 
      
       var esta= document.getElementById("bus2").value;
       for (var i=0; i<result.length; i++) {
              	palabras.push(result[i]);
           }  
      }
});
    $( "#bus2" ).autocomplete({
      source: palabras
    });
     $( "#busespecial" ).autocomplete({
      source: palabras
    });
  if(r==0){
  	alert("No se encontró");
  }
}
function myFunction(){

var n=document.getElementById('bus').value;

if(n==''){

 document.getElementById("myDiv").innerHTML="";
 document.getElementById("myDiv").style.border="0px";

 document.getElementById("pers").innerHTML="";

 return;
}
//var patron="%";
var cadena=document.getElementById('bus').value;
cadena//1=cadena.replace(patron,'')
if(cadena!='%' && cadena!='&'){
loadDoc("q="+cadena,"proc.php",function(){

  if (xmlhttp.readyState==4 && xmlhttp.status==200){

    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    document.getElementById("myDiv").style.border="1px solid #A5ACB2";

    }else{ document.getElementById("myDiv").innerHTML='<img src="load.gif" width="50" height="50" />'; }

  });

}else{
  document.getElementById("myDiv").style.border="1px solid #A5ACB2";
  document.getElementById("myDiv").innerHTML="Caracter no válido.";
}
}
//-------------------------------
function myFunction2(cod){
$('#pers').slideUp('slow',function(){
    
    document.getElementById("myDiv").innerHTML="";
document.getElementById("myDiv").style.border="0px";

loadDoc("vcod="+cod,"proc2.php",function(){

  if (xmlhttp.readyState==4 && xmlhttp.status==200){
    document.getElementById("pers").innerHTML=xmlhttp.responseText;
    }else{ document.getElementById("pers").innerHTML='<img src="load.gif" width="50" height="50" />'; }

  });  
    });
$('#pers').slideDown('slow');
}

function editar(cc){
    
    
    $('#pers').slideUp('slow',function(){
document.getElementById("myDiv").innerHTML="";
document.getElementById("myDiv").style.border="0px";

loadDoc("vcod="+cc,"proc3.php",function(){
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
    document.getElementById("pers").innerHTML=xmlhttp.responseText;    
    }else{ document.getElementById("pers").innerHTML='<img src="load.gif" width="50" height="50" />'; }

  });
});
$('#pers').slideDown('slow');
}
function Guardaredicion(cc){
document.getElementById("myDiv").innerHTML="";
document.getElementById("myDiv").style.border="0px";
n=document.getElementById("nombre").value;
a=document.getElementById("apellido").value;
c=document.getElementById("cc").value;
d=document.getElementById("correo").value;
e=document.getElementById("celular").value;
f=document.getElementById("talla").value;
g=document.getElementById("masac").value;
loadDoc("vcod="+cc+"&n="+n+"&a="+a+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&g="+g,"proc4.php",function(){

  if (xmlhttp.readyState==4 && xmlhttp.status==200){
    document.getElementById("pers").innerHTML=xmlhttp.responseText;   
    }else{ document.getElementById("pers").innerHTML='<img src="load.gif" width="50" height="50" />'; }
  });

}
function eliminar(cc){
document.getElementById("myDiv").innerHTML="";
document.getElementById("myDiv").style.border="0px";

loadDoc("vcod="+cc,"proc5.php",function(){
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
    document.getElementById("pers").innerHTML=xmlhttp.responseText;
    
    }else{ document.getElementById("pers").innerHTML='<img src="load.gif" width="50" height="50" />'; }
  });
}
function confirmar(cc){
c=confirm('¿Desea eliminar el registro?');
if(c){eliminar(cc);}else{return false;}
}
var xmlhttpp;
function loadfood(string,url,cfunc)
{
            if (window.XMLHttpRequest)
              {// code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttpp=new XMLHttpRequest();
              }
            else
              {// code for IE6, IE5
              xmlhttpp=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xmlhttpp.onreadystatechange=cfunc;
            xmlhttpp.open("POST",url,true);
            xmlhttpp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xmlhttpp.send(string);
           }
var a;
function almacenar(){
  			var dlacteos=$('#tabladieta tbody tr #dlacteos').text();
			var dproteinas=$('#tabladieta tbody tr #dproteinas').text();
			var dfarinaceos=$('#tabladieta tbody tr #dfarinaceo').text();
			var dfrutas=$('#tabladieta tbody tr #dfrutas').text();
			var dgrasos=$('#tabladieta tbody tr #dgrasos').text();
			var mfrutas=$('#tabladieta tbody tr #mfrutas').text();
			var aproteina=$('#tabladieta tbody tr #aproteina').text();
			var afarinaceo=$('#tabladieta tbody tr #afarinaceo').text();
			var agraso=$('#tabladieta tbody tr #agraso').text();
			var averduras=$('#tabladieta tbody tr #averduras').text();
			var afrutas=$('#tabladieta tbody tr #afrutas').text();
			var mlacteos=$('#tabladieta tbody tr #mlacteos').text();
			var mfrutas=$('#tabladieta tbody tr #mfrutas').text();
			var mfarinaceo=$('#tabladieta tbody tr #mfarinaceo').text();
			var cproteina=$('#tabladieta tbody tr #cproteina').text();
			var cfarinaceo=$('#tabladieta tbody tr #cfarinaceo').text();
			var cgraso=$('#tabladieta tbody tr #cgraso').text();
			var cverdura=$('#tabladieta tbody tr #cverdura').text();
			var cgraso=$('#tabladieta tbody tr #cgraso').text();
			var cverdura=$('#tabladieta tbody tr #cverdura').text();
			var cproteico=$('#tabladieta tbody tr #cproteico').text();
			var cfrutas=$('#tabladieta tbody tr #cfrutas').text();
			var documento=$('#documento').text();

		 loadDoc("doc="+documento+"&dlacteos="+dlacteos+"&dproteinas="+dproteinas+"&dfarinaceo="+dfarinaceos+"&dfrutas="+dfrutas+
			"&dgrasos="+dgrasos+"&mfrutas="+mfrutas+"&aproteina="+aproteina+"&afarinaceo="+afarinaceo+"&agraso="+agraso+"&averduras="+averduras+
			"&afruta="+afrutas+"&mlacteos="+mlacteos+"&mfrutas="+mfrutas+"&mfarinaceo="+mfarinaceo+"&cproteina="+cproteina+"&cfarinaceo="+cfarinaceo+
			"&cgraso="+cgraso+"&cverdura="+cverdura+"&cproteico="+cproteico+"&cfrutas="+cfrutas,"guardardietanueva.php",function(){
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
    
    alert(xmlhttp.responseText);  
    }else{ 
      
     }
  });
}
function eliminarali (){
              var cont=0;
            var r=0;    
            $('#tabladieta tr').each(function () {           
            var palabra=$(this).find("td").eq(1).html();
           cont++;
           r=0;
          if(palabra!=undefined){
           var result= palabra.split(" o "); 
           var esta= document.getElementById("busespecial").value;
           for (var i=0; i<result.length; i++) {
               if(result[i]==esta){
              alert("enconttro en "+cont);
              r=1;
              palabra=palabra.replace(esta,"");
              alert(palabra);
              $(this).find("td").eq(1).text(palabra);
        }
       }       
      }      
      });
        if(r==0){
        alert("No se encontró");
       }
      }
function buscarreemplazo(){
  var n=document.getElementById('bus1').value;

if(n==''){

 document.getElementById("myDiv1").innerHTML="";
 document.getElementById("myDiv1").style.border="0px";
 //document.getElementById("pers1").innerHTML="";
 return;
}
//var patron="%";
var cadena=document.getElementById('bus1').value;
cadena//1=cadena.replace(patron,'')
if(cadena!='%' && cadena!='&'){
loadDoc("q="+cadena,"busqueda.php",function(){

  if (xmlhttp.readyState==4 && xmlhttp.status==200){

    document.getElementById("myDiv1").innerHTML=xmlhttp.responseText;
    document.getElementById("myDiv1").style.border="1px solid #A5ACB2";

    }else{ document.getElementById("myDiv1").innerHTML='<img src="load.gif" width="50" height="50" />'; }

  });

}else{
  document.getElementById("myDiv1").style.border="1px solid #A5ACB2";
  document.getElementById("myDiv1").innerHTML="Caracter no válido.";
}
}
</script>

<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Inicio</a></li>
			<li><a href="#">Pacientes</a></li>
			<li><a href="#">Buscar</a></li>
		</ol>
		<div id="social" class="pull-right" style="margin-top: 10px">
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-5">
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
			<div class="box-content" style="height: 1200px;">
				
                
                <div id="xchart-3" class="form-group" style="height: 700px;">
                    <div>
                    <input type="text" id="bus" class="col-sm-6" onkeyup="myFunction()" size="30" required autofocus placeholder="Buscar" />
                    <br>
                    
                    </div>

                    <div id="myDiv" align="left" style="width: 245px; margin-top: 6px">

                                           </div>



<div id="pers" style="width: 300px; height: 600px;" ></div>
  <div align="right" id="este"></div>              
                
                
                </div>
			</div>
		</div>
	</div>
    
    <div class="col-xs-12 col-sm-6">
            <div class="box" style="height: 1680px">
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
			<div class="box-content"  style="height: 1680px;" id="grafo" >
			
                            <div id="dieta" align="justify" style="max-width:600px; height:168px;font-size:8px;"></div>	

				
			</div>
		</div>
	</div>
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
			<div class="box-content"  style="height:  420px">
			<div id="chartdiv1" style="width:520px; height:300px;"></div>
                        		
                            
                            
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
                            <div id="xchart-1" style="height: 200px; width: 100%;">
                                
                                <div id="imc"></div>
                                
                                
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
				<div id="tm"></div>
                                <div id="sug"></div>
                                <div id="xchart-2" style="height: 100px; width: 100%;">
                                       <div id="tm"></div>
                                       
                                </div>
                                
			</div>
		</div>
	</div>
</div>

	<div class="row">
	
            
	
</div>
