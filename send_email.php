<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "fernandodanielfranquezflores@gmail.com";
    $subject = "Tarea pendiente";
    $task = $_POST['task'];
    $dueDate = $_POST['dueDate'];
    $message = "Tarea: $task\nFecha de vencimiento: $dueDate";

    $headers = "From: fernandodanielfranquezflores@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Correo electrónico enviado correctamente.";
    } else {
        echo "Error al enviar el correo electrónico. Por favor, intenta nuevamente más tarde.";
    }
} else {
    echo "Acceso denegado.";
}
?>
