<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

    <title>Document</title>
</head>
<body>
    <center>
 <form action="../controlador/report.php" method="post" >
        <h1>Modulo de reportes</h1>
        <h2><label for="start">Fecha desde</label> <input type="text" id="start" name="fec1"
            value="dd-mm-aaaa"
            min="2022-01-01" max="2050-12-31">
            <label for="start">Fecha hasta</label> <input type="text" id="start" name="fec2"
            value="dd-mm-aaaa"
            min="2022-01-01" max="2050-12-31">
            <label for="fec">Hora desde</label> <input type="text" id="hora" name="hora1" value="HH:MM:SS" >
            <label for="fec">Hora hasta</label> <input type="text" id="hora" name="hora2" value="HH:MM:SS" >
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
        <option selected>Seleccione un curso</option>
        <?php
         while ($cursos=mysqli_fetch_array($filas))
         {
           echo "<option>" . $cursos["idCurso"] . "</option>";
         }
       ?>
    </select>




            

            <br><input type="submit" value="Generar Informe">
    </form>

</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>

