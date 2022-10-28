<?php
error_reporting(0);
include '../v/ingreso.php';
$conexion=mysqli_connect('localhost','root','','accesspask');

$fecha =$_POST['fe'];
$ingreso =$_POST['hoIn'];
$documento =$_POST['docu'];


$consult="SELECT documento FROM usuario where documento='$documento'";
$ejecut = mysqli_query ($conexion,$consult);

foreach ($ejecut as $key) {
    if($documento=$key["documento"]){
        $consulta="INSERT INTO tiempo ( hin , fecha,documento, estado) values('$ingreso','$fecha','$documento',1)";
$ejecutar = mysqli_query ($conexion,$consulta);
    }}
        if($ejecutar){
            echo"<script>alert('El registro se realizo de manera correcta');window.location='../Reingreso/ingreso.php'</script>";
        
        } else {
            echo"<script>alert('El registro no se pudo realizar de manera correcta');window.location='../Reingreso/ingreso.php'</script>";

        }
         




?>