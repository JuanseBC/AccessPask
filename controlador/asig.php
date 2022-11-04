<?php
error_reporting(0);
include("../db/db1.php");
    $con=conexion();


      $sele=$_POST['Cursos'];
      $SD=$_POST['documento'];
   
   $lqs="SELECT docu,Curso FROM asignacion ";
   $result=mysqli_query ($con,$lqs) ;

   $las="SELECT documento FROM usuario where idRol=2";
   $result=mysqli_query ($con,$lqs) ;
 
   foreach($resut as $kuy){
      $m=  $kuy["documento"];
     }

if($SD=$m){
foreach($result as $keuy){
 $l=  $keuy["docu"];
 $v=  $keuy["Curso"];
}
if($SD<>$l or $sele<>$v){
    $sol="INSERT INTO asignacion(docu,Curso)
    VALUES('$SD','$sele')";
    $resultado=mysqli_query($con,$sol);
    echo "<script>alert('la asignacion fue realizo correctamente'); window.location= '../controlador/ConMaes.php';</script>";

    }
    else{
echo "<script>alert('Este curso ya esta asignado a este maestro'); window.location= '../controlador/ConMaes.php';</script>";
}
}else{
   echo "<script>alert('Este documento no pertecena a un maestro'); window.location= '../controlador/ConMaes.php';</script>";
 
}


?>