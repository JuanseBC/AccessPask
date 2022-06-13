<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body style="background: rgb(255,244,0);
background: linear-gradient(180deg, rgba(255,244,0,1) 0%, rgba(0,0,0,1) 100%);">

<center>

<table class="table table-dark table-striped" style=" color: white;width: 70%;  text-align:center; ">
    <head>
            <TR>
			<td >Nombres y apellidos</td>
			<td></td>
            </TR>

		   <?php foreach ($sole as $dato) {?>

        <tr>   
        <td > <?php echo  $dato['Nombre'] ." ". $dato['Apellido'] ; ?> </td>
        <td><a href="../vistas/excusa.html" class="btn btn-info">ingresa su excusa</a></td>

        <?php } ?>
	</table>

    </center>
</body>
</html>