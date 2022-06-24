<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php 
ini_set('date.timezone','America/Bogota'); 
  date("g:i A");
// Resultado de ejemplo: 6:33 PM
date_default_timezone_set('America/bogota');
 date("Y-m-d ");
 ?>
 <center>
 <form method="POST" action="../c/ing.php" accept-charset="UTF-8"> 
 <label >fecha: <input type="text" name="fe" value="<?php echo  date("Y-m-d ") ?>"></input></label><br>
 <label >hora de ingreso: <input type="text" name="hoIn" value="<?php echo date("g:i A")?>"></input></label><br>
 <label >documento: <input type="text" name="docu" value=""></imput></label><br>
 <input type="submit" name="enviar" value="registrar ingreso"></imput>
 </center>


</body>
</html>