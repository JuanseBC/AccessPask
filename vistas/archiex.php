<?php include("../formatos/cerrse.php");          ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($produc as $dato) {
           
           ?>
<td> <?php echo "<embed  class='imgsubi'src='" . $dato['archivo'] . "'type='application/pdf' width: '600px';>";?></td></tr>
<?php } ?>

</body>
</html>