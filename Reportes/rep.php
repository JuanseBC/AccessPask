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
        <h2><label for="start">Fecha</label> <input type="date" id="start" name="fec"
            value="dd-mm-aaaa"
            min="2022-01-01" max="2050-12-31">
            <br>
            <label for="fec">Hora</label> <input type="time" id="hora" name="hora" value="HH:MM:SS" >
            <br><input type="submit" value="Generar Informe">
    </form>

</center>
</body>
</html>

