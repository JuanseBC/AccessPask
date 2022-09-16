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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
                $curso= $_GET["id"];           
                $host="localhost";
                $user="root";
                $pass="";
                $bd="accesspask";
                $con=mysqli_connect($host,$user,$pass);
      
        
                mysqli_select_db($con,$bd);
         $consulta= "Select * from usuario where idCurso=$curso";
         $filas=mysqli_query($con, $consulta);
        
         while ($dato=mysqli_fetch_array($filas))
        {
            echo"<tr><td>".$dato['Nombre']."</p></td>";
            echo"<td>".$dato['Apellido']."</p></td>";
            echo"<td>".$dato['documento']."</p></td>"; 
            echo"<td>".$dato['idCurso']."</p></td>";
            ?>
            <td><a href="../controlador/buscar.php?id=<?php echo $dato['documento']?>" class="btn btn-warning" style="width: 200px;border-radius: 15px;padding-bottom: 30px;">Ver excusa</a></td></tr>
            <?php }?>
            </tbody>
     </table>    
     <td><a  class="btn btn-warning" style="border-radius: 15px;width: 200px;padding-bottom: 30px;" data-bs-toggle="modal" data-bs-target="#static22">Generar informe</a></td></tr>
                    <div class="modal fade" id="static22" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
       <div class="modal-content " style="background-color:black; border-radius:15px;">
        <button type="button" style="background-color:white; position:right;"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         <center>
         <div  style="background-color: black; height:45px ">
        <h5  id="staticBackdropLabel" style="color: white; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; color:white" >Informes</h5>
      </div>
    </center>
      <div  style="background-color: #ffd000;  border-radius:15px;">
       <?php include("../Reportes/rep2.php"); ?>
       <br><br>
    </div>
  </div>
</div>
   
                   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>