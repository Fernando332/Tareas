<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Configuración de PHPMailer
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.office365.com';
$mail->SMTPAuth = true;
$mail->Username = 'fernandodanielfranquezflores29@outlook.com';
$mail->Password = 'Clausahdany11';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

// Configuración del correo electrónico
$mail->setFrom('fernandodanielfranquezflores29@outlook.com', 'Tu Nombre');
$mail->addAddress('franquezfloresf@gmail.com', 'Nombre del Destinatario');
$mail->Subject = 'Confirmacon';
$mail->Body = 'Contenido del Correo';

// Enviar correo electrónico
if ($mail->send()) {
    echo 'Correo electrónico enviado correctamente.';
} else {
    echo 'Error al enviar el correo electrónico: ' . $mail->ErrorInfo;
}
?>
