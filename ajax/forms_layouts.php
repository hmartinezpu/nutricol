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
<script src="ajax.js"></script>
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/alertifyjs/1.4.0/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.4.0/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.4.0/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.4.0/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.4.0/css/themes/bootstrap.min.css"/>
<script>

    function Registrar(){
      

cc=document.getElementById("cc").value;
nom=document.getElementById("nombres").value;
ape=document.getElementById("apellidos").value;
eda=document.getElementById("edad").value;
cor=document.getElementById("correo").value;
cel=document.getElementById("celular").value;
tal=document.getElementById("talla").value;
sex=document.getElementById("sexo").value;
com=document.getElementById("complexion").value;
act=document.getElementById("actividad").value;
mac=document.getElementById("masac").value;
mag=document.getElementById("masag").value;
mav=document.getElementById("masav").value;
est=document.getElementById("estado").value;
fam=document.getElementById("familiares").value;
per=document.getElementById("personales").value;
obs=document.getElementById("observaciones").value;
edadc=document.getElementById("edadc").value;
			pesoa=document.getElementById("pesoa").value;
			tma=document.getElementById("uno").value;
			gea=document.getElementById("dos").value;
			tmade=document.getElementById("tres").value;
			geade=document.getElementById("cuatro").value;

tipo=1;
if(pesoa!=0 && pesoa!=null &&pesoa!="" && tma!=0 && tma!=null && tma!="" && gea!=0 && gea!=null && gea!="" && tmade!=0 && tmade!=null && tmade!="" && geade!=0 && geade!=null && geade!=""){


if((cc!=='')&&(nom!=='')&&(ape!=='')&&(eda!=='' ) &&(eda>=18 )   &&(tal!=='')&&(mac!=='')&&(cor!=='')&&(cel!=='')&&(edadc!=='')){
loadDoc("vcod="+cc+"&nom="+nom+"&ape="+ape+"&eda="+eda+"&cor="+cor+"&cel="+cel+
        "&tal="+tal+"&sex="+sex+"&com="+com+"&act="+act+"&mac="+mac+"&mag="+mag+"&mav="+mav+"&estado="+est+"&fam="+fam+
        "&per="+per+"&obs="+obs+"&tipo="+tipo+"&edadc="+edadc+"&pesoa="+pesoa+"&tma="+tma+"&gea="+gea+"&tmade="+tmade+"&geade="+geade,"insertando.php",function(){
  
  if (xmlhttp.readyState==4 && xmlhttp.status==200){

 document.getElementById("pers").innerHTML=xmlhttp.responseText;
 
 if(xmlhttp.responseText!="2" && xmlhttp.responseText!="3" ){
    alertify.success("Se registró el usuario correctamente");
    
               // window.open("result.php?var="+cc+""); 
    }else if(xmlhttp.responseText==="2"){
         alertify.error("Error, debe ingresar todos los datos");
        
    }  else if(xmlhttp.responseText==="3"){
alertify.error("Ya existe un usuario con esta cedula");
    }
    
    if(document.getElementById("pers").value==1){
  	 alertify.success("Se registró el usuario correctamente");
    }


    }else if (xmlhttp.responseText=="<label>Error</label>"){ 
           alertify.error("Error al ingresar los datos");
    }
  
  });
  }else{alertify.error('Error, debe ingresar todos los datos')}
}else{
	alertify.error("Debes ingresar la información de la Tasa metabólica");
}

}   



