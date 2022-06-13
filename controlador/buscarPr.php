<HTml:5>

<body style="background: rgb(255,244,0);
background: linear-gradient(180deg, rgba(255,244,0,1) 0%, rgba(0,0,0,1) 100%);">
<?php 
    include("../db/db1.php");
    $con=conexion();

$id=$_POST['f'];

$consulta= "SELECT * FROM usuario where idRol=2 and Nombre like '%$id%' or Apellido like '%$id%'";
    
$filas=mysqli_query($con, $consulta);

  

$sole=$filas;

include("../vistas/buscaPr.php");

?>
</body>
</HTml:5>