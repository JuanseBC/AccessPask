<?php include("../formatos/cerrse.php");          ?>



<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" type="text/css" href="../stylos/PRF1.CSS">

<head>

</head>

<body>

<img class="img_principal" src="../img/pask.png"  >
 <div >

    
        
           
           
        

              


        </tr>





	</table>

    </div>
  </div>
</div>             
            
            </table> </section>


</body>

</html>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Pask</title>
    <link rel="stylesheet" type="text/css" href="PRF.CSS">
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <header class="cuadro_texto">
    <div class="iconos">
    <div class="menu">

    <ul>
          <li><a href="../vistas/Cursos.php">
              Cursos</a></li>
             <li><a href="../modelo/cerrar_sesion.php" img src="../img/salir.png">
             <ul type="circle">
                <li>
                    <h3>Jhon Jairo Videz</h3>
                </li>
            </ul>
              Salir</a> </li>

    </ul>


  <!--   <h2>Buscar Estudiante</h2>
            <form action="../controlador/buscarEs.php" method="post" autocomplete="off." class="full-box logInForm">
                <input name="f" type="text">
                <input name="c" type="submit" value="buscar">
            </form> -->

            <h2>TITULAR DE CLASE</h2><br>
          
        
    </header>

    <main>
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

        <div class="cuadro_texto2">
            LISTA DE ESTUDIANTES
        </div>
    <table  class="table table-dark table-striped table-fixed" style="text-align:  center;">
        <TR style="width: 1330px ;">
            <td style="width: 1330px ;">Nombres y apellidos</td>
            <td style="width: 1330px ;"></td>
        </TR>

        <?php foreach ($produc as $dato) {?>

        <tr style="width: 1330px ;">   
        <td style="width: 1330px ;"> <?php echo  $dato['Nombre'] ." ". $dato['Apellido'] ; ?> </td>
        <td style="width: 1330px ;"><a href="../controlador/buscar.php?id=<?php echo $dato['documento']?>"  class="btn btn-info">VER</a></td>
    
        <?php } ?>
    </table>

    </main>
    
    <div class="clearflix">
            <footer>
                Access.Pask WEB &copy; 2022
            </footer>
        </div>

    <script src="../js/modal1.js"></script>
</body>
</html>