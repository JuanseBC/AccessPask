<?php
include("../db/db1.php");
$con=conexion();

$id2=$_GET["id1"];
$q="delete from usuario where idusu=$id2";
$borrar=mysqli_query($con, $q);
if($borrar){
    echo"Registro inactivado";
    Header("Location: ../vistas/ADM.html");
}