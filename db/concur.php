<?php
$con= mysqli_connect ('localhost','root','','accesspask');
$clave=MD5($_POST["clave"]);
$sql="INSERT INTO usuario(idDoc, documento,  idRol, idCurso , Nombre, Apellido, contraseña, idEst , idCor , correo)
VALUES('".$_POST["Doc"]."', '".$_POST["documento"]."',  '".$_POST["Rol"]."',  '".$_POST["Curso"]."', '".$_POST["nom"]."', '".$_POST["apellido"]."',  '$clave' , '1' , '".$_POST["TC"]."', '".$_POST["correo"]."' )";
$resultado=mysqli_query ($con,$sql) ;
mysqli_close($con);
if($resultado){
    header("location:../vistas/Cursos.php");
}
?>