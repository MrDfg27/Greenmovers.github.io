      
<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$tele = $_POST['tele'];
$vive = $_POST['vive'];
$lote = $_POST['lote'];
$bono = $_POST['bono'];
$ingreso = $_POST['ingreso'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message = "Su correo electronico es: " . $mail . " \r\n";
$message = "Teléfono de contacto es: " . $phone . " \r\n";
$message = "Lugar de residencia: " . $vive . " \r\n";
$message = "Cuenta con lote propio: " . $lote . " \r\n";
$message = "Su tipo de bono es: " . $bono . " \r\n";
$message = "Su rango de ingreso familiar es: " . $ingreso . " \r\n";

$para = 'dfgtoledo27@outlook.es';
$asunto = 'Prueba pagina';

mail($para, $asunto, $message, $header);


?>
