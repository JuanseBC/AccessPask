<?php 
    include("../db/db1.php");
    $con=conexion();

$id=$_GET['id'];

$consulta= "SELECT * FROM excusas where doc='$id'";   
$filas=mysqli_query($con, $consulta);
$produc=$filas;

include("../vistas/mirEX.php");

?>

