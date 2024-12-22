<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Configura los detalles del correo
    $to = "lingerieanime@gmail.com";  // Cambia por tu correo
    $subject = "Nuevo mensaje desde tu formulario de contacto";
    $body = "Nombre: $nombre\nCorreo: $email\n\nMensaje:\n$mensaje";
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito!";
    } else {
        echo "Hubo un problema al enviar el mensaje. Inténtalo de nuevo.";
    }
}
?>
