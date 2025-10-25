<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = htmlspecialchars($_POST["nombre"]);
  $correo = htmlspecialchars($_POST["correo"]);
  $mensaje = htmlspecialchars($_POST["mensaje"]);

  $destinatario = "tucorreo@elcomal.com.sv"; // 🔁 cambia esto por tu correo real
  $asunto = "Nuevo mensaje de contacto desde El Comal";
  $contenido = "Nombre: $nombre\nCorreo: $correo\n\nMensaje:\n$mensaje";

  if (mail($destinatario, $asunto, $contenido)) {
    echo "<script>alert('✅ Mensaje enviado correctamente. ¡Gracias por contactarnos!'); window.location.href='Contactos.php';</script>";
  } else {
    echo "<script>alert('❌ Hubo un error al enviar el mensaje. Intenta nuevamente.'); window.location.href='Contactos.php';</script>";
  }
} else {
  header("Location: Contactos.php");
  exit;
}
?>
