<?php 
$conexion = new mysqli("sql306.byetcluster.com","epiz_33006201","HyWjIFt6yV","epiz_33006201_accesspask");

  $email =$_POST['correo'];
    $p1 =MD5($_POST["p1"]);;
    $p2 =MD5($_POST["p2"]);
    if($p1 == $p2){
        $conexion->query("update usuario set contrasena= '$p1' where correo='$email' ");
        echo"<script>alert('Su cambio de contraseña se realizo correctamente');window.location='../IniciarSesion.html'</script>";        
    }
?>