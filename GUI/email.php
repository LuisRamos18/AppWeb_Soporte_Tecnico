<?php


$destinatario='luis.ramosf18@gmail.com';
$nombre='cmbusuario';
$asunto='txtmotivo';
$mensaje='txtdescripcion';
$email='Correo';
$headers = "From: luis.patineta10@gmail.com";

mail($destinatario, $asunto, $mensaje, $headers);



?>
