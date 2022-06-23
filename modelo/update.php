<?php

include("../db/db1.php");
$con=conexion();

$idusu=$_POST['idusu'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Doc=$_POST['documento'];
$Cur=$_POST['idCur'];

$sql="UPDATE usuario SET  Nombre='$Nombre', Apellido='$Apellido',documento='$Doc', idCurso='$Cur' WHERE documento='$idusu'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../vistas/Cursos.php");
    }
?>