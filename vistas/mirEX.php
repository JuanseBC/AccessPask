<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .cover {
      background: 30% 30% no-repeat;
      background-size: cover;
        }
        body,
    html {
      background-color: #fff;
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
      position: relative;
      font-size: 16px;
      font-family: 'RobotoCondensed';
      overflow: hidden;
    }
    </style>
        
    </head>
    <body class="cover" style="background: rgb(255,244,0);
background: linear-gradient(180deg, rgba(255,244,0,1) 0%, rgba(0,0,0,1) 100%);">
<center>
    <table class="table table-dark table-striped" style=" color: white; text-align:  center ;   width: 69%;">
            <TR>
			<td>Nombres y apellidos</td>
            <td>Fecha</td>
            <td>Archivo</td>
		   <?php foreach ($produc as $dato) {
           
            ?>
            </TR>
        <td> <?php echo  $dato['nombre'] ." ". $dato['apellido'] ; ?> </td>
        <td> <?php echo  $dato['fecha']   ; ?> </td>
        <td> <?php echo "<img  src='" . $dato['archivo'] . "'>";?></td></tr>

        <?php } ?>
	</table>
    </center>
    </body>
</html>