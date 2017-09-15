<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="#">Panel de control</a></li>
			<li><a href="#">Administrar</a></li>
			<li><a href="#">Alimentos</a></li>
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
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					
					<span>Tabla de alimentos</span>
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
			<?php
			include 'conexion.php';





					$con=conexion();
					mysqli_query($con,"SET NAMES 'utf8'");
					$sql="select * from comp_alimentos2 ";

					$res=mysqli_query($con,$sql);

					


			?>
			<div class="box-content no-padding">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
					<thead>
						<tr>
							<th>Código</th>
							<th>Descripción</th>
							<th>Calorias</th>
							<th>Porción</th>
							<th>Grupo</th>
							<th>Peso Neto</th>
							<th>Tiempo de alimentación</th>
						</tr>
					</thead>
					<tbody>
					<!-- Start: list_row -->
					<?php
					 while($fila=mysqli_fetch_array($res)){

					  echo '<tr>
							<td>'.$fila['codigo'].'</td>
							<td>'.$fila['descripcion'].'</td>
							<td>'.$fila['calorias'].'</td>
							<td>'.$fila['porcion'].'</td>
							<td>'.$fila['grupo_a'].'</td>
							<td>'.$fila['peso_neto'].'</td>
							<td>'.$fila['tiempo_alim'].'</td>
						</tr>';

					 


					}

					?>
						
					
					<!-- End: list_row -->
					</tbody>
					<tfoot>
							<tr>
							<th>Código</th>
							<th>Descripción</th>
							<th>Calorias</th>
							<th>Porción</th>
							<th>Grupo</th>
							<th>Peso Neto</th>
							<th>Tiempo de alimentación</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
// Run Datables plugin and create 3 variants of settings
function AllTables(){
	TestTable1();
	TestTable2();
	TestTable3();
	LoadSelect2Script(MakeSelect2);
}
function MakeSelect2(){
	$('select').select2();
	$('.dataTables_filter').each(function(){
		$(this).find('label input[type=text]').attr('placeholder', 'Search');
	});
}
$(document).ready(function() {
	// Load Datatables and run plugin on tables 
	LoadDataTablesScripts(AllTables);
	// Add Drag-n-Drop feature
	WinMove();
});
</script>
