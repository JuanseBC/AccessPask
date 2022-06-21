<?php
include("conexion.php");
$rol=$_POST["idRol"];
$doc=$_POST["doc"];
$clave=MD5($_POST["contraseña"]);
$query= mysqli_query($conexion, "SELECT * FROM accesspask.usuario WHERE idRol=$rol AND documento = '$doc'  AND contraseña ='$clave' and idEst=1");
$nr = mysqli_num_rows($query);
if ($nr==1){
   session_start();
   if ($rol==1 ){
      /*echo "<script>window.location='../vistas/ADM.html'</script>";*/
        $_SESSION['usuario'] = $doc;


      header("location: ../vistas/ADM.php");       
   }
    else if ($rol==2){
    /*echo "<script>window.location='../vistas/PRF.html' </script>";*/
            $_SESSION['usuario'] = $doc;


    header("location: ../vistas/PRF.php");
     
   } 
   else if ($rol==3){
      /*echo "<script>window.location='../vistas/PRF.html' </script>";*/
             

              $_SESSION['usuario'] = $doc;


      header("location: ../vistas/EST.php");
       
     } 
  
}
else {
    echo "<script>alert('Rol, nombre o clave incorrecto.'); window.location= '../vistas/IniciarSesion.html';</script>";
}
?>
