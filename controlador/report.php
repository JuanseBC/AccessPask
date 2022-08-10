<?php
  include("../db/db1.php");
    $con=conexion();

      $fecha1=$_POST['fec1'];
      $fecha2=$_POST['fec2'];

      $hora1=$_POST['hora1'];
      $hora2=$_POST['hora2'];

      $sele=$_POST['Cursos'];


             
           
    include("../Reportes/ind.php");
            
 ?>