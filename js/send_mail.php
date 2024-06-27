<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Dirección de correo a la que quieres recibir los mensajes
    $destinatario = "lautarotoiw@gmail.com";

    // Asunto del correo
    $asunto = "Mensaje de contacto desde mi sitio web";

    // Construye el cuerpo del mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje\n";

    // Cabeceras del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envía el correo
    if (mail($destinatario, $asunto, $cuerpoMensaje, $headers)) {
        echo "¡Correo enviado correctamente!";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
