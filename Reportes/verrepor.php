<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<section>
    <table  class="table table-dark table-striped table-fixed" style="text-align:  center;">
        <TR style="width: 1330px ;">
            <center>
           <h2>reportes de los estudiantes<h2>
            <td style="width: 133px ; border:1%;">Documento</td>
            <td style="width: 133px ; border:1%;">Nombre</td>
            <td style="width: 133px ; border:1%;">Apellido</td>
            <td style="width: 133px ; border:1%;">Fecha</td>
            <td style="width: 133px ; border:1%;">hora de ingreso</td>
            <td style="width: 133px ; border:1%;">hora de salida</td>

            <center>

        </TR>

        <?php foreach ($pro as $dato) {?>

        <tr style="width: 133px ;">   
        <td style="width: 133px ;border:1%;"><?php echo  $dato["documento"] ?></td>  
        <td style="width: 133px ;border:1%;"><?php echo  $dato["Nombre"]  ?></td>
        <td style="width: 133px ;border:1%;"><?php echo  $dato["Apellido"]  ?></td>
        <td style="width: 133px ;border:1%;"><?php echo  $dato["Fecha"]  ?></td>   
        <td style="width: 133px ;border:1%;"><?php echo  $dato["hin"]  ?></td>
        <td style="width: 133px ;border:1%;"><?php echo  $dato["hsa"]  ?></td>

        

    
        <?php } ?>
    </table>
</section>
</center>
</body>
</html>
<?php

$html= ob_get_clean();
//echo $html;
require_once '../libre/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf= new Dompdf();
$dompdf->loadHtml($html);
$dompdf-> setPaper('letter');
$dompdf ->render();
$dompdf->stream("reporte_consulta.pdf", array("Attachment" => false));

?>