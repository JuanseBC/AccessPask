<?php include("../formatos/cerrse.php");          ?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Pask</title>
    <link rel="stylesheet" type="text/css" href="PRF.CSS">
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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
    }
    .table-fixed tbody{
   height: 530px;
   overflow-y :auto;
   width: 100%;
    }
.table-fixed thead,
.table-fixed tbody,
.table-fixed td,
.table-fixed th{
   display: block;
}

</style>
</head>

<body style="background: rgb(255,244,0);
background: linear-gradient(180deg, rgba(255,244,0,1) 0%, rgba(0,0,0,1) 100%);">
    <div>
        <div id="principal">
            <h1> LISTA DE ESTUDIANTES</h1>
        </div>
        <nav>
            <ul>
                <li><a href="../vistas/PRF.php">Inicio </a></li>
                <li><a href="../vistas/cursos.php">Cursos </a> </li>
                <li><a href="../modelo/cerrar_sesion.php">Cerrar sesion</a> </li>
            </ul>
        </nav>
        <aside>
            <h2>Buscar Estudiante</h2>
            <form action="../controlador/buscarEs.php" method="post" autocomplete="off." class="full-box logInForm">
                <input name="f" type="text">
                <input name="c" type="submit" value="buscar">
            </form><br><br>
            <h2>TITULAR DE CLASE</h2><br>
            <ul type="circle">
                <li>
                    <h3>Jhon Jairo Videz</h3>
                </li>
            </ul>
        </aside>
        <section>
            <?php

            $host="localhost";
            $user="root";
            $pass="";
            $bd="accesspask";
            $con=mysqli_connect($host,$user,$pass);
            mysqli_select_db($con,$bd);
    
             $consulta= "SELECT * FROM usuario where idRol=3";
    
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
        <td style="width: 1330px ;"><a href="../controlador/buscar.php?id=<?php echo $dato['documento']?>"  class="btn btn-info">VER</a></td>
        <script src="../js/modal1.js"></script>

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