function calcular(){

	var p1=document.getElementById("masac").value;
	var p2=document.getElementById("pesoa").value;

	var gen=document.getElementById("sexo").value;

	var edad=document.getElementById("edad").value;
	var num=$("#actividad").val();
	var actividad=num.toString();
	
	var tma=0;
	var gea=0;
	var tmade=0;
	var geade=0;
	if(p1!=0 && p2!=0 && edad!=0){
		if(gen=="Femenino"){
			if(edad>=18 && edad<30){
						tma=14.818*p1+486.6;
			}else if(edad>=30 && edad<=60){
					tma=8.126*p1+845.6;

			}else if(edad>60){
					tma=9082*p1*+658.5;
			}else{
				alert("Error, debe ingresar la edad");
			}
				if(actividad=="poco"){
				gea=1.56*tma;
			}else if(actividad=="ligero"  || actividad=="moderado"){
				gea=1.64*tma;
			}else if(actividad=="fuerte" || actividad=="muy"){
				gea=1.82*tma;
			}

		}else{
				if(edad>=18 && edad<30){

					tma=15.057*p1+ 692.2;

			}else if(edad>=30 && edad<=60){

					tma=11.472*p1+873.1;
			}else if(edad>60){
					tma=11.711*p1+ 587.7;
			}else{
				alert("Error, debes ingresar la edad");
			}
				
				if(actividad=="poco"){
					
				gea=1.55*tma;
				
			}else if(actividad=="ligero"  || actividad=="moderado"){
				gea=1.76*tma;
			}else if(actividad=="fuerte" || actividad=="muy")
			{
				gea=2.10*tma;
			}

			}

		if(gen=="Femenino"){
			if(edad>=18 && edad<30){
						tmade=14.818*p2+486.6;
			}else if(edad>=30 && edad<=60){
					tmade=8.126*p2+845.6;

			}else if(edad>60){
					tmade=9082*p2*+658.5;
			}else{
				alert("Error, debe ingresar la edad");
			}
			
				if(actividad=="poco"){
					
				geade=1.56*tmade;
			
			}else if(actividad=="ligero"  || actividad=="moderado"){
				geade=1.64*tmade;
			}else if(actividad=="fuerte" || actividad=="muy")
			{
				geade=1.82*tmade;
			}
		}else
			{

				if(edad>=18 && edad<30){

					tmade=15.057*p2+ 692.2;

			}else if(edad>=30 && edad<=60){

					tmade=11.472*p2+873.1;
			}else if(edad>60){
					tmade=11.711*p2+ 587.7;
			}else{
				alert("Error, debes ingresar la edad");
			}
				if(actividad=="poco"){
					geade=1.55*tmade;
				}else if(actividad=="ligero"  || actividad=="moderado"){
					geade=1.76*tmade;
				}else if(actividad=="fuerte" || actividad=="muy")
				{
					geade=2.10*tmade;
				}


			}

			document.getElementById("uno").value=tma;
			document.getElementById("dos").value=gea;
			document.getElementById("tres").value=tmade;
			document.getElementById("cuatro").value=geade;

		}else{
			 alertify.error("Error, debe ingresar todos los datos");
		}

}

    function limpiar(){
    		document.getElementById("uno").value=null;
			document.getElementById("dos").value=null;
			document.getElementById("tres").value=null;
			document.getElementById("cuatro").value=null;

    }
    
</script>


<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index_v1.html">Inicio</a></li>
			<li><a href="#">Pacientes</a></li>
			<li><a href="#">Registrar</a></li>
		</ol>
		<div id="social" class="pull-right">
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</div>

