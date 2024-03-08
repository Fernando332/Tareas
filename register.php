<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar el formulario de registro
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validar el correo electrónico y la contraseña (puedes agregar más validaciones aquí)

    // Generar el código de verificación
    $verificationCode = generateVerificationCode();

    // Enviar correo electrónico de verificación
    $subject = "Verificación de correo electrónico";
    $message = "Tu código de verificación es: " . $verificationCode;
    $headers = "From: fernandodanielfranquezflores@gmail.com";

    if (mail($email, $subject, $message, $headers)) {
        // Correo electrónico enviado correctamente, ahora puedes almacenar el código de verificación en la base de datos
        // También puedes redirigir al usuario a una página de verificación o mostrar un mensaje de éxito aquí
        // Por simplicidad, vamos a mostrar un mensaje de éxito en este ejemplo
        echo "Se ha enviado un correo electrónico de verificación a tu dirección. Por favor, verifica tu correo electrónico.";
    } else {
        // Error al enviar el correo electrónico
        echo "Se produjo un error al enviar el correo electrónico. Por favor, inténtalo de nuevo más tarde.";
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
