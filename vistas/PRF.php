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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylos/siuu.css">

  
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

        <?php
         while ($cursos=mysqli_fetch_array($filas))
         {
         require_once("../formatos/card.php");
         ?>
         <table>
           <div class="container d-flex flex-wrap gap-3 p-4 li ">
<a class="card text-decoration-none"  href="../vistas/excest.php?id=<?php echo $cursos['Curso'];?>" style="width: 15rem;color:white;height:3rem"><?php echo "Grado  ".$cursos['Curso'];?></a>
     
     
     
     
</div>
       <?php  } 
       ?>

       
</div>
</table
    <div class="loFeo">
            
                Access.Pask WEB &copy; 2022
            
        </div>
      
    <script src="../js/modal1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>