/*<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'ejemplo@dominio.com';
$titulo = 'Contacto La Zona del Descuento'

$mensaje_completo = "Nombre: ".$nombre."<br>"."Email: ".$email."<br>"."Mensaje: ".$mensaje."<br>";

if ($_POST['submit']){
    if (mail ($para, $titulo, $mensaje_completo)){
        echo 'El mensaje se ha enviado';
    }else{
        echo 'Fallo en el envio';
    }
}
?>