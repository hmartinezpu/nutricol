<?php

ob_start();
require_once 'mail/AttachMailer.php';

?>
<style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }

-->
</style>
<?php
$cc=$_GET['cc'];
$nom=$_GET['nom'];
$ape=$_GET['ape'];
$cor=$_GET['cor'];
$tel=$_GET['tel'];
$imc=$_GET['imc'];
$cal=$_GET['cal'];
$peso=$_GET['peso'];
$inter=$_GET['inter'];
$indice=$_GET['indice'];
$masac=$_GET['masac'];
$masag=$_GET['masag'];
$masav=$_GET['masav'];
$tazam=$_GET['tazam'];
$act=$_GET['act'];
$dieta=$_GET['diet'];
?>
<page backcolor="#FEFEFE" backimg="./res/bas_page.png" backimgx="center" backimgy="bottom" backimgw="100%" backtop="0" backbottom="30mm" footer="date;heure;page" style="font-size: 12pt">
    <bookmark title="Lettre" level="0" ></bookmark>
    <table cellspacing="0" style="width: 100%; text-align: center; font-size: 14px">
        <tr>
            <td style="width: 75%;">
            </td>
            <td style="width: 25%; color: #444444;">
                <img style="width: 100%;" src="Logo.png" alt="Logo"><br>
                INFORME DE VALORACION
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Paciente :<?php echo $nom.' '.$ape ?>  </td>
            <td style="width:36%"></td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">C.C. :</td>
            <td style="width:36%">
                <?php echo $cc ?><br>
               
            </td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Email :</td>
            <td style="width:36%"><?php echo $cor ?></td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Tel :</td>
            <td style="width:36%"><?php echo $tel ?></td>
        </tr>
    </table>
    <br>
    <br>
    <table cellspacing="0" style="width: 100%; text-align: left;font-size: 10pt">
        <tr>
            <td style="width:50%;"></td>
            <td style="width:50%; ">Cartagena, Colombia <?php echo date('d/m/Y'); ?></td>
        </tr>
    </table>
    <br>
    <i>
        <b><u>Datos personales </u>: &laquo; Resultados &raquo;</b><br>
        Referencia del informe : 00C4520100A<br>
       
    </i>
    <br>
    <br>
    Sr.<br>
    <br>
    <br>
   A continuacion se encuentran algunos datos importantes para la valoracion del paciente <b><?php echo $nom.' '.$ape ?> </b> cteniendo en cuenta aspectos como estado fisiologico, estatura, sexo , peso.<br>
    <br>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 32%">Datos Personales</th>
            <th style="width: 32%"></th>
            <th style="width: 23%"></th>
            
            <th style="width: 13%"></th>
            
        </tr>
    </table>


    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #F7F7F7; text-align: center; font-size: 10pt;">
        <tr>
            <td style="width: 34%; text-align: left">Nombre :</td>
            <td style="width: 30%; text-align: left"><?php echo $nom.' '.$ape; ?></td>
           
            <td style="width: 23%; text-align: left">Masa grasa :</td>
            <td style="width: 13%; text-align: right;"><?php echo $masag; ?></td>
           
        </tr>
        <tr>
            <td style="width: 34%; text-align: left">C.C. :</td>
            <td style="width: 30%; text-align: left"><?php echo $cc; ?></td>
            
            <td style="width: 23%; text-align: left">Masa viceral :</td>
            <td style="width: 13%; text-align: right;"><?php echo $masav; ?></td>
           
        </tr>
        
         <tr>
            <td style="width: 34%; text-align: left">Celular :</td>
            <td style="width: 30%; text-align: left"><?php echo $tel; ?></td>
           
            <td style="width: 23%; text-align: left">Indice de masa corporal :</td>
            <td style="width: 13%; text-align: right;"><?php echo $indice; ?></td>
           
        </tr>
        <tr>
            <td style="width: 34%; text-align: left">Correo :</td>
            <td style="width: 30%; text-align: left"><?php echo $cor; ?></td>
            
            <td style="width: 23%; text-align: left">Taza metabolica basal :</td>
            <td style="width: 13%; text-align: right;"><?php echo $tazam; ?></td>
           
        </tr>
        <tr>
            <td style="width: 34%; text-align: left">Maza corporal :</td>
            <td style="width: 30%; text-align: left"><?php echo $masac; ?></td>
            
            <td style="width: 23% ; text-align: left">Grado de actividad fisica</td>
            <td style="width: 13%; text-align: right;"><?php echo $act; ?></td>
           
        </tr>
        
    </table>
<?php
    
?>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
           <th style="width: 87%; text-align: right;"></th>
            <th style="width: 13%; text-align: right;">Valoracion </th>
        </tr>
    </table>
    
    <?php
    echo $imc;
    ?>
    
   
    <?php
    echo $cal;
    ?>
    <?php
    echo $peso;
    echo $inter;
    ?>
   <nobreak>
        
     
    
        <br>
        <table cellspacing="0" style="width: 100%; text-align: left;">
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%; ">
                    Dra.Lena Moron<br>
                    Nutricionista Dietista<br>
                    Tel : ##############<br>
                    Email : XXXXXX@XXXXX.XXXX<br>
                </td>
            </tr>
        </table>
    </nobreak>
</page>
<page orientation="paysage" >
    <bookmark title="Document" level="0" ></bookmark>
    <a name="document_reprise"></a>
    <table cellspacing="0" style="width: 100%;">
        <tr>
            <td style="width: 10%;">
                <img style="width: 100%" src="Logo.png" alt="Logo HTML2PDF" >
            </td>
            <td style="width: 80%; text-align: center; text-decoration: underline; font-weight: bold; font-size: 20pt;">
                <span style="font-size: 10pt"><br></span>
                DIETA
            </td>
            <td style="width: 10%;">
            </td>
        </tr>
    </table>
    <?php
            echo $dieta;
            ?>
    <table cellspacing="0" style="width: 100%; border: solid 2px #000000; text-align: left; font-size: 10pt">
                    <tr>
                        <th style="width: 30%;">
                           Firma<br>
                           paciente <br>
                            &nbsp;<br>
                            &nbsp;<br>
                        </th>
                        <td style="width: 70%;">
                        </td>
                    </tr>
                </table>
 <table cellspacing="0" style="width: 100%; border: solid 2px #000000; text-align: left; font-size: 10pt">
                    <tr>
                        <td style="width: 30%"></td>
                        <td style="width: 40%">Firma Nutricionista</td>
                        <td style="width: 30%"></td>
                    </tr>
                    <tr>
                        <td style="width: 30%"><br><br</td>
                        <td style="width: 40%"></td>
                        <td style="width: 30%"><br><br></td>
                    </tr>
                </table>
    
</page>

<?php
 $content = ob_get_clean();

    // convert to PDF
    require_once(dirname(__FILE__).'../html2pdf_v4.03/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->pdf->SetDisplayMode('fullpage');
//      $html2pdf->pdf->SetProtection(array('print'), 'spipu');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('Reporte.pdf');
       
    }
    catch(HTML2PDF_exception $e) {
        echo "<script>alert('Error al generar');</script>";
        exit;
    }


?>