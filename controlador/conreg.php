<?php
$rol=$_POST["idRol"];
switch ($rol){
case "1":
include ("../vistas/registro.php");
break;
case "2":
    include ("../vistas/registro.php");
    break;
case "3":
    include ("../vistas/regest.php");
    break;
}
?>