<?php
// error_reporting(0);
include("../db/db1.php");
$con = conexion();

      $sele=$_POST['Cursos'];
      $SD= $_POST["Profesores"];
      $NOMBRE = explode(" ", $SD);
      $nom1=$NOMBRE[0];
      $ape1=$NOMBRE[1];
     
      $sql = "SELECT documento FROM usuario where Nombre='$nom1' and Apellido='$ape1'"; 
      $resuddt=mysqli_query($con,$sql) ;
      $extraido= mysqli_fetch_array($resuddt);
      $docuProfe= $extraido[0];

      //Consultar si el curso ya fue asignado a este mismo documento
      $sql = "SELECT count(*) FROM asignacion where curso=$sele and docu=$docuProfe"; 
      $resuddt=mysqli_query($con,$sql) ;  
      $ex= mysqli_fetch_array($resuddt);
      $asignado= $ex[0];

      //Asignaar el curso

    if($asignado == 0)
    {
      $sol="INSERT INTO asignacion(docu,Curso)
      VALUES($docuProfe,$sele)";
      $resultado=mysqli_query($con,$sol);
      echo "<script>alert('la asignacion fue realizo correctamente'); window.location= '../controlador/ConMaes.php';</script>";
    }
    else{
      echo "<script>alert('Este curso ya esta asignado a este maestro'); window.location= '../controlador/ConMaes.php';</script>";
   }
// }else{
//    echo "<script>alert('Este documento no pertecena a un maestro'); window.location= '../controlador/ConMaes.php';</script>";
 
// } 
?>
