<?php include("../formatos/cerrse.php");          ?>

<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" type="text/css" href="../stylos/excusa4.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Pask</title>
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    
</head>

<body>
<class="scroll"> 

            <form action="../modelo/excusa.php" method="post" class="form"  > <!-- enctype="multipart/form-data"  -->

            <div class="text">
                     FORMULARIO EXCUSA
                    </div>
               
                    
                    <div class="text1">Curso  <input type="text" class="insert" name="curso" placeholder="Ej: 601" required></div>
                    <div class="text1">Documento <input type="text" class="insert" name="documento" placeholder="Ej: 111111111" required></div>
                    <div class="text1">Nombre<input type="text" class="insert" name="nombre" placeholder="Ej: Juan" required></div>
                    <div class="text1">Apellido <input type="text" class="insert" name="apellido" placeholder="Ej: Cortés" required></div>
                    <div class="text1">Fecha<input class= "insert" id="fecha" type="date" name="fecha" required></div><br>
                    <div class="text1">Descripción</div><textarea name="descripcion" class="insert1" rows="10" cols="40" required></textarea> 
                        <input class="env" type="file"  value ="submit" name="subirarchivo" required>
                        <br><br>
                        <button class="Actu" type="submit"   value="enviar" >Enviar</button> <br>
                        
                </div>
            </form><br>
           
            <div class="loFeo">
            
            Access.Pask WEB &copy; 2022
        
    </div>

</body>

</html>