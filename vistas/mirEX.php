<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Access Pask</title>
        <link rel="icon" type="img" href="../img/pask.png" size="any">
    <link rel="stylesheet" type="text/css" href="../stylos/mirEx2.css">
    </head>
    <body>
    <main>
    <div class="nom"><img class="listmaes" src="../img/excusa.png">
          Listado de Excusas
        </div>
    <table>
            <tr>
            <th class= "text1">Fecha</th>
            <th class="text1">Descripción</th>
            <th class= "text1">Archivo</th>
            </thead>
            <tbody>
        
		   <?php foreach ($produc as $dato) {
           
            ?>
            </tr>
        <td> <?php echo  $dato['fecha']   ; ?> </td>
        <td> <?php echo  $dato['descripcion']   ; ?> </td>
        
<td> <?php echo "<a class='boton' href ='". $dato['archivo'] ."'>visualizar excusa</a>" ;?></td>
        <?php } ?>
	</table>
    <a class="boton" href="../vistas/PRF.php">Regresar</a>
    
    </body>
</html>