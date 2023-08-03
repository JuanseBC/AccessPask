<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../stylos/ADM21.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AccessPask</title>
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

                <form method="post" action="../controlador/asig.php">
        
        <label for="rol" class="listado2">Asignar Curso</label>
        <br>
       
<!--          <input   class="Filtro"  placeholder="Digite el documento" name="documento" required>
 -->       
                <?php
        $host="sql306.epizy.com";
        $user="epiz_33006201";
        $pass="HyWjIFt6yV";
        $bd="epiz_33006201_accesspask";
        $con=mysqli_connect($host,$user,$pass);
        mysqli_select_db($con,$bd);
         $consulta= "Select idCurso from cursos_ ";
         $filas=mysqli_query($con, $consulta);
         $consul="Select documento,Nombre,Apellido from usuario where idRol=2 ";
         $fil= mysqli_query($con,$consul);

        ?>
        <div style=" align-items: center;
    margin-left: 40%;">
         <select name="Profesores" required class="select rol">
        <option selected disabled value="">Selecciona el maestro</option>
        <?php
         while ($profes=mysqli_fetch_array($fil))
         {
           echo "<option>" . $profes["Nombre"] ." ". $profes["Apellido"] ."</option>";
         }
       ?>
      
    </select>
    <!-- <input type="hidden" class="form-control"  name="documen" value="<?php echo $docpro;?>"> -->

        <select name="Cursos" required class="select rol">
        <option selected disabled value="">Selecciona un curso</option>
        <?php
         while ($cursos=mysqli_fetch_array($filas))
         {
           echo "<option>" . $cursos["idCurso"] . "</option>";
         }
       ?>
    </select>


            <button class="boton" style="  margin-left: 3%;" type="submit" name="btnIngresar">
                Aceptar
            </button>
        </div>
    </form>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