<div class="box-content">
				<div id="tabs">
					<ul>
						<li><a href="#tabs-1">Información General</a></li>
						<li><a href="#tabs-2">Tasa metabólica</a></li>
						
					</ul>
					<div id="tabs-1">

			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="box" style="max-height:  2000px;">
						<div class="box-header">
							<div class="box-name">
								<i class="fa fa-search"></i>
								<span>Registrar</span>
							</div>
							<div class="box-icons">
								<a class="collapse-link">
									<i class="fa fa-chevron-up"></i>
								</a>
								<a class="expand-link">
									<i class="fa fa-expand"></i>
								</a>
								<a class="close-link">
									<i class="fa fa-times"></i>
								</a>
							</div>
							<div class="no-move"></div>
						</div>
						<div class="box-content" style="max-height:2000px">
							<h4 class="page-header"></h4>
			                                <div class="form-horizontal"  >
			                               <div class="form-group">
									<label class="col-sm-2 control-label">C.C.</label>
									<div class="col-sm-4">
										<input id="cc" type="number"  placeholder="C.C." min="1" required >
									</div>
			                               </div> 
								<div class="form-group">
									<label class="col-sm-2 control-label">Nombres</label>
									<div class="col-sm-4">
										<input id="nombres" type="text"   placeholder="Nombres"  title="Su nombre completo" required/>
									</div>
								  <label class="col-sm-2 control-label">Apellidos</label>
									<div class="col-sm-4">
									  <input id="apellidos" type="text"   placeholder="Apellidos"  required/>
									</div>
								</div>
								<div class="form-group has-success has-feedback">
									<label class="col-sm-2 control-label">Edad</label>
									<div class="col-sm-4">
										 <input type="number" id="edad" min="18" max="99"  step="1"   placeholder="Edad"  required >
									</div>
									<label class="col-sm-2 control-label">E-mail</label>
								  <div class="col-sm-4">
										<input type="email" id="correo"  placeholder="E-Mail" required/>
									
								  </div>
								</div>
								<div class="form-group has-success has-feedback">
									<label class="col-sm-2 control-label">Numero telefonico</label>
									<div class="col-sm-4">
										<input type="number" id="celular" id="celular" min="3001111111" max="3219999999"  placeholder="Celular" required />
									</div>
									<label class="col-sm-2 control-label">Talla</label>
									<div class="col-sm-4">
										<input type="number" step="0.01" id="talla" min="1.5" max="2.50"  placeholder="Talla" required />
										
								  </div>
								</div>
								<div class="form-group has-warning has-feedback">
									<label class="col-sm-2 control-label">Sexo</label>
									<div class="col-sm-4">
										
			        
			        <div class="col-sm-5">
			          <select id="sexo"  >
			            <option value="Masculino">Masculino</option>
			            <option value="Femenino">Femenino</option>
			            
			          </select>
			        </div>
			      
								  </div>
									<label class="col-sm-2 control-label">Complexion</label>
									<div class="col-sm-2">
										 <select id="complexion" >
			            <option value="1">Peque&ntilde;a</option>
			            <option value="2">Mediana</option>
			            <option value="3">Grande</option>
			          </select>
									</div>
								</div>
			                                    
								<div class="form-group has-error has-feedback">
									<label class="col-sm-2 control-label">Peso Actual</label>
									<div class="col-sm-4">
										<input type="number" step="0.01" id="masac"  placeholder="Masa Corporal" required />
										
									</div>
									
								  <label class="col-sm-2 control-label">Masa grasa</label>
									<div class="col-sm-2">
										<input type="number" step="0.01" id="masag"  placeholder="Masa grasa" required />
									</div>
								</div>
			                    <div class="form-group has-error has-feedback">
									<label class="col-sm-2 control-label">Grasa visceral </label>
									<div class="col-sm-4">
									  <input type="number" step="0.01" id="masav"  placeholder="Masa visceral" required />
										
									</div>
									<label class="col-sm-2 control-label">Edad corporal </label>
									<div class="col-sm-4">
									  <input type="number" step="1" id="edadc"  placeholder="Edad corporal" required />
										
									</div>
									
								  
							  </div>
			                                    <div class="form-group has-error has-feedback">
									<label class="col-sm-2 control-label">Actividad fisica</label>
									<div class="col-sm-4">
										 <select id="actividad" >
			                             <option value="poco">Poco o ningún ejercicio</option>                                            
							            <option value="ligero">Ejercicio ligero (1-3 días a la semana)</option>
							            <option value="moderado">Ejercicio moderado (3-5 días a la semana)	</option>
							            <option value="fuerte">Ejercicio fuerte (6-7 días a la semana)</option>
							             <option value="muy">Ejercicio muy fuerte (dos veces al día, entrenamientos muy duros)</option>
							          </select>
										
									</div>
			                                                
									
								  
								</div>
			                                    
			                                 <div class="form-group has-error has-feedback">
									 
			                                    <label class="col-sm-2 control-label">Estado fisiologico</label>
			                                                <div class="col-sm-4">
										 <select id="estado" >
			                              <option value="0">Adulto</option>                                 
			                             <option value="1">Deportista</option>                                            
								            <option value="2">Vegetariano</option>
								            <option value="3">Deportista vegetariano</option>
								           <option value="5">Embarazada</option>
			            
			             
			          				</select>
										
									</div>

									</div>
			                                         
								
								       
			                    <div class="form-group">
								  <label class="col-sm-2 control-label" for="form-styles">Antecedentes familiares</label>
									
									  <textarea id="familiares"  cols="35" rows="4" width="80%" placeholder="Familiares" style="margin-left: 27px"></textarea>
									
									

									
								</div>
								
								<div class="form-group">
								  <label class="col-sm-2 control-label" for="form-styles"  >Antecedentes personales</label>
									<div class="col-sm-10">
											<textarea id="personales"  cols="35" rows="4" width="80%" style="margin-left: 10px" placeholder="Personales"></textarea>
									</div>
								</div>
								
			                  <div class="form-group">
			                    <label class="col-sm-2 control-label" for="form-styles" >Obsevaciones</label>
			                      <div class="col-sm-10">
											<textarea id="observaciones"  cols="35" rows="4"  width="80%" style="margin-left: 10px" placeholder="Notas"></textarea>
											<br>
											
								</div>
								</div>
								
								<br>
			                    <div  class="clearfix"></div>
								
								</div>
			                                      
			                 
			                    <div id="pers"></div>
							</form>
						</div>
					</div>
				</div>
			</div>

			</div>

			<div id="tabs-2">
			   <div class="box box-info">
														            
														            <!-- /.box-header -->
														            <!-- form start -->
														            
														                <div class="form-group">
														                  <label for="inputEmail3" class="col-sm-4 control-label">Peso adecuado</label>

														                  <div class="col-sm-6">
														                    <input type="number" class="form-control" id="pesoa" placeholder="Ingresa un peso adecuado">
														                  </div>
														                </div>
														                
														                <div class="form-group">
														                  <div class="col-sm-offset-2 col-sm-10">
														                    <div class="checkbox">
														                   
														                    </div>
														                  </div>
														                </div>
														                <div class="form-group">
														               
														                <input type="number"  class="form-control" id="uno" placeholder="Tasa metabolica actual"></input><br>
														                </div>
														                <div class="form-group">
														               
														                <input type="number" class="form-control" id="dos" placeholder="Fasto energético actual"></input><br>
														                 </div>
														                 <div class="form-group">
														                
														                <input type="number" class="form-control" id="tres" placeholder="Tasa metabolica adecuada"></input><br>
														              </div>
														              <div class="form-group">
														                
														                <input type="number" class="form-control" id="cuatro" placeholder="Gasto energético adecuado"></input><br>
														                </div>
														              </div>
														              <!-- /.box-body -->
														              <div class="box-footer">
														                <button  class="btn btn-default" onclick="limpiar()">Limpiar</button>
														                <button  class="btn btn-info pull-right" onclick="calcular()">Calcular</button>
														              </div>
														              <!-- /.box-footer -->
			</div>
			<div  class="form-group">
								  <div  class="col-sm-7" >
			                                              <button  class="btn btn-primary btn-label-left" onclick="Registrar()">
										Registrar</button>						</div>
								</div>
								  


