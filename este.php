<?php



    $content = '
        
               

<page>
             




		

    <div align="center"><label>NUTRICOL</label><br>
    <label>Reporte Generado para el paciente</label></div><br><br><br><br>
    <div> <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre:  Jorge</label><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martinez </label> 
    </div>








</page>';

    require_once(dirname(__FILE__).'/html2pdf_v4.03/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('exemple.pdf');
?>

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
				
                                
			</div>
		</div>
	</div>