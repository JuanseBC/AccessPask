<?php 
$conexion = mysqli_connect("localhost","root","","accesspask");

  $email =$_POST['correo'];
    $p1 =MD5($_POST["p1"]);;
    $p2 =MD5($_POST["p2"]);
    if($p1 == $p2){
        $conexion->query("update usuario set contraseña= '$p1' where correo='$email' ")or die($conexion->error);
        echo"<script>alert('Su cambio de contraseña se realizo correctamente');window.location='../IniciarSesion.html'</script>";        
    }else{
        echo"<script>alert('no coinciden');window.location='../correorecu/verificartoken.php'</script>";

    }
?>