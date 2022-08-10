<?php
 include("../db/db1.php");
    $con=conexion();


      $sele=$_POST['Cursos'];
     
   
$sql="INSERT INTO asignacion(docu, Curso)
VALUES(468546789,'$sele')";
$resultado=mysqli_query ($con,$sql) ;
mysqli_close($con);
if($resultado){
    header("location:../controlador/ConMaes.php");
}
?> 