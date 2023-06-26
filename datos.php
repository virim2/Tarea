<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["txtNombre"];
  $email = $_POST["txtEmail"];
  $telefono = $_POST["txtTelefono"];
  $sitio_web = $_POST["txtSitioWeb"];
  $asunto = $_POST["txtAsunto"];
  $mensaje = $_POST["txtMensaje"];

  echo "Los datos se han guardado correctamente:<br>";
  echo "Nombre: " . $nombre . "<br>";
  echo "Email: " . $email . "<br>";
  echo "Teléfono: " . $telefono . "<br>";
  echo "SitioWeb: " . $sitio_web . "<br>";
  echo "Asunto: " . $asunto . "<br>";
  echo "Mensaje: " . $mensaje . "<br>";
}
?>