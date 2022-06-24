<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" type="text/css" href="../stylos/activar1.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Pask</title>
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    
</head>
<body>
<main>
    <div class="nom">
          Listado Usuarios Inactivos
        </div>
<table>
                <tr >
                    <td class= "text2">Nombre</td>
                    <td class= "text2"> Apellido</td>
                    <td class= "text2">Documento</td>
                    <td class= "text2">Curso</td>
                    <td></td><td></td>
                </tr>
    <?php
   $con= mysqli_connect ('localhost','root','','accesspask');
   $consulta= "Select * from usuario where idrol=2 and idEst='2'";
   $filas=mysqli_query($con, $consulta);
   while ($dato=mysqli_fetch_array($filas))
   {
       echo"<tr><td>".$dato['Nombre']."</td>";
       echo"<td>".$dato['Apellido']."</td>";
       echo"<td>".$dato['documento']."</td>";  ?>
     <td><a href="../modelo/activarUsu.php?id1=<?php echo $dato['documento']?>" class="boton">Activar</a></td>
     <?php }?>
     </table>    
        </center>
</body>
</html>