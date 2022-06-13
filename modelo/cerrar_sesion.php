<?php
session_start();

unset($_SESSION["usuario"]);



session_unset();



session_destroy();



header ('Location: ../vistas/inicio2.html');

exit;






?>