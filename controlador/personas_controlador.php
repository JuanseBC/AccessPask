<?php
    //Llamada al modelo
    require_once("modelo/usuario.php");
    $usuario=new usuario_modelo();
    $datos=$usuario->get_usuario();

    //Llamada a la vista
    require_once("IniciarSesion.html");
?> 