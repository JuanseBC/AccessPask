<?php
  include("../db/db1.php");
    $con=conexion();

      $fecha=$_POST['fec'];
      $hora=$_POST['hora'];

             $consu= "SELECT documento,fecha,hin,hsa FROM tiempo where fecha='$fecha' and hin='$hora'";
    
             $fi=mysqli_query($con, $consu);
             
            $pro=$fi;
    include("../Reportes/verrepor.php");
            
 ?>