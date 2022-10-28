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

        <h2>        <label>Documento</label> <input type="number"  name="docu" >
<label for="start">Fecha desde</label> <input class= "insert" id="fecha" type="date" name="fec1" required>
    
            <label for="start">Fecha hasta</label> <input class= "insert" id="fecha" type="date" name="fec2" required>
            <label for="fec">Hora desde</label> <input type="text" id="hora" name="hora1" value="HH:MM:SS" >
            <label for="fec">Hora hasta</label> <input type="text" id="hora" name="hora2" value="HH:MM:SS" >
           
    




            

            <br><input type="submit" value="Generar Informe">
    </form>

</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>

