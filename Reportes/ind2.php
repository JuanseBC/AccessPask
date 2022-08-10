<?php 
$conn = mysqli_connect("localhost","root","") or  
die(mysql_error()); 
 mysqli_select_db($conn,"accesspask"); 
             $consu= "SELECT usuario.documento,Nombre,Apellido,idCurso,Correo FROM usuario where  usuario.idCurso='$sele'  " ;
    
             $fi=mysqli_query($con, $consu);

require('../fpdf/fpdf.php'); 
$pdf = new FPDF(); 

$pdf->AddPage(); 
$pdf->SetDrawColor(0,0,0);
$pdf->SetFillColor(245,245,245);
    $pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial", "b", 12);
$pdf->Cell(100,11,"Control AccessPask","","C","true"); 
$pdf->Image('../img/pask.png',160,10,-260);

$pdf->Write(20, "\n\n                                       Informe estudiantes  \n");

$pdf->Write(20, "\n_________________________________________________________________________ \n");
$pdf->Write(8, "     Documento                 Nombre                   Apellido                    curso                      Correo");

$pdf->SetFont('Arial','b',12); 


while($rows = mysqli_fetch_assoc($fi)) { 

$pdf->SetFont('Arial','b',10); 
$pdf->Ln(); 
foreach($rows as $column) { 
$pdf->Cell(38,11,$column,1,"","C","true"); 
 } 
 } 
$pdf->Output(); 
 ?>
