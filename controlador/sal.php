<?php
include '../Reingreso/salida.php';
$conexion=mysqli_connect('localhost','root','','accesspask');

$fecha =$_POST['fech'];
$salida =$_POST['hoSa'];
$documento =$_POST['documen'];

$consult="SELECT documento FROM usuario where documento='$documento'";
$ejecut = mysqli_query ($conexion,$consult);

foreach ($ejecut as $key) {
    if($documento=$key["documento"]){
        $consul="UPDATE tiempo
        SET hsa = '$salida', estado=2
        WHERE documento = '$documento' and estado=1";

        $ejecu = mysqli_query ($conexion,$consul);   
      }}
        if($ejecu){
            echo"<script>alert('su registro fue exitoso ');window.location='../Reingreso/salida.php'</script>";
        
        } else {
            echo"<script>alert('su registro no fue exitoso vuelva a escribir el numero de documento');window.location='../Reingreso/salida.php'</script>";

        }
         




?>