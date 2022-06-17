<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../stylos/ADM13.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Pask</title>
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
   
  
</head>
<body>
    
    
<img class="img_principal" src="../img/pask.png"  >
 <div class="cuadro_texto">
  <div class="iconos">
    <div class="menu">
            <center>
            <ul>
          <li><a href="../vistas/ADM.php">
              Inicio</a></li>
          <li><a href="../vistas/Cursos.php">
              Cursos</a></li>
          <li><a href="../controlador/ConMaes.php">
              Maestros</a></li>
            <li><a  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Registro</a></li>
             <li><a href="../modelo/cerrar_sesion.php" img src="../img/salir.png">
              Salir</a> </li>
      
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
       <div class="modal-content " style="background-color:black; border-radius:15px;">
        <button type="button" style="background-color:white; position:right;"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         <center>
         <div  style="background-color: black; height:45px ">
        <h5  id="staticBackdropLabel" style="color: white; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; color:white" >Registrar Usuario</h5>
      </div>
    </center>
      <div  style="background-color: #ffd000;  border-radius:15px;">
       <?php include("r.html"); ?>
    </div>
  </div>
</div>
        </ul>
      </center>
    </div>
  </div> <br>
        </div>

   
    <div id="cuadro_texto2">
        <center>
        <div class="listado">
          Listado de Estudiantes
        </div>
            <form method="POST" action="../vistas/busqueda.php"> <input type="text" name='Filtro'>  <input type="image" src="../img/lupa.png" width="3%" ></form>
            <table  class="table table-striped">
                <tr >
                    <td class= "text2">Nombre</td>
                    <td class= "text2"> Apellido</td>
                    <td class= "text2">Documento</td>
                    <td class= "text2">Curso</td>
                    <td></td><td></td>
                </tr>
                <?php

                $curso= $_POST["Cursos"];           
                $host="localhost";
                $user="root";
                $pass="";
                $bd="accesspask";
                $con=mysqli_connect($host,$user,$pass);
        
                mysqli_select_db($con,$bd);
         $consulta= "Select * from usuario where idrol=3 and idCurso=$curso";
         $filas=mysqli_query($con, $consulta);
        
         while ($dato=mysqli_fetch_array($filas))
        {
            echo"<tr><td class= 'text3'>".$dato['Nombre']."</p></td>";
            echo"<td class= 'text3'>".$dato['Apellido']."</p></td>";
            echo"<td class= 'text3'>".$dato['documento']."</p></td>"; 
            echo"<td class= 'text3'>".$dato['idCurso']."</p></td>"; 
            ?>
                            <td><a href="../modelo/editar.php?id=<?php echo $dato['documento']?>" class="btn btn-warning">Editar</a></td>
                            <td><a href="../modelo/eliminar.php?id1=<?php echo $dato['documento']?>" class="btn btn-outline-danger">Inactivar</a></td><tr>
                            <?php }
            ?>
     </table>    
        </center>
    </div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>