<?php 
    include("../db/db1.php");
    $con=conexion();

$id=$_POST['f'];

$consulta= "SELECT * FROM usuario where idRol=3 and Nombre like '%$id%' or Apellido like '%$id%'";
    
$filas=mysqli_query($con, $consulta);

  

$produc=$filas;

include("../vistas/buscar2.php");

?>
