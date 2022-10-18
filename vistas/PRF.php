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
    <?php
     $rol=$_SESSION['usuario'];
       $host="localhost";
       $user="root";
       $pass="";
       $bd="accesspask";
       $con=mysqli_connect($host,$user,$pass);
       mysqli_select_db($con,$bd);
       $consul="SELECT Nombre, Apellido FROM usuario where documento=$rol";
       $solu=mysqli_query($con, $consul);
       while ($cur=mysqli_fetch_array($solu)){
       ?>
    <div class="nom">Bienvenido lic. <?php echo $cur['Nombre'] ." ". $cur['Apellido'];?>. <img class="listmaes1" src="../img/maestro.jpg"></div>
    <?php  }  ?>

    </header>
    <main>
    
<br>
<br>
        <div class="cuadro_texto2">
            Seleccione su curso
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
         ?>
        <div class="container d-flex flex-wrap gap-3 p-4 li ">
            <a class="card text-decoration-none"  href=".vistas/excest.php?id=<?php echo $cursos['Curso'];?>" style="width: 15rem;color:white;height:3rem"><?php echo "Grado  ".$cursos['Curso'];?></a>
        </div>
       <?php  } 
       ?>

       
</div>
    <div class="loFeo">
            
            
                Access.Pask WEB &copy; 2022
            
        </div>
      
    <script src="../js/modal1.js"></script>

</body>
</html>