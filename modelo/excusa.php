<?php
$conexion = mysqli_connect("localhost","root","","accesspask");
$fecha=$_POST["fecha"];
$descripcion=$_POST["descripcion"];
$docu=$_POST['documento'];
$s11=$_POST['dc'];
if($_FILES["subirarchivo"]){
    $nombre_base=basename($_FILES["subirarchivo"]["name"]);
     $ruta = "../img/" . $nombre_base;
     $subir_archivo = move_uploaded_file($_FILES["subirarchivo"]["tmp_name"],$ruta);
     if($subir_archivo){
         $insertar ="insert into excusas(fecha,descripcion,archivo,documento,Docu_Dest) values ('$fecha', '$descripcion', '$ruta','$docu','$s11')";
         $resultado = mysqli_query($conexion,$insertar);
         if($resultado){
             
            echo "<script> alert('se ha enviado su excusa');window.location='../vistas/EST.php'</script>";

         }else{
            echo"<script>alert('error al subir, digite nuevamente');window.location='../vistas/excusa.html'</script>";

         }
     }

}

?>

