<?php
//activa
session_start();
//$usu=$-SESSION["usuario"];

if ($_SESSION["usuario"]==null) {

header("location:inicio2.html");
exit;
}





?>
