<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AccessPask</title>
    <link rel="icon" type="img" href="../img/pask.png" size="any">

    <link rel="stylesheet" type="text/css" href="../stylos/estilos.css">
    <link rel="stylesheet" type="text/css" href="../stylos/iniciarsesion6.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div >
            <IMG class="img_principal" type="icon" SRC="../img/pask.png"  style="width: 60px;  margin: 3px;" >
        </div>

        <div class="options__menu">	

            <a href="../IniciarSesion.html" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="ingreso.php">
                <div class="option">
                    <i class="fas fa-file-alt" title="Portafolio"></i>
                    <h4>Registrar ingreso</h4>
                </div>
            </a>
            
            <a href="salida.php">
                <div class="option">
                    <i class="far fa-file-alt" title="Cursos"></i>
                    <h4>Registrar salida</h4>
                </div>
            </a>

         

        </div>

    </div>

    <main>
    <?php 
ini_set('date.timezone','America/Bogota'); 
  date("g:i A");
// Resultado de ejemplo: 6:33 PM
date_default_timezone_set('America/bogota');
 date("Y-m-d ");
 ?>
  
 <form method="POST" action="../controlador/sal.php" accept-charset="UTF-8" class="form2"> 
 <div class="titulo">
                <h1>REGISTRO DE SALIDA</h1>
    </div><br>
 <label for="doc2" class="text">Fecha <input type="text" class="doc2"  name="fech" value="<?php echo  date("Y-m-d ") ?>"readonly></input></label><br>
 <label for="doc2" class="text">Hora de Salida: <input type="text" class="doc2" name="hoSa" value="<?php echo date("g:i A")?>"readonly></input></label><br>
 <label for="doc2" class="text">Documento <input type="text"class="doc2" name="documen" value=""required></imput></label><br>
 <input type="submit"  class="LogIn2" name="enviar"  value="Registrar Datos"></imput>

      </main>

      <footer>
        Access.Pask WEB &copy; 2022
      </footer>

    <script src="../formatos/script.js"></script>
</body>
</html>