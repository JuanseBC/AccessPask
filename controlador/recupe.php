<?php
use PHPMailer\PHPMailer;
use PHPMailer\SMTP;
use PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

$bytes = random_bytes(5);

$mail = new PHPMailer\PHPMailer(True);
$codigo= rand(1000,9999);
$titulo = "¡Reestablece tu contraseña!";


try {

    $fromcorreo = "wangulo69@misena.edu.co";
    $fromname = "Wilmer angulo";
    $host = "smtp.gmail.com";
    $port = "587";
    $SMTPAuth = "login";
    $_SMTPSecure = "tls";
    $password = "Wilmer_00*";

    $emailTo = $_POST['correo'];
    //Server settings
                   //Enable verbose debug output
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();                                            //Send using SMTP
    
    $mail->Host       = $host;                     //Set the SMTP server to send through
    $mail->SMTPAuth   = $SMTPAuth;                                   //Enable SMTP authentication
    $mail->Username   = $fromcorreo;                     //SMTP username
    $mail->Password   = $password;                               //SMTP password
    $mail->SMTPSecure = $_SMTPSecure;            //Enable implicit TLS encryption
    $mail->Port       = $port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($fromcorreo, $fromname);
    $mail->addAddress($correo, 'AccessPask');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperacion de contraseña';
    $mail->Body    = '<html>
    <head>
      <title>'.$titulo.'</title>
    </head>
    <body>
    <center>
        <h1>AccessPask</h1>
        <IMG style="width: 200px;height: 200px;margin-top: 5%;border-radius: 10px;" SRC="https://img.freepik.com/vector-premium/escudo-candado-marca-verificacion-icono-vector-plano-senal-seguridad-candado-marca-verificacion_578506-255.jpg?w=2000">
        <div style="text-align:center; background-color:#ccc">
            <h2 style="color:black">Cambio de contraseña</h2>
            <p style="color black">Este es el codigo de verificacion para recuperar contraseña</p>
            <h3>'.$codigo.'</h3>
            <p> <a 
                href="http://localhost/AccessPask/correorecu/reset.php? correo='.$correo.'&token='.$token.'"> 
                Para restablecer da click aqui </a> </p>
            <p> <small>Si usted no envio este codigo favor de omitir</small> </p>
        </div>
    </center>
    </body>
    </html>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    $enviado = true;
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo "<script>alert('su correo es incorrecto vuelva a intentar');</script>";
    $enviado =false;
}

?>