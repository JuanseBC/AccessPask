<?php include("../formatos/cerrse.php");          ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../stylos/ADM21.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Pask</title>
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="ADM.css" type="text/css" rel="stylesheet" />
   
   
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
    <div id="cuadro_texto2">
        
        <hr class="linea">
            <?php include("AsignarCu.php") ?>
            <hr class="linea"> 
            
            <div class="listado">
            Listado de Maestros
            </div>
            <form method="POST" action="busma.php"> 
            <input type="number" class= "Filtro"name='Filtro' placeholder="Digite un documento"required> <input type="image" src="../img/lupa.png" width="3%" heigth="3%">
              <a class="boton" href="../vistas/activarPRF.php">Activar usuario</a>
            </form>
            <table  class="table ">
                <tr >
                    <td class= "text2">Nombre</td>
                    <td class= "text2">Apellido</td>
                    <td class= "text2">Documento</td>
                    <td class= "text2">Correo</td>     
                    <td></td><td></td>
                </tr>
    
                <?php
                error_reporting(0);
                $buscar= $_POST["Filtro"];           
                $host="sql306.epizy.com";
                $user="epiz_33006201";
                $pass="HyWjIFt6yV";
                $bd="epiz_33006201_accesspask";
                $con=mysqli_connect($host,$user,$pass);
        
                mysqli_select_db($con,$bd);
         $consulta= "Select * from usuario where idrol=2 and documento=$buscar";
         $filas=mysqli_query($con, $consulta);
        
         while ($dato=mysqli_fetch_array($filas))
        {
            echo"<tr><td class= 'text3'>".$dato['Nombre']."</p></td>";
            echo"<td class= 'text3'>".$dato['Apellido']."</p></td>";
            echo"<td class= 'text3'>".$dato['documento']."</p></td>"; 
            echo"<td class= 'text3'>".$dato['correo']."</p></td>"; 
            
            ?>
            <td><a   href="../modelo/editar.php?id=<?php echo $dato['documento']?>" class="btn btn-warning">Editar</a></td>
            <td><a   href="../modelo/eliminar.php?id1=<?php echo $dato['documento']?>" class="btn btn-outline-danger">Inactivar</a></td>
           
            
        <?php
            }
        
        ?>
     </table>
            
        </center>
    </div>
 
    <footer>
  <button class="Bayuda" ><a class="Bayuda1" download="ayuda"  href="../MU/MUADM1.pdf" >?</a> </button>
        </footer> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
