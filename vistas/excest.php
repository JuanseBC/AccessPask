<?php include("../formatos/cerrse.php");          ?>
<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Pask</title>
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    <link rel="stylesheet" type="text/css" href="../stylos/PRF5.css">
    
</head>
<body>

<header class="cuadro_texto">
    <img src="../img/pask.png" alt="logo accespask">
    

<ul>

    <li><a href="../vistas/PRF.php">Cursos</a></li>
    <li><a href="../modelo/cerrar_sesion.php" img src="../img/salir.png">Salir</a> </li>
    
</ul>
</header>
<main>
   
        <div class="nom">
          Listado de Estudiantes
        </div>
            <form method="POST" action="../vistas/estbusq.php"> <input type="text" name='Filtro' required>  <input type="image" src="../img/lupa.png" width="3%" ></form>
            <table >
            <thead>
                <tr>
                    <th class= "text1">Nombre</th>
                    <th class= "text1"> Apellido</th>
                    <th class= "text1">Documento</th>
                    <th class= "text1">Curso</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php

                $curso= $_POST["Cursos"];           
                $host="localhost";
                $user="root";
                $pass="";
                $bd="accesspask";
                $con=mysqli_connect($host,$user,$pass);
        
                mysqli_select_db($con,$bd);
         $consulta= "Select * from usuario where idCurso=$curso ";
         $filas=mysqli_query($con, $consulta);
        
         while ($dato=mysqli_fetch_array($filas))
        {
            echo"<tr><td>".$dato['Nombre']."</p></td>";
            echo"<td>".$dato['Apellido']."</p></td>";
            echo"<td>".$dato['documento']."</p></td>"; 
            echo"<td>".$dato['idCurso']."</p></td>";
            ?>
            <td><a href="../controlador/buscar.php?id=<?php echo $dato['documento']?>" class="btn">Ver excusa</a></td></tr>
            <?php }?>
            </tbody>
     </table>    
                   <td><a href="../Reportes/rep2.php" class="btn">Generar informe</a></td></tr>

   
     
</body>
</html>