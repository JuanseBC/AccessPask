<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Pask</title>
    <link rel="stylesheet" type="text/css" href="PRF.CSS">
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    <style>
         body,
    html {
      background-color: rgb(255, 255, 255);
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
      position: relative;
      font-size: 16px;
      font-family: 'RobotoCondensed';
      overflow: hidden;
    }
    
    </style>
</head>

<body style="background: rgb(255,244,0);
background: linear-gradient(180deg, rgba(255,244,0,1) 0%, rgba(0,0,0,1) 100%);">
    <div>
        <div id="principal">
            <h1> LISTA DE PROFESORES</h1>
        </div>
        <nav>
            <ul>
                <li><a href="../vistas/EST.html">Inicio </a></li>
                <li><a href="../modelo/cerrar_sesion.php">Cerrar sesion</a> </li>
            </ul>
        </nav>
        <aside>
            <h2>BUSCAR PROFESORES</h2>
            <form action="../controlador/buscarPr.php" method="post" autocomplete="off." class="full-box logInForm">
                <input name="f" type="text">
                <input name="c" type="submit" value="buscar">
            </form><br><br>
        </aside>

        <section>
            <?php

            $host="localhost";
            $user="root";
            $pass="";
            $bd="accesspask";
            $con=mysqli_connect($host,$user,$pass);
            mysqli_select_db($con,$bd);
    
             $consulta= "SELECT * FROM usuario where idRol=2";
    
             $filas=mysqli_query($con, $consulta);
    
               
             
            $produc=$filas;
    

                    ?>
              
            <table  class="table table-dark table-striped table-fixed" style="text-align:  center;">
    <head>
            <TR style="width: 1330px ;">
			<td style="width: 1330px ;">Nombres y apellidos</td>
			<td style="width: 1330px ;"></td>
            </TR>

		   <?php foreach ($produc as $dato) {?>

        <tr style="width: 1330px ;">   
        <td style="width: 1330px ;"> <?php echo  $dato['Nombre'] ." ". $dato['Apellido'] ; ?> </td>
        <td style="width: 1330px ;"><a href="../vistas/excusa.html? class="btn btn-info">ingresa su excusa</a></td>
        </tr>
<?php } ?>
	</table>

                
            
            </table> </section>     
               <div class="clearflix">
            <footer>
                Access.Pask WEB &copy; 2022
            </footer>
        </div>
</body>

</html>