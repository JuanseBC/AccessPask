<?php include("../formatos/cerrse.php");          ?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../stylos/ADM17.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AccessPask</title>
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<img class="img_principal" src="../img/pask.png"  >
  <div class="iconos">
    <div class="menu">
      <center>
        <ul>
          <li><a href="../vistas/Cursos.php">
              Cursos</a></li>
          <li><a href="../controlador/ConMaes.php">
               Maestros</h4></a></li>
            <li><a  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Registro</a></li>
             <li><a href="../modelo/cerrar_sesion.php">
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
    <div class="cuadro_texto2">
                    Para ver el listado de alumnos  
                    <br>
                    Seleccione un curso 
        <?php
        $host="localhost";
        $user="root";
        $pass="";
        $bd="accesspask";
        $con=mysqli_connect($host,$user,$pass);
        mysqli_select_db($con,$bd);
         $consulta= "Select idCurso from cursos_ ";
         $filas=mysqli_query($con, $consulta);
        ?>
        <form method="post" action="buscarcurso.php">
        <select name="Cursos"  >
        <?php
         while ($cursos=mysqli_fetch_array($filas))
         {
           echo "<option>" . $cursos["idCurso"] . "</option>";
         }
       ?>
    </select>
         <input type="image" src="../img/lupa.png" width="3%"  >
        </form>
        <br><br>
        <a class="boton" href="activar.php">Activar usuario</a>
        <form method="post" action="CRC.html">
          
            <button class="RegisCur" type="submit"  value="Registrar curso" >Registrar Curso</button> </td>
        
        </form> 
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>