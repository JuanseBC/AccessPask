<?php
$conexion = new mysqli("localhost","root","","accesspask");
	
	if($conexion->connect_errno){
		echo "No hay conexión: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
	}else {
       echo "Cargando";
    }
?>