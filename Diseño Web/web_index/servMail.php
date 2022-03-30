<?php
$name = $_POST['nameMail'];
$mail = $_POST['fromMail'];
$phone = $_POST['phoneMail'];
$message = $_POST['textMail'];

$header  = 'From: ' . $mail . " \r\n";
$header  .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header  .= "Mime-Version: 1.0 \r\n";
$header  .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . "\r\n";
$message .= "Su correo es: " . $mail . " \r\n";
$message .= "Su telefono es: " . $phone . " \r\n";
$message .= "Mensaje: " . $message . " \r\n";
$message .= "Enviado el:  " . date('d/m/Y', time());

$para = 'shakito69@gmail.com';
$asunto = 'Contacto YN Abogados';

mail($para, $asunto, utf8_decode($message), $header);
echo "<script>alert('Correo enviado exitosamente.')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>
