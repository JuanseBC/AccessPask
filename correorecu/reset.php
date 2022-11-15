<?php 
if( isset($_GET['correo'])  && isset($_GET['token']) ){
    $email=$_GET['correo'];
    $token=$_GET['token'];
}else{
    header("Location: ../IniciarSesion.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AccessPak</title>

    <link rel="stylesheet" type="text/css" href="../stylos/estilos1.css">
    <link rel="stylesheet" type="text/css" href="../stylos/iniciarsesion6.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
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
            <IMG class="img_principal" type="icon" SRC="http://localhost/AccessPask/img/pask.png"  style="width: 60px;  margin: 3px;" >
        </div>

        <div class="options__menu">	

            <a href="#" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="http://localhost/AccessPask2/ReIngreso/ingreso.php">
                <div class="option">
                    <i class="fas fa-file-alt" title="Portafolio"></i>
                    <h4>Registrar ingreso</h4>
                </div>
            </a>
            
            <a href="http://localhost/AccessPask2/ReIngreso/salida.php">
                <div class="option">
                    <i class="far fa-file-alt" title="Cursos"></i>
                    <h4>Registrar salida</h4>
                </div>
            </a>

         

        </div>

    </div>
    <main>
    <div class="container">
        <div class="row justify-content-md-center" style="margin-top:15%">
            <form class="col-3" action="../controlador/verificartoken2.php" method="POST">
            <IMG class="img_principal" SRC="../img/istockphoto-1345548249-1024x1024 recu.jpg">
                <h2>Restablecer Password</h2>
                <div class="mb-3">
                    <label for="c" class="form-label">Codigo</label>
                    <input type="number" class="form-control" id="c" name="codigo">
                    <input type="hidden" class="form-control" id="c" name="correo" value="<?php echo $email;?>">
                    <input type="hidden" class="form-control" id="c" name="token" value="<?php echo $token;?>">
                </div>
               
                <button type="submit" name="press" class="LogIn">Restablecer</button>
            </form>
        </div>
    </div>

    </main>

      <footer>
        Access.Pask WEB &copy; 2022
      </footer>

    <script src="../formatos/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
