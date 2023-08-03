<?php include("../formatos/cerrse.php");          ?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../stylos/ADM21.css">
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

  <header>
    <img class="img_principal" src="../img/pask.png"  >
    <div class="iconos">
      <div class="menu">
        <ul>
        <li><a href="../vistas/Cursos.php">Cursos</a></li>

        <li><a href="../controlador/ConMaes.php">Maestros</a></li>
          <li><a  href="../Reportes/rep.php">Informe</a></li>

        <li><a  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Registro</a></li>
        
        <li><a  href="CRC.html">Nuevo curso</a></li>
        <li><a href="../modelo/cerrar_sesion.php">Salir</a> </li>
        

          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <center>
              <div class="modal-content " style="background-color:black; border-radius:15px;">
                <button type="button" style="background-color:white; position:right;"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div  style="height:45px ">
                  <h5  id="staticBackdropLabel" style="color: white; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; color:white" >Registrar Usuario</h5>
                </div>
                <div  style="background-color: #ffd000;  border-radius:15px;">
                <?php include("r.html"); ?>
                <center>
                </div>
              </div> 
            </div>
          </div>
        </ul>
      </div>
    </div>
  </header>

  
  <main>
  

     <div class="cuadro_texto2">
                      Para ver el listado de alumnos  
                      <br>
                      Seleccione un curso 
      </div>
 
    <div>
        <?php
        $conexion = new mysqli("sql306.epizy.com","epiz_33006201","HyWjIFt6yV","epiz_33006201_accesspask");
         $consulta= "Select idCurso from cursos_ ";
         $filas=mysqli_query($conexion, $consulta);
        ?>
        
        <div class="contenedor_Principal">
          <?php
          while ($cursos=mysqli_fetch_array($filas))
          {
          ?>
          <div class=" ">
            <a class="card text-decoration-none"  href="buscarcurso.php?id=<?php echo $cursos['idCurso'];?>" style="width: 15rem;color:white;height:3rem"><?php echo "Grado  ".$cursos['idCurso'];?></a>
          </div>
          <?php
          }
          ?>
       </div>
  </div>
  </main>

  <footer>
  <button class="Bayuda" ><a class="Bayuda1" download="ayuda"  href="../MU/MUADM1.pdf" >?</a> </button>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

       
</body>

</html>
