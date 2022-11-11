<?php
$conexion = mysqli_connect("localhost","root","","accesspask");
   
    $correo = $_POST['correo'];
    $docu = $_POST['doc'];
    $bytes = random_bytes(5);
    $token = bin2hex($bytes);
   

    $sql = ("SELECT documento,correo FROM usuario WHERE correo = '$correo' and documento='$docu'");
    $resultado = mysqli_query($conexion, $sql);
    $filas = mysqli_num_rows($resultado);
    include("recupe.php");

    if ($filas) {

        if($enviado){

            $conexion->query("UPDATE usuario SET token = '$token', codigo = '$codigo' WHERE correo = '$correo'");
            echo"<script>alert('¡Hemos enviado un correo de recuperación!');window.location='../IniciarSesion.html'</script>";
       
    
        }
    }else {
        echo "<script>alert('¡Este correo no está registrado o su documento no es correcto!')</script>";
    }
    
    

?>


