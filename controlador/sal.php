<?php
error_reporting(0);
include '../v/salida.php';
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
            echo"<script>alert('su registro fue exitoso come back bro');window.location='../ReIngreso/salida.php'</script>";
        
        } else {
            echo"<script>alert('vales monda no servis ni para escribir un numero');window.location='../ReIngreso/salida.php'</script>";

        }
         




?>