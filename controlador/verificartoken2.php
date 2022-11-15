<?php 
error_reporting(0);
$conexion = mysqli_connect("localhost","root","","accesspask");
    $email =$_POST['correo'];
    $token =$_POST['token'];
    $codigo =$_POST['codigo'];
    $res=$conexion->query("select * from usuario where 
        correo='$email' and token='$token' and codigo=$codigo")or die($conexion->error);
    $correcto=false;
    if(mysqli_num_rows($res) > 0){
        $fila = mysqli_fetch_row($res);
        $fecha =$fila[13];
        $fecha_actual=date("Y-m-d h:m:s");
        $seconds = strtotime($fecha_actual) - strtotime($fecha);
        $minutos=$seconds / 60;
       /* if($minutos > 10 ){
            echo "token vencido";
        }else{
            echo "todo correcto";
        }*/
        $correcto=true;
    }else{
        $correcto=false;
    }
    include("../correorecu/verificartoken.php");
       