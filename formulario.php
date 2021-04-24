      
<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$tele = $_POST['tele'];
$vive = $_POST['vive'];
$lote = $_POST['lote'];
$bono = $_POST['bono'];
$ingreso = $_POST['ingreso'];


$header = "pruba";

$mensaje = "Este mensaje fue enviado por: " . $name;

$destinatario = 'dfgtoledo27@outlook.es';
$asunto = 'Prueba pagina';

mail($destinatario, $asunto, $mensaje, $header);
echo "<script>alert('correo enviado')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>
