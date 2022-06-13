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
?>