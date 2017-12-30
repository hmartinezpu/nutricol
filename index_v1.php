<?php
session_start();
if (!$_SESSION) {
    echo '<script language = javascript>
alert("Usuario no autenticado")
self.location = "index.html"
</script>';
}
?>


<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
         <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="expires" content="0">
        <meta charset="utf-8">
        <title>App de nutrición y dietetica</title>
        <meta name="description" content="description">
        <meta name="author" content="DevOOPS">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
        <link href="plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
        <link href="plugins/xcharts/xcharts.min.css" rel="stylesheet">
        <link href="plugins/select2/select2.css" rel="stylesheet">
        <link href="plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">
        <link href="css/style_v1.css" rel="stylesheet">
        <link href="plugins/chartist/chartist.min.css" rel="stylesheet">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>
        <script src="plugins/tinymce/tinymce.min.js"></script>
        <script src="plugins/tinymce/jquery.tinymce.min.js"></script>
        <!-- All functions for this theme + document.ready processing -->
        <script src="js/devoops.js"></script>
        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="https://www.amcharts.com/lib/3/xy.js"></script>
        <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <script src='plugins/js/moment.min.js'></script>
            <script src='plugins/js/fullcalendar.min.js'></script>
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
     
        <!-- Font Awesome -->
       
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
 
         <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <script src="ajax3.js"></script>
        <script src="ajax2.js"></script>
        <script src="ajax.js"></script>
        <script src="ajax4.js"></script>
        <script src="ajax5.js"></script>
        <script src="ajax20.js"></script>
        <script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
        <script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>
        <script src="//cdn.jsdelivr.net/alertifyjs/1.9.0/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes/bootstrap.min.css"/>

