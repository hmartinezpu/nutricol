
<?php
session_start();
if (!$_SESSION) {
    echo '<script language = javascript>
alert("usuario no autenticado")
self.location = "index.php"
</script>';


}
 echo '<script language = javascript>



</script>';




?><!--Start Breadcrumb-->
<script>

window.onload = function(){
if("<?php echo $_SESSION["login"]; ?>"!="lenamoron"){	
var cedula=<?php echo $_SESSION["login"]; ?>;

dieta2(cedula);
}



}





function dieta2(cod){
        $('#dietaa').slideUp('slow',function(){
       
    
  

loadDoc4("vcod="+cod,"procesodieta.php",function(){
	alert(cod);

  if (xmlhttp4.readyState==4 && xmlhttp4.status==200){
  	alert(xmlhttp4.responseText);

    document.getElementById("dietaa").innerHTML=xmlhttp4.responseText;
      
    }else{ document.getElementById("dietaa").innerHTML='<img src="load.gif" width="50" height="50" />'; }

  });
    
    
    
 });
$('#dietaa').slideDown('slow');
          
      }



      </script>



<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Inicio</a></li>
			<li><a href="#">Panel de control</a></li>
		</ol>
		<div id="social" class="pull-right" style="margin-top:10px;">
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</div>
<!--End Breadcrumb-->
<!--Start Dashboard 1-->
<div id="dashboard-header" class="row" style="margin : 0px;">
	

		 <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Proteinas</span>
              <span class="info-box-number">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"></span>
              <span class="info-box-number">Carbohidratos</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

       
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Grasas</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

