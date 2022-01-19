<?php
session_start();
if(!@$_SESSION['misesion']){
    die("¡Lo siento pero para poder entrar en nuestra web tienes que registrarte o iniciar sesión antes!");
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>La Zona del Descuento</title>
        <link rel="icon" href="img/logogrande.ico">
        <link rel="stylesheet" href="estilos/estilo_ofertas.css">
        <script src="https://kit.fontawesome.com/30ff47f3b6.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header id="header">
            <div class="container_header">
                <div class="logo">
                    <img src="img/logo_lateral2.jpg">
                </div>
                <div class="container_nav">
                    <nav id="nav">
                        <ul>
                            <li><a href="index.php">INICIO</a></li>
                            <li><a href="ofertas.php" class="select">OFERTAS</a></li>
                            <li><a href="contacto.php">CONTÁCTANOS</a></li>
                            <li><a href="matar.php">CERRAR SESIÓN</a></li>
                        </ul>
                    </nav>
                    <div class="btn_menu" id="btn_menu"><i class="fas fa-bars"></i></div>
                </div>
            </div>
        </header>
        <div class="anuncio">
            <ul class="lista_ul">
                <li class="lista_li">
                    <a href="https://amzn.to/3tAZnlN" target="blank">
                        <img src="img/img_ofertas/oferta1.jpg">
                        <p class="nombre" title="Rowenta Compact Power SO2210 - Calefactor Compacto con motor dual de 1000 W y 2000 W, función Silence, 2 velocidades y múltiples funciones, termostato anti-heladas, función frío, fácil transporte">
                        Rowenta Compact Power SO2210 - Calefactor Compacto con motor dual de 1000 W y 2000 W, función Silence, 2 velocidades y múltiples funciones, termostato anti-heladas, función frío, fácil transporte.</p>
                        <p class="precio">28.84€</p>
                        <p class="precio2">Precio anterior: <span class="tachado">34.99€</span></p>
                    </a>
                </li>
                <li class="lista_li">
                    <a href="https://amzn.to/3qx3LjX" target="blank">
                        <img src="img/img_ofertas/oferta2.jpg">
                        <p class="nombre" title="Cecotec Pure Aroma 150 Yang. Humidificador ultrasónico y difusor de Aroma 150 ml. Temporizador 3 Horas. 7 Colores led. Función aromaterapia. Ultra silencioso.">
                        Cecotec Pure Aroma 150 Yang. Humidificador ultrasónico y difusor de Aroma 150 ml. Temporizador 3 Horas. 7 Colores led. Función aromaterapia. Ultra silencioso.</p>
                        <p class="precio">19.38€</p>
                        <p class="precio2">Precio anterior: <span class="tachado">29.99€</span></p>
                    </a>
                </li>
                <li class="lista_li">
                    <a href="https://amzn.to/3IcXTlR" target="blank">
                        <img src="img/img_ofertas/oferta3.jpg">
                        <p class="nombre" title="COSORI Smart - Freidora de aire caliente con WiFi (5,5 L, XXL, con control por aplicación, pantalla táctil LED, 11 programas, precalentamiento y mantenimiento en caliente, modo batido.">
                        COSORI Smart - Freidora de aire caliente con WiFi (5,5 L, XXL, con control por aplicación, pantalla táctil LED, 11 programas, precalentamiento y mantenimiento en caliente, modo batido.</p>
                        <p class="precio">135.99€</p>
                        <p class="precio2">Precio anterior: <span class="tachado">159.99€</span></p>
                    </a>
                </li>
                <li class="lista_li">
                    <a href="https://amzn.to/3tAHZh7" target="blank">
                        <img src="img/img_ofertas/oferta4.jpg">
                        <p class="nombre" title="ELIOX Mascarilla FFP2 Negro CE 2163, Mascarilla Homologada de Protección Civil. 5 capas. Mascara de Alta Eficiencia Filtración + Normativa EN149, Entrega Rapida (20 piezas)">
                        ELIOX Mascarilla FFP2 Negro CE 2163, Mascarilla Homologada de Protección Civil. 5 capas. Mascara de Alta Eficiencia Filtración + Normativa EN149, Entrega Rapida (20 piezas)</p>
                        <p class="precio">13.50€</p>
                        <p class="precio2">Precio anterior: <span class="tachado">19.99€</span></p>
                    </a>
                </li>
                <li class="lista_li">
                    <a href="https://amzn.to/33kiQNe" target="blank">
                        <img src="img/img_ofertas/oferta5.jpg">
                        <p class="nombre" title="Logitech G502 HERO Ratón Gaming con Cable Alto Rendimiento, Captor HERO 25K, 25,600 DPI, RGB, Peso Personalizable, 11 Botones Programables, Memoria Integrada, PC/Mac - Negro.">
                        Logitech G502 HERO Ratón Gaming con Cable Alto Rendimiento, Captor HERO 25K, 25,600 DPI, RGB, Peso Personalizable, 11 Botones Programables, Memoria Integrada, PC/Mac - Negro.</p>
                        <p class="precio">49.39€</p>
                        <p class="precio2">Precio anterior: <span class="tachado">59.99€</span></p>
                    </a>
                </li>
            </ul>
        </div>
        <a href="ofertas2.php">
            <input class="btn_siguiente" type="button" value="Siguiente página">
        </a>
        <footer>
            <div class="container_footer">
                <div class="box_footer">
                    <div class="logo">
                        <img src="img/logo_lateral2.jpg">
                    </div>
                    <div class="sobre_nosotros">
                        <p>He creado esta web para facilitar a la gente la busqueda de ofertas y asi 
                        poder hacer que todo el mundo pueda ahorrar comprando las mejores marcas al mejor precio.</p>
                    </div>
                </div>
                <div class="box_footer">
                    <h2>Redes Sociales</h2>
                        <a href="https://www.facebook.com/jaavieer16/" target="blank"><i class="fab fa-facebook-square"></i>Facebook</a>
                        <a href="https://www.instagram.com/jaavieer16/" target="blank"><i class="fab fa-instagram-square"></i>Instagram</a>
                        <a href="https://twitter.com/Jaavieer_16" target="blank"><i class="fab fa-twitter-square"></i>Twitter</a>
                        <a href="https://www.youtube.com/channel/UC-IvM1PWGZehbZUn3ZrCtiA" target="blank"><i class="fab fa-youtube-square"></i>YouTube</a>
                </div>
            </div>
            <div class="box_copyright">
                <hr>
                <p>Todos los derechos reservados © 2022
                <b>Javier Monroy Muñoz</b></p>
            </div>
        </footer>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>