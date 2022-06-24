<?php
  include("../db/db1.php");
    $con=conexion();

      $fecha=$_POST['fec'];
      $hora=$_POST['hora'];

             $consu= "SELECT tiempo.documento,usuario.Nombre,usuario.Apellido,tiempo.Fecha,tiempo.hin,tiempo.hsa FROM tiempo,usuario where tiempo.Fecha='$fecha' and tiempo.hin='$hora' and tiempo.documento=usuario.documento";
    
             $fi=mysqli_query($con, $consu);
             
            $pro=$fi;
    include("../Reportes/verrepor.php");
            
 ?>