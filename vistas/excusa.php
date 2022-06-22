<?php include("../formatos/cerrse.php");          ?>

<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" type="text/css" href="../stylos/excusa2.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Pask</title>
    <link rel="icon" type="img" href="../img/pask.png" size="any">
    
</head>

<body>
   

            <form action="../modelo/excusa.php" method="post" class="form"  > <!-- enctype="multipart/form-data"  -->

            <div class="text">
                     FORMULARIO EXCUSA
                    </div>
               
                    
                    <div class="text1">Curso  <input type="text" class="insert" name="curso" placeholder="Ej: 601" required></div>
                    <div class="text1">Documento <input type="text" class="insert" name="documento" placeholder="Ej: 111111111" required></div>
                    <div class="text1">Nombre<input type="text" class="insert" name="nombre" placeholder="Ej: Juan" required></div>
                    <div class="text1">Apellido <input type="text" class="insert" name="apellido" placeholder="Ej: Cortés" required></div>
                   <!--  
                        
            
                  <span>fecha:</span>
                   <input id="fecha" type="date" name="fecha" required>
                    <abbr title="required" aria-label="required">*</abbr><br><br>
            </label>
                    </div> -->
                    <center>
                        <label id="nombre" for="username">
                     <span>descripcion</span></label><br>
                        <textarea name="descripcion" rows="10" cols="40" required>descripcion</textarea> <br>
                        <input type="file" name="subirarchivo" required> <br>
                        <input type="submit" name="enviar" values="enviar">
                </div>
            </form><br>
            </center>
            <footer>
                Access.Pask WEB &copy; 2022
            </footer>
</body>

</html>