<?php
include './conexion.php';
$conectar=  conexion();
$id=array();


$result= mysqli_query($conectar,"SELECT * FROM alimentos"); 
			
	while ($registro = mysqli_fetch_array($result)){
								
								
	$id[]= $registro['Nombre'];
}





?>

<script type="text/javascript">

    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arrayJS=<?php echo json_encode($id);?>;
    
    // Mostramos los valores del array
   
	
	var availableTags = arrayJS;
$( "#autocomplete" ).autocomplete({
	source: availableTags
});

$(document).ready(function() {
	// Load TimePicker plugin and callback all time and date pickers
	LoadTimePickerScript(AllTimePickers);
	// Create jQuery-UI tabs
	$("#tabs").tabs();
	// Sortable for elements
	$(".sort").sortable({
		items: "div.col-sm-2",
		appendTo: 'div.box-content'
	});
	// Droppable for example of trash
	$(".drop div.col-sm-2").draggable({containment: '.dropbox' });
	$('#trash').droppable({
		drop: function(event, ui) {
			$(ui.draggable).remove();
		}
	});
	var icons = {
		header: "ui-icon-circle-arrow-e",
		activeHeader: "ui-icon-circle-arrow-s"
	};
	// Make accordion feature of jQuery-UI
	$("#accordion").accordion({icons: icons });
	// Create UI spinner
	$("#ui-spinner").spinner();
	// Add Drag-n-Drop to boxes
	WinMove();
});


</script>	
