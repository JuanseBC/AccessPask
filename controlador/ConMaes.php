<?php
class Conectar{
    public static function conexion(){
        $host="localhost";
        $user="root";
        $pass="";
        $bd="accesspask";
        $con=mysqli_connect($host,$user,$pass);

        mysqli_select_db($con,$bd);
    
        return $con;
    }
}
    //Llamada al modelo
    require_once("../modelo/usuario.php");
    $usuario=new usuario_modelo();
    $datos=$usuario->get_usuario();

    //Llamada a la vista
    require_once("../vistas/Maestros.php");
?> 