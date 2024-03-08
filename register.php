<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar el formulario de registro
    $email = $_POST['email'];

    // Validar el correo electrónico (puedes agregar más validaciones aquí)

    // Generar el código de verificación
    $verificationCode = generateVerificationCode();

    // Enviar correo electrónico de verificación
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.office365.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'fernandodanielfranquezflores29@outlook.com';
    $mail->Password = 'Clausahdany11';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('fernandodanielfranquezflores29@outlook.com', 'Daniel');
    $mail->addAddress($email);
    $mail->Subject = 'Verificación de correo electrónico';
    $mail->Body = 'Tu código de verificación es: ' . $verificationCode;

    if ($mail->send()) {
        echo 'Se ha enviado un correo electrónico de verificación a tu dirección. Por favor, verifica tu correo electrónico.';
    } else {
        echo 'Error al enviar el correo electrónico de verificación. Por favor, inténtalo de nuevo más tarde.';
    }
} else {
    // Si el formulario no ha sido enviado por el método POST, redirigir al formulario de registro
    header("Location: index.html");
    exit;
}

function generateVerificationCode() {
    // Generar un código de verificación de 6 dígitos aleatorio
    return rand(100000, 999999);
}
?>
