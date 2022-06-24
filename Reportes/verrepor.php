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
<section>
    <table  class="table table-dark table-striped table-fixed" style="text-align:  center;">
        <TR style="width: 1330px ;">
            <center>
           <h2>reportes de los estudiantes<h2>
            <td style="width: 133px ;">Documento</td>
            <td style="width: 133px ;">Nombre</td>
            <td style="width: 133px ;">Apellido</td>
            <td style="width: 133px ;">Fecha</td>
            <td style="width: 133px ;">hora de ingreso</td>
            <td style="width: 133px ;">hora de salida</td>

            <center>

        </TR>

        <?php foreach ($pro as $dato) {?>

        <tr style="width: 133px ;">   
        <td style="width: 133px ;"> <?php echo  $dato['documento'] ?></td>  
        <td style="width: 133px ;"> <?php echo  $dato['Nombre']  ?></td>
        <td style="width: 133px ;"> <?php echo  $dato['Apellido']  ?></td>
        <td style="width: 133px ;"> <?php echo  $dato['Fecha']  ?></td>   
        <td style="width: 133px ;"> <?php echo  $dato['hin']  ?></td>
        <td style="width: 133px ;"> <?php echo  $dato['hsa']  ?></td>

        

    
        <?php } ?>
    <a  href="../Reportes/pdf.Zphp"> Descargar archivo PDF</a>
    </table>
</section>
</center>
</body>
</html>		