<!--End Dashboard 1-->
<!--Start Dashboard 2-->


				    <div class="col-xs-12 col-sm-12">
          <div class="box box-success">
            <div class="box-header with-border">
				<div class="box-name">
					<i class="fa fa-circle"></i>
					<span>Dieta Sugerida</span>
				</div>
				<div class="box-icons" >
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content"  style="height: 1000px;" id="grafo" >
			
                            
 						<div id="dietaa" align="justify" style="width:100%; height:150px;font-size:11px;"></div>	
				
			</div>
		</div>
	</div>
		</div>
	</div>







			</div>
			<div class="col-xs-12 col-md-6">
				
				<div id="ow-activity" class="row">
					<div class="col-xs-2 col-sm-1 col-md-2">
						<div class="v-txt" style="width:50%">Actividad</div>

						<section class="col-lg-5 connectedSortable">

          <!-- /.box -->

       						 </section>
					</div>
					
					
				</div>
				
			</div>
		</div>

				
				
		


		<!--End Dashboard Tab 1-->
		<!--Start Dashboard Tab 2-->
		<div id="dashboard-clients" class="row" style="visibility: hidden; position: absolute;">
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-users"></i></div>
				<div class="col-xs-2"><b>Country</b></div>
				<div class="col-xs-2">Visitors</div>
				<div class="col-xs-2">Page hits</div>
				<div class="col-xs-2">Revenue</div>
				<div class="col-xs-1">Activity</div>
				<div class="col-xs-2">Date</div>
			</div>
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-user"></i></div>
				<div class="col-xs-2"><b>USA</b></div>
				<div class="col-xs-2">109455</div>
				<div class="col-xs-2">54322344</div>
				<div class="col-xs-2"><i class="fa fa-usd"></i> 354563</div>
				<div class="col-xs-1"><span class="bar"></span></div>
				<div class="col-xs-2 message-date">12/31/13</div>
			</div>
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-user"></i></div>
				<div class="col-xs-2"><b>U.K.</b></div>
				<div class="col-xs-2">86549</div>
				<div class="col-xs-2">43242344</div>
				<div class="col-xs-2"><i class="fa fa-usd"></i> 265563</div>
				<div class="col-xs-1"><span class="bar"></span></div>
				<div class="col-xs-2 message-date">12/25/13</div>
			</div>
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-user"></i></div>
				<div class="col-xs-2"><b>FRANCE</b></div>
				<div class="col-xs-2">79399</div>
				<div class="col-xs-2">45376844</div>
				<div class="col-xs-2"><i class="fa fa-usd"></i> 309456</div>
				<div class="col-xs-1"><span class="bar"></span></div>
				<div class="col-xs-2 message-date">12/30/13</div>
			</div>
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-user"></i></div>
				<div class="col-xs-2"><b>GERMANY</b></div>
				<div class="col-xs-2">94567</div>
				<div class="col-xs-2">35322344</div>
				<div class="col-xs-2"><i class="fa fa-usd"></i> 301040</div>
				<div class="col-xs-1"><span class="bar"></span></div>
				<div class="col-xs-2 message-date">12/26/13</div>
			</div>
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-user"></i></div>
				<div class="col-xs-2"><b>CANADA</b></div>
				<div class="col-xs-2">89525</div>
				<div class="col-xs-2">1342344</div>
				<div class="col-xs-2"><i class="fa fa-usd"></i> 298764</div>
				<div class="col-xs-1"><span class="bar"></span></div>
				<div class="col-xs-2 message-date">12/30/13</div>
			</div>
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-user"></i></div>
				<div class="col-xs-2"><b>CHINA</b></div>
				<div class="col-xs-2">120865</div>
				<div class="col-xs-2">43522344</div>
				<div class="col-xs-2"><i class="fa fa-usd"></i> 776563</div>
				<div class="col-xs-1"><span class="bar"></span></div>
				<div class="col-xs-2 message-date">12/29/13</div>
			</div>
		</div>
		<!--End Dashboard Tab 2-->
		<!--Start Dashboard Tab 3-->
		<div id="dashboard-graph" class="row" style="width:100%; visibility: hidden; position: absolute;" >
			<div class="col-xs-12">
				<h4 class="page-header">OS Platform Statistics</h4>
				<div id="stat-graph" style="height: 300px;"></div>
			</div>
		</div>
		<!--End Dashboard Tab 3-->
		<!--Start Dashboard Tab 4-->
		<div id="dashboard-servers" class="row" style="visibility: hidden; position: absolute;">
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-windows"></i>#SRV-APP</h4>
				<small>Application server</small>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-1" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">CPU Load
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><i class="fa fa-windows"></i> Windows 2008</div>
						<div class="row"><i class="fa fa-user"></i> Active users - 49</div>
						<div class="row"><i class="fa fa-bolt"></i> Uptime - 10 days</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-windows"></i>#DB-MASTER</h4>
				<small>SQL server</small>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-2" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">CPU Load
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><i class="fa fa-windows"></i> Windows 2013</div>
						<div class="row"><i class="fa fa-user"></i> Active users - 39</div>
						<div class="row"><i class="fa fa-bolt"></i> Uptime - 2 month 1 day</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-linux"></i>#DB-WEB</h4>
				<small>MySQL server</small>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-3" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">CPU Load
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><i class="fa fa-linux"></i> CentOS 6.5</div>
						<div class="row"><i class="fa fa-user"></i> Active users - 298</div>
						<div class="row"><i class="fa fa-bolt"></i> Uptime - 9 month 17 day</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-linux"></i>#WWW-SRV</h4>
				<small>Web-server</small>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-4" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">CPU Load
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><i class="fa fa-linux"></i> Centos 6.5</div>
						<div class="row"><i class="fa fa-user"></i> Active users - 1989</div>
						<div class="row"><i class="fa fa-bolt"></i> Uptime - 2 years 3 month</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-linux"></i>#PHONE-OFFICE</h4>
				<small>Asterisk</small>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-5" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">CPU Load
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><i class="fa fa-linux"></i> Debian 6.4</div>
						<div class="row"><i class="fa fa-phone"></i> Active calls - 86</div>
						<div class="row"><i class="fa fa-bolt"></i> Uptime - 3 month 19 day</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-linux"></i>#DEVEL</h4>
				<small>DEV server</small>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-6" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">CPU Load
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><i class="fa fa-linux"></i> CentOS 6.5</div>
						<div class="row"><i class="fa fa-archive"></i> Repositories - 17</div>
						<div class="row"><i class="fa fa-bolt"></i> Uptime - 4 month 21 day</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div id="ow-server-footer">
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-sun-o"></i> <b>287</b> <span>Hosts</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-envelope-o"></i> <b>56</b> <span>Messages</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-desktop"></i> <b>85</b> <span>Stations</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-info-circle"></i> <b>33</b> <span>Errors</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-comments-o"></i> <b>1386</b> <span>Comments</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-user"></i> <b>19985</b> <span>Clients</span></a>
			</div>
		</div>
		<!--End Dashboard Tab 4-->
		<!--Start Dashboard Tab 5-->
		
		<!--End Dashboard Tab 5-->
		<!--Start Dashboard Tab 6-->
		<div id="dashboard-netmap" class="row" style="visibility: hidden; position: absolute;">
			<div class="col-xs-12">
				<h4 class="page-header">Network map(mesh topology)</h4>
				<canvas id="springy-demo" width="900" height="480" />
			</div>
		</div>
		<!--End Dashboard Tab 6-->
		<!--Start Dashboard Tab 7-->
		<div id="dashboard-stock" class="row" style="visibility: hidden; position: absolute;">
			<div class="col-xs-12">
				<h4 class="page-header">Stocks from Yahoo Finance</h4>
				<div id="inputSymbol">
					<p>Enter Stock</p>
					<input id="txtSymbol" class="required" Placeholder="Symbol" />
					<input id="startDate" class="datePick required" type="text"  Placeholder="From" />
					<input id="endDate" class="datePick" type="text" Placeholder="To"  />
					<button id="submit">Submit</button>
				</div>
				<div class="realtime" style="margin-top:40px;">
					<div class="col-xs-6"><p>Name</p><span id="symbol"></span></div>
					<div class="col-xs-6"><p>RealtimeBid</p><span id="bidRealtime"></span></div>
				</div>
				<div class="historical">
					<div class="col-xs-6"><p>Date</p><div id="date"></div></div>
					<div class="col-xs-6"><p>Price</p><div id="closeValue"></div></div>
				</div>
			</div>
		</div>
		<!--End Dashboard Tab 7-->
	</div>
	<div class="clearfix"></div>
</div>
<!--End Dashboard 2 -->
<div style="height: 40px;"></div>
<script type="text/javascript">
// Array for random data for Sparkline
var sparkline_arr_1 = SparklineTestData();
var sparkline_arr_2 = SparklineTestData();
var sparkline_arr_3 = SparklineTestData();
$(document).ready(function() {
	// Make all JS-activity for dashboard
	DashboardTabChecker();
	// Load Knob plugin and run callback for draw Knob charts for dashboard(tab-servers)
	LoadKnobScripts(DrawKnobDashboard);
	// Load Sparkline plugin and run callback for draw Sparkline charts for dashboard(top of dashboard + plot in tables)
	LoadSparkLineScript(DrawSparklineDashboard);
	// Load Morris plugin and run callback for draw Morris charts for dashboard
	LoadMorrisScripts(MorrisDashboard);
	// Load Springy plugin and run callback for draw network map for dashboard
	LoadSpringyScripts(SpringyNetmap);
	// Make beauty hover in table
	$("#ticker-table").beautyHover();
	// Run script for stock block
	CreateStockPage();
});
</script>
<script type="text/javascript">
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