<!-- 
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                        <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
                        <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
        <![endif]-->
        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="https://www.amcharts.com/lib/3/serial.js"></script>
        <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
        <script>

            function mostrar(cc) {



                $('#imc').slideUp('slow', function () {
                    loadDoc1("vcod=" + cc, "proc7.php", function () {

                        if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {

                            document.getElementById("imc").innerHTML = xmlhttp1.responseText;

                        } else {
                        }



                    });
                });
                $('#imc').slideDown('slow');

            }
            function peso(cc) {


                $('#tm').slideUp('slow', function () {


                    loadDoc2("vcod=" + cc, "proc8.php", function () {

                        if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {

                            document.getElementById("tm").innerHTML = xmlhttp2.responseText;

                        } else {
                        }

                    });

                });
                $('#tm').slideDown('slow');

            }
            function ver(cc) {
                $('#pers').slideUp('slow', function () {



                    loadDoc("vcod=" + cc, "proc6.php", function () {

                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                            document.getElementById("pers").innerHTML = xmlhttp.responseText;

                        } else {
                            document.getElementById("pers").innerHTML = '<img src="load.gif" width="50" height="50" />';
                        }

                    });

                });
                $('#pers').slideDown('slow');


            }

            function sugerido(cc) {
                $('#sug').slideUp('slow', function () {



                    loadDoc3("vcod=" + cc, "proc9.php", function () {

                        if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200) {

                            document.getElementById("sug").innerHTML = xmlhttp3.responseText;

                        } else {
                            document.getElementById("sug").innerHTML = '<img src="load.gif" width="50" height="50" />';
                        }

                    });

                });
                $('#sug').slideDown('slow');


            }


        </script>
        <script>
            function reporte() {
                cc = document.getElementById("document");
                nom = document.getElementById("name");
                ape = document.getElementById("lastn");
                cor = document.getElementById("cor");
                tel = document.getElementById("tel");
                imc = document.getElementById("imc");
                cal = document.getElementById("calorias");
                pes = document.getElementById("peso");
                inter = document.getElementById("in");
                indice = document.getElementById("indice");
                masac = document.getElementById("masac");
                masag = document.getElementById("masag");
                masav = document.getElementById("masav");
                tazam = document.getElementById("tazam");
                act == document.getElementById("act");
                diet= document.getElementById("dieta");;
                window.open("exemple07a.php?cc=" + cc.innerHTML + "&nom=" + nom.innerHTML + "&ape=" + ape.innerHTML + "&cor=" + cor.innerHTML + "&tel=" + tel.innerHTML + "&imc=" + imc.innerHTML + "&cal=" + calorias.innerHTML + "&peso=" + pes.innerHTML + "&inter=" + inter.innerHTML + "&indice=" + indice.innerHTML + "&masac=" + masac.innerHTML + "&masag=" + masag.innerHTML + "&masav=" + masav.innerHTML + "&tazam=" + tazam.innerHTML + "&act=" + act.innerHTML+"&diet="+diet.innerHTML);

            }
        </script>
    </head>
    <body>


        <!--Start Header-->
        <div id="screensaver">
            <canvas id="canvas"></canvas>
            <i class="fa fa-lock" id="screen_unlock"></i>
        </div>
        <div id="modalbox">
            <div class="devoops-modal">
                <div class="devoops-modal-header">
                    <div class="modal-header-name">
                        <span>Basic table</span>
                    </div>
                    <div class="box-icons">
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="devoops-modal-inner">
                </div>
                <div class="devoops-modal-bottom">
                </div>
            </div>
        </div>
        <header class="navbar">
            <div class="container-fluid expanded-panel">
                <div class="row">
                    <div id="logo" class="col-xs-12 col-sm-2">
                        <a href="index_v1.php">App</a>
                    </div>
                    <div id="top-panel" class="col-xs-12 col-sm-10">
                        <div class="row">
                            <div class="col-xs-8 col-sm-4">
                                <div id="search">
                                    <input type="text" placeholder="Buscar"/>
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-8 top-panel-right">
                                <a href="#" class="about">Acerca de</a>

                                <ul class="nav navbar-nav pull-right panel-menu">
                                    <li class="hidden-xs">
                                        <a href="index_v1.php" class="modal-link">
                                            <i class="fa fa-bell"></i>
                                            <span class="badge"></span>
                                        </a>
                                    </li>
                                    <li class="hidden-xs">
                                        <a class="ajax-link" href="ajax/calendar/index.php">
                                            <i class="fa fa-calendar"></i>
                                            <span class="badge"></span>
                                        </a>
                                    </li>
                                   
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle account" data-toggle="dropdown">
                                            <div class="avatar">

                                            </div>
                                            <i class="fa fa-angle-down pull-right"></i>
                                            <div class="user-mini pull-right">
                                                <span class="welcome">Bienvenida,</span>
                                                <span>Lena Moron</span>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>
                                                    <span>Perfil</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-cog"></i>
                                                    <span>Configuracion</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="desconectar_usuario.php">
                                                    <i class="fa fa-power-off"></i>
                                                    <span>Cerrar Sesion</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Header-->
        <!--Start Container-->
        <div id="main" class="container-fluid">
            <div class="row">


    <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



            
                <div id="sidebar-left" class="col-xs-2 col-sm-2">
                    <ul class="nav main-menu">
                        <li>
                            <a href="ajax/dashboard.php" class="active ajax-link">
                                <i class="fa fa-dashboard"></i>
                                <span class="hidden-xs">Dashboard</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">
                                <i class="fa fa-bar-chart-o"></i>
                                <span class="hidden-xs">Pacientes</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="ajax-link" href="ajax/charts_xcharts.php">Buscar</a></li>
                                <li><a class="ajax-link" href="ajax/forms_layouts.php">Registrar</a></li>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">
                                <i class="fa fa-desktop"></i>
                                <span class="hidden-xs">Administrar</span>
                            </a>
                            <ul class="dropdown-menu">
                               
                                <li><a class="ajax-link" href="ajax/ui_jquery-ui.html">Pacientes</a></li>
                                <li><a class="ajax-link" href="ajax/tables_datatables.php">Alimentos</a></li>
                            </ul>
                        </li>






                    </ul>
                </div>
                <!--Start Content-->
                <div id="content" class="col-xs-12 col-sm-10">
                    <div id="about">
                        <div class="about-inner">
                            <h4 class="page-header">Contactanos</h4>
                            <p>Equipo de la App</p>
                            <p>Ivan Ospino- E-Mail - <a href="mailto:ospinovalenzuela@gmail.com">ospinovalenzuela@gmail.com</a></p>
                            <p>Jorge Martinez- E-mail - <a href="mailto:hmartinezpu@gmail.com">hmartinezpu@gmail.com</a></p>
                            <p>Twitter - <a href="http://twitter.com/jorge_3101" target="_blank">http://twitter.com/jorge_0131</a></p>

                        </div>
                    </div>
                    <div class="preloader">
                        <img src="img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
                    </div>
                    <div id="ajax-content"></div>
                </div>
                <!--End Content-->
            </div>
        </div>
        <!--End Container-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!--<script src="http://code.jquery.com/jquery.js"></script>-->
        
    </body>
</html>
