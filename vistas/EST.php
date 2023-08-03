<?php include("../formatos/cerrse.php");          ?>

<!DOCTYPE html>
<html lang="es">
<head>


<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Pask</title>
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    <link rel="stylesheet" href="../stylos/EST2.CSS">
  
</head>

<body>
<header class="cuadro_texto">
        <img src="../img/pask.png" alt="logo accespask">
        

    <ul>
    <li><a download="ayuda"  href="../MU/MUEST.pdf" >?</a></li>
        <li><a href="../modelo/cerrar_sesion.php" img src="../img/salir.png">Salir</a> </li>
        <li><a href="../Reportes/ind3.php"  style="padding-bottom: 30px;">Generar informe</a></li> 
    </ul>
    </header>
    <main>

    <?php
           session_start();

        $des=$_SESSION['usuario'];
        $host="sql306.byetcluster.com";
        $user="epiz_33006201";
        $pass="HyWjIFt6yV";
        $bd="epiz_33006201_accesspask";
        $con=mysqli_connect($host,$user,$pass);
        mysqli_select_db($con,$bd);

        $cons= "SELECT idCurso FROM usuario where documento='$des'";
        $fil=mysqli_query($con, $cons);

        $Almacen_user_consul=mysqli_fetch_row($fil);
        $resultado=$Almacen_user_consul[0];

        $consulta= "SELECT * FROM usuario,asignacion where idRol=2 and usuario.documento=asignacion.docu and asignacion.Curso=$resultado";

        $filas=mysqli_query($con, $consulta);

        $produc=$filas; 

        ?> 

        <div class="nom"><img class="listmaes" src="../img/maestro.png">
            LISTA DE MAESTROS
        </div>
    <table >
        <thead>
        <tr >
            <th class="text1">Nombre</th>
            <th class="text1">Apellido</th>
            <th class="text1">Correo</th>
            <th class="text1">Excusa</th>
           
        </tr>
        </thead>
        <tbody>
        <?php foreach ($produc as $dato) {?>

        <tr> 
             
        <td> <?php echo  $dato['Nombre'] ." " ?></td>
        <td><?php echo  $dato['Apellido'] .""?></td> 
        <td> <?php echo  $dato['correo'] ." " ?> </td>
        
        <td> <a href="../vistas/excusa.php?id4=<?php echo $dato['documento']?>" class="btn btn-warning">Enviar  Excusa</li><br><br></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
  

        </main>

        <div class="loFeo">
            
            Access.Pask WEB &copy; 2022
        
    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>
