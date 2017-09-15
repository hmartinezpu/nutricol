<?php
ob_start();

?>
<style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }

-->
</style>
<page backcolor="#FEFEFE" backimg="./res/bas_page.png" backimgx="center" backimgy="bottom" backimgw="100%" backtop="0" backbottom="30mm" footer="date;heure;page" style="font-size: 12pt">
    <bookmark title="Lettre" level="0" ></bookmark>
    <table cellspacing="0" style="width: 100%; text-align: center; font-size: 14px">
        <tr>
            <td style="width: 75%;">
            </td>
            <td style="width: 25%; color: #444444;">
                <img style="width: 100%;" src="./res/Logo.png" alt="Logo"><br>
                INFORME DE VALORACION
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Client :</td>
            <td style="width:36%">M. Albert Dupont</td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Adresse :</td>
            <td style="width:36%">
                Résidence perdue<br>
                1, rue sans nom<br>
                00 000 - Pas de Ville<br>
            </td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Email :</td>
            <td style="width:36%">nomail@domain.com</td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Tel :</td>
            <td style="width:36%">33 (0) 1 00 00 00 00</td>
        </tr>
    </table>
    <br>
    <br>
    <table cellspacing="0" style="width: 100%; text-align: left;font-size: 10pt">
        <tr>
            <td style="width:50%;"></td>
            <td style="width:50%; ">Spipu Ville, le <?php echo date('d/m/Y'); ?></td>
        </tr>
    </table>
    <br>
    <i>
        <b><u>Objet </u>: &laquo; Bon de Retour &raquo;</b><br>
        Compte client : 00C4520100A<br>
        Référence du Dossier : 71326<br>
    </i>
    <br>
    <br>
    Madame, Monsieur, Cher Client,<br>
    <br>
    <br>
    Nous souhaitons vous informer que le dossier <b>71326</b> concernant un &laquo; Bon de Retour &raquo; pour les articles suivants a été accepté.<br>
    <br>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 12%">Produit</th>
            <th style="width: 52%">Désignation</th>
            <th style="width: 13%">Prix Unitaire</th>
            <th style="width: 10%">Quantité</th>
            <th style="width: 13%">Prix Net</th>
        </tr>
    </table>
<?php
    $nb = rand(5, 11);
    $produits = array();
    $total = 0;
    for ($k=0; $k<$nb; $k++) {
        $num = rand(100000, 999999);
        $nom = "le produit n°".rand(1, 100);
        $qua = rand(1, 20);
        $prix = rand(100, 9999)/100.;
        $total+= $prix*$qua;
        $produits[] = array($num, $nom, $qua, $prix, rand(0, $qua));
?>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #F7F7F7; text-align: center; font-size: 10pt;">
        <tr>
            <td style="width: 12%; text-align: left"><?php echo $num; ?></td>
            <td style="width: 52%; text-align: left"><?php echo $nom; ?></td>
            <td style="width: 13%; text-align: right"><?php echo number_format($prix, 2, ',', ' '); ?> &euro;</td>
            <td style="width: 10%"><?php echo $qua; ?></td>
            <td style="width: 13%; text-align: right;"><?php echo number_format($prix*$qua, 2, ',', ' '); ?> &euro;</td>
        </tr>
    </table>
<?php
    }
?>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 87%; text-align: right;">Total : </th>
            <th style="width: 13%; text-align: right;"><?php echo number_format($total, 2, ',', ' '); ?> &euro;</th>
        </tr>
    </table>
    <br>
    Cette reprise concerne la quantité et les matériels dont la référence figure sur le <a href="#document_reprise">document de reprise joint</a>.<br>
    Nous vous demandons de nous retourner ces produits en parfait état et dans leur emballage d'origine.<br>
    <br>
    Nous vous demandons également de coller impérativement l'autorisation de reprise jointe, sur le colis à reprendre afin de faciliter le traitement à l'entrepôt.<br>
    <br>
    Notre Service Clients ne manquera pas de revenir vers vous dès que l'avoir de ces matériels sera établi.<br>
    <nobreak>
        <br>
        Dans cette attente, nous vous prions de recevoir, Madame, Monsieur, Cher Client, nos meilleures salutations.<br>
        <br>
        <table cellspacing="0" style="width: 100%; text-align: left;">
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%; ">
                    Mle Jesuis CELIBATAIRE<br>
                    Service Relation Client<br>
                    Tel : 33 (0) 1 00 00 00 00<br>
                    Email : on_va@chez.moi<br>
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
                <img style="width: 100%" src="./res/logo.gif" alt="Logo HTML2PDF" >
            </td>
            <td style="width: 80%; text-align: center; text-decoration: underline; font-weight: bold; font-size: 20pt;">
                <span style="font-size: 10pt"><br></span>
                ACCORD DE RETOUR
            </td>
            <td style="width: 10%;">
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 100%;">
        <tr>
            <td style="width: 55% ">
                <table cellspacing="0" style="width: 100%; border: solid 2px #000000; ">
                    <tr>
                        <td style="width: 100%; font-size: 12pt;">
                            <span style="font-size: 15pt; font-weight: bold;">ADRESSE DE RETOUR<br></span>
                            <br>
                            <b>Entrepot des Bois</b><br>
                            sur une grande route<br>
                            00000 - Spipu Ville<br>
                            <br>
                            Date : <?php echo date('d/m/Y'); ?><br>
                            Dossier suivi par <b>Mle Jesuis CELIBATAIRE</b><br>
                            Tel : 33 (0) 1 00 00 00 00<br>
                            Email : on_va@chez.moi<br>
                        </td>
                    </tr>
                </table>
                <br>&nbsp;
            </td>
            <td style="width: 4%"></td>
            <td style="width: 37% ">
                <table cellspacing="0" style="width: 100%; border: solid 2px #000000; font-size: 12pt;">
                    <tr><td style="width: 40%;">Référence :        </td><td style="width: 60%;">71326</td></tr>
                    <tr><td style="width: 40%;">Client :        </td><td style="width: 60%;">M. Albert Dupont</td></tr>
                    <tr><td style="width: 40%;">Adresse :        </td><td style="width: 60%;">Résidence perdue<br>1, rue sans nom<br>00 000 - Pas de Ville</td></tr>
                    <tr><td style="width: 40%;">TEL :             </td><td style="width: 60%;">33 (0) 1 00 00 00 00</td></tr>
                    <tr><td style="width: 40%;">FAX :            </td><td style="width: 60%;">33 (0) 1 00 00 00 01</td></tr>
                    <tr><td style="width: 40%;">Code Client    :    </td><td style="width: 60%;">00C4520100A</td></tr>
                </table>
                <table cellspacing="0" style="width: 100%; border: solid 2px #000000">
                    <tr>
                        <th style="width: 40%;">Motif de la Reprise</th>
                        <td style="width: 60%;">Produit non Conforme</td>
                    </tr>
                </table>
                <br>
            </td>
            <td style="width: 4%"></td>
        </tr>
        <tr>
            <td style="width:55%;">
                <table cellspacing="0" style="padding: 1px; width: 100%; border: solid 2px #000000; font-size: 11pt; ">
                    <tr>
                        <th style="width: 100%; text-align: center; border: solid 1px #000000;" colspan="4">
                            Partie réservée à Spipu Corp
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100%; text-align: center; border: solid 1px #000000;" colspan="4">
                            QUANTITE PREVUE AU CHARGEMENT
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 15%; border: solid 1px #000000;">Produit</th>
                        <th style="width: 55%; border: solid 1px #000000;">Designation</th>
                        <th style="width: 15%; border: solid 1px #000000;">Neuf</th>
                        <th style="width: 15%; border: solid 1px #000000;">Abîmé</th>
                    </tr>
