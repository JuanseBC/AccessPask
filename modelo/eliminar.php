<?php
include("../db/db1.php");
$con=conexion();

$id2=$_GET["id1"];
$q="UPDATE usuario SET idEst = 2 WHERE usuario.documento = $id2";
$borrar=mysqli_query($con, $q);
if($borrar){
    echo"Registro inactivado";
    Header("Location: ../vistas/Cursos.php");
}