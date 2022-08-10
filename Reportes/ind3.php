<?php 
$conn = mysqli_connect("localhost","root","") or  
die(mysql_error()); 
 mysqli_select_db($conn,"accesspask"); 
        $consulta= "SELECT documento,Nombre,Apellido,correo FROM usuario where idRol=2";

        $filas=mysqli_query($conn, $consulta);

require('../fpdf/fpdf.php'); 
$pdf = new FPDF(); 

$pdf->AddPage(); 
$pdf->SetDrawColor(0,0,0);
$pdf->SetFillColor(245,245,245);
    $pdf->SetTextColor(0,0,0);
$pdf->SetFont("Arial", "b", 12);
$pdf->Cell(100,11,"Control AccessPask","","C","true"); 
$pdf->Image('../img/pask.png',160,10,-260);

$pdf->Write(20, "\n\n                                       Informe Docentes  \n");

$pdf->Write(20, "\n_________________________________________________________________________ \n");
$pdf->Write(8, "      Documento                       Nombre                         Apellido                          Correo");

$pdf->SetFont('Arial','b',12); 


while($rows = mysqli_fetch_assoc($filas)) { 

$pdf->SetFont('Arial','b',10); 
$pdf->Ln(); 
foreach($rows as $column) { 
$pdf->Cell(45,11,$column,1,"","C","true"); 
 } 
 } 
$pdf->Output(); 
 ?>
