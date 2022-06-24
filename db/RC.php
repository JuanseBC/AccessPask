<?php
$con= mysqli_connect ('localhost','root','','accesspask');
$cur=$_POST["cur"];
$sql="INSERT INTO cursos_ (idCurso) VALUES('$cur')";
$resultado=mysqli_query ($con,$sql) ;
mysqli_close($con);

if($resultado){
    header("location:../vistas/Cursos.php");
}
?>