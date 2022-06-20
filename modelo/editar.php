<?php include("../formatos/cerrse.php"); ?>
<?php 
    include("../db/db1.php");
    $con=conexion();

$id=$_GET['id'];

$sql="SELECT * FROM usuario WHERE documento='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../stylos/editar2.css">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Actualizar</title> 
    </head>
    <body>
             
                    <form action="update.php" method="POST" class="form">
                    <div class="text">
                      ACTUALIZAR DATOS 
                    </div>
                    <br>
                                <input type="hidden" name="idusu" value="<?php echo $row['documento']  ?>">
                                <input type="text"  class="text1" name="Nombre" placeholder="Digite su nombre" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="text1" name="Apellido" placeholder="Digite su apellido" value="<?php echo $row['Apellido']  ?>">
                                <input type="text" class="text1" name="documento" placeholder="Digite su documento" value="<?php echo $row['documento']  ?>">
                                <br><br>
                                <center>
                                <a class="boton" href="../controlador/conMaes.php">Regresar</a><br>
                                </center>
                                <button class="Actu" type="submit"  value="submit" >Actualizar</button> 
                           
                           
                 
                    </form>
                    
               
    </body>
</html>