<?php
$i=0;
foreach ($produits as $produit) {
    $i++;
?>
                    <tr>
                        <td style="width: 15%; border: solid 1px #000000;"><?php echo $produit[0];        ?></td>
                        <td style="width: 55%; border: solid 1px #000000;text-align: left;"><?php echo $produit[1];        ?></td>
                        <td style="width: 15%; border: solid 1px #000000;"><?php echo $produit[4];        ?></td>
                        <td style="width: 15%; border: solid 1px #000000;"><?php echo $produit[2]-$produit[4];        ?></td>
                    </tr>

<?php
}
for ($i; $i<12; $i++) {
?>
                    <tr>
                        <td style="width: 15%; border: solid 1px #000000;">&nbsp;</td>
                        <td style="width: 55%; border: solid 1px #000000;">&nbsp;</td>
                        <td style="width: 15%; border: solid 1px #000000;">&nbsp;</td>
                        <td style="width: 15%; border: solid 1px #000000;">&nbsp;</td>
                    </tr>
<?php
}
?>
                </table>
                <br>
                <table cellspacing="0" style="width: 100%; text-align: left; font-size: 8pt">
                    <tr>
                        <td style="width: 100%">
                            <b><u>Conditions des Retours</u></b><br>
                            1 - il faut des conditions<br>
                            2 - encore des conditions<br>
                            3 - toujours des conditions<br>
                        </td>
                    </tr>
                </table>
                <br>
                <table cellspacing="0" style="width: 100%; border: solid 2px #000000; text-align: center; font-size: 10pt">
                    <tr>
                        <td style="width: 30%"></td>
                        <td style="width: 40%">ACCORD SOCIETE</td>
                        <td style="width: 30%"></td>
                    </tr>
                    <tr>
                        <td style="width: 30%"><br><br>M. XX</td>
                        <td style="width: 40%"></td>
                        <td style="width: 30%"><br><br>Mme XY</td>
                    </tr>
                </table>
            </td>
            <td style="width: 4%"></td>
            <td style="width: 37%;">
                <table cellspacing="0" style="padding: 1px; width: 100%; border: solid 2px #000000; font-size: 11pt; ">
                    <tr>
                        <th style="width: 100%; text-align: center; border: solid 1px #000000;" colspan="2">
                            Partie réservée à l'entrepôt
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100%; text-align: center; border: solid 1px #000000;" colspan="2">
                            QUANTITE PREVUE AU CHARGEMENT
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 50%; border: solid 1px #000000;">Produit neuf                </th>
                        <th style="width: 50%; border: solid 1px #000000;">Produit à reconditionner    </th>
                    </tr>
<?php
    for ($i=0; $i<12; $i++) {
?>
                    <tr>
                        <td style="width: 50%; border: solid 1px #000000;">&nbsp;</td>
                        <td style="width: 50%; border: solid 1px #000000;">&nbsp;</td>
                    </tr>
<?php
    }
?>
                </table>
                <br>
                <table cellspacing="0" style="width: 100%; border: solid 2px #000000; text-align: left; font-size: 10pt">
                    <tr>
                        <th style="width: 30%;">
                            Commentaire<br>
                            Retour :<br>
                            &nbsp;<br>
                            &nbsp;<br>
                        </th>
                        <td style="width: 70%;">
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <span style="font-size: 13pt"><b><u>A COLLER IMPERATIVEMENT SUR LES COLIS</u></b></span>
            </td>
            <td style="width: 4%"></td>
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
        $html2pdf->Output('exemple07.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }


?>