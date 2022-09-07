<?php include("../formatos/cerrse.php");          ?>

<!DOCTYPE html>
<html lang="es">
<head>


<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Pask</title>
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    <link rel="stylesheet" href="../stylos/PRF5.css">
  
</head>
<body>

    <header class="cuadro_texto">
        <img src="../img/pask.png" alt="logo accespask">
        <div class="iconos">
        <div class="menu">
      <center>
        <ul> 

        

    <ul>

        <li><a href="../vistas/PRF.php">Cursos</a></li>
        <li><a href="../modelo/cerrar_sesion.php" img src="../img/salir.png">Salir</a> </li>
        
    </ul>
    <div class="nom">Bienvenido maestro<img class="listmaes1" src="../img/maestro.jpg"></div>

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
            Seleccione un curso
        </div>
        <?php
        $fifa=$_SESSION["usuario"];
        $host="localhost";
        $user="root";
        $pass="";
        $bd="accesspask";
        $con=mysqli_connect($host,$user,$pass);
        mysqli_select_db($con,$bd);
         $consulta= "Select Curso from asignacion where $fifa=docu ";
         $filas=mysqli_query($con, $consulta);
        ?>
        <form method="post" action="excest.php">
        <select class="select" name="Cursos"  >
        <?php
         while ($cursos=mysqli_fetch_array($filas))
         {
           echo "<option>" . $cursos["Curso"] . "</option>";
         }
       ?>
    </select>
         <input type="image" src="../img/lupa.png" width="3%"  >
        </form>
    <!-- <table >
        <thead>
        <tr >
            <th >Nombres y apellidos</th>
            <th >opciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($produc as $dato) {?>

        <tr>   
        <td> <?php echo  $dato['Nombre'] ." ". $dato['Apellido'] ; ?> </td>
        <td><a href="../controlador/buscar.php?id=<?php echo $dato['documento']?>" class="btn">VER</a></td>
    
        <?php } ?> -->
        </tbody>
    </table>

    </main>
    
    <div class="loFeo">
            
                Access.Pask WEB &copy; 2022
            
        </div>
      
    <script src="../js/modal1.js"></script>

</body>
</html>