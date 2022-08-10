<?php include("../formatos/cerrse.php");          ?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../stylos/ADM16.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AccessPask</title>
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<img class="img_principal" src="../img/pask.png"  >
 <div class="cuadro_texto">
  <div class="iconos">
    <div class="menu">
      
      <center>
      
        <ul>
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
            Listado de Maestros
            </div>
               
              <form method="POST" action="../vistas/busma.php"> <input type="text" name='Filtro' required> <input type="image" src="../img/lupa.png" width="3%">
              <a class="boton" href="../vistas/activarPRF.php">Activar usuario</a>
              </form>
                <table class="table">
                    <tr>
                        <td class= "text2">Nombre</td>
                        <td class= "text2">Apellido</td>
                        <td class= "text2">Documento</td> 
                        <td class= "text2">Correo</td><td></td><tr>
                        <?php
        foreach ($datos as $dato  )
        {
            if ($dato["idRol"]==2 and $dato["idEst"]==1){
            echo"<tr><td class= 'text3'>".$dato['Nombre']."</p></td>";
            echo"<td class= 'text3'>".$dato['Apellido']."</p></td>";
            echo"<td class= 'text3'>".$dato['documento']."</p></td>"; 
            echo"<td class= 'text3'>".$dato['correo']."</p></td>";
            ?>

               <td><a href="../controlador/asig.php?id2=<?php echo $dato['documento']?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#static">
            Asignar Curso</a><td>

                          <div class="modal fade" id="static" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
       <div class="modal-content " style="background-color:black; border-radius:15px;">
        <button type="button" style="background-color:white; position:right;"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         <center>
         <div  style="background-color: black; height:27px ">
        <h5  id="staticBackdropLabel" style="color: white; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; color:white" >Asignar</h5>
      </div>
    </center>
      <div  style="background-color: #ffd000;  border-radius:15px ;">
       <?php include("AsignarCu.php"); ?>

        </div>

  </div>
</div>

                            <td><a href="../modelo/editar.php?id=<?php echo $dato['documento']?>" class="btn btn-warning">Editar</a></td>
                            <td><a href="../modelo/eliminar.php?id1=<?php echo $dato['documento']?>" class="btn btn-outline-danger">Inactivar</a></td><tr>
                            <?php }
            }?>
                </table></center></div>
                   <td><a href="../Reportes/ind4.php" class="btn">Generar informe</a></td></tr>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>