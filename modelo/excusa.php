<?php
$conexion = mysqli_connect("localhost","root","","accesspask");
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$fecha=$_POST["fecha"];
$descripcion=$_POST["descripcion"];
$docu=$_POST["documento"];
$curso=$_POST["curso"];
if($_FILES["subirarchivo"]){
    $nombre_base=basename($_FILES["subirarchivo"]["name"]);
     $ruta = "../img/" . $nombre_base;
     $subir_archivo = move_uploaded_file($_FILES["subirarchivo"]["tmp_name"],$ruta);
     if($subir_archivo){
         $insertar ="insert into excusas(nombre,apellido,fecha,descripcion,archivo,documento, curso) values ('$nombre','$apellido', 
         '$fecha', '$descripcion', '$ruta','$docu', '$curso')";
         $resultado = mysqli_query($conexion,$insertar);
         if($resultado){
             echo "<script>alert('se ha enviado su excusa');window.location='../vistas/EST.php'</script>";

         }else{
            echo"<scrip>alert('error al subir, digite nuevamente');window.location='../vistas/excusa.html'</scrip>";

         }
     }

}

?>

