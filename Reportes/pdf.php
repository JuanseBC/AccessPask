<?php
require('verrepor.php');
require("../fpdf/fpdf.php");
$pdf=new PDF_php();

$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);

$pdf->AddPage();
$pdf->Image('logo.png',18,13,33);
$pdf->SetFont('Arial','B',14);
$pdf->WriteHTML('<para><h1>Programacion.net</h1><br>
Website: <u>www.programacion.net</u></para><br><br>How to Convert HTML to PDF with fpdf example');
$pdf->Write(7, "reportes de los estudiantes");
$pdf->SetFont('Arial','B',7); 
$htmlTable='<TABLE>

            <table>
            <td style="width: 1330px ;">Documento</td>
            <td style="width: 1330px ;">hora de ingreso</td>
            <td style="width: 1330px ;">hora de salida</td>
            <center>
</TABLE>';
$htmlTable='<TABLE>

        </TR>

        <?php foreach ($pro as $dato) {?>
         
        <tr style="width: 1330px ;">   
        <td style="width: 1330px ;"> <?php echo  $dato["documento"] ?></td>  
        <td style="width: 1330px ;"> <?php echo  $dato["hin"]  ?></td>
        <td style="width: 1330px ;"> <?php echo  $dato["hsa"]  ?></td>
    
        <?php } ?>
    <?php
    </TABLE>';

$pdf->WriteHTML2("<br><br><br>$htmlTable");
$pdf->SetFont('Arial','B',6);
$pdf->Output(); 
?>
