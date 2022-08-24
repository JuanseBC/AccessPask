<?php 
    include("../db/db1.php");
    include("../formatos/cerrse.php"); 
    $con=conexion();

$id=$_GET['id'];

$l2=$_SESSION['usuario']; 



$consulta= "SELECT * FROM excusas where documento='$id' and Docu_Dest='$l2'";   
$filas=mysqli_query($con, $consulta);
$produc=$filas;

include("../vistas/mirEX.php");

?>

