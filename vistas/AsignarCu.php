<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AccessPask</title>
</head>

<body>
    <form method="post" action="../controlador/asig.php">
        <center>
        <h4><label for="rol" style="color: rgb(0, 0, 0); font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-style: oblique; font-weight: 600; ">Asignar curso</label></h4>
        <br>
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
        <select name="Cursos"  >
        <option selected>Selecciona un curso</option>
        <?php
         while ($cursos=mysqli_fetch_array($filas))
         {
           echo "<option>" . $cursos["idCurso"] . "</option>";
         }
       ?>
    </select>

<center></center>
        <div class="modal-footer" style="background-color: #ffd000; width: 481px; border-radius: 15px; ">
            <button class="btn btn-dark" type="submit" name="btnIngresar">
                Aceptar
            </button>

        </div>
    </form>
</body>

</html>