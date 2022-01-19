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
                    <a href="https://amzn.to/3rvmLih" target="blank">
                        <img src="img/img_ofertas/oferta6.jpg">
                        <p class="nombre" title="Windows 11 Professional 32/64 bits Licencia VKQ Key| Clave perpetua en Español | Clave de Activación Original | Español | 100% de garantía de activación | Entrega 2H-6H por correo electrónico.">
                        Windows 11 Professional 32/64 bits Licencia VKQ Key| Clave perpetua en Español | Clave de Activación Original | Español | 100% de garantía de activación | Entrega 2H-6H por correo electrónico.</p>
                        <p class="precio">18.90€</p>
                        <p class="precio2">Precio anterior: <span class="tachado">24.99€</span></p>
                    </a>
                </li>
                <li class="lista_li">
                    <a href="https://amzn.to/3rkbMIg" target="blank">
                        <img src="img/img_ofertas/oferta7.jpg">
                        <p class="nombre" title="HP OMEN 15-en1010ns - Ordenador Portátil Gaming de 15.6 pulgadas FHD AMD Ryzen 7-5800H, 16GB DDR4-SDRAM, 512GB SSD, NVIDIA RTX 3060 6GB, FreeDOS Plata Mica - Teclado QWERTY Español.">
                        HP OMEN 15-en1010ns - Ordenador Portátil Gaming de 15.6 pulgadas FHD AMD Ryzen 7-5800H, 16GB DDR4-SDRAM, 512GB SSD, NVIDIA RTX 3060 6GB, FreeDOS Plata Mica - Teclado QWERTY Español.</p>
                        <p class="precio">1249.00€</p>
                        <p class="precio2">Precio anterior: <span class="tachado">1349.99€</span></p>
                    </a>
                </li>
                <li class="lista_li">
                    <a href="https://amzn.to/3roAebv" target="blank">
                        <img src="img/img_ofertas/oferta8.jpg">
                        <p class="nombre" title="Bosch Maletín X-Line con 50 unidades para taladrar y atornillar (para madera, piedra y metal, accesorios para taladro atornillador)">
                        Bosch Maletín X-Line con 50 unidades para taladrar y atornillar (para madera, piedra y metal, accesorios para taladro atornillador)</p>
                        <p class="precio">21.19€</p>
                        <p class="precio2">Precio anterior: <span class="tachado">39.19€</span></p>
                    </a>
                </li>
                <li class="lista_li">
                    <a href="https://amzn.to/3qxeqLv" target="blank">
                        <img src="img/img_ofertas/oferta9.jpg">
                        <p class="nombre" title="Gillette Fusion 5 ProGlide Máquina de Afeitar Hombre + 4 Cuchillas de Recambio + Base Magnética, Regalos Originales para Hombre.">
                        Gillette Fusion 5 ProGlide Máquina de Afeitar Hombre + 4 Cuchillas de Recambio + Base Magnética, Regalos Originales para Hombre.</p>
                        <p class="precio">24.14€</p>
                        <p class="precio2">Precio anterior: <span class="tachado">29.99€</span></p>
                    </a>
                </li>
                <li class="lista_li">
                    <a href="https://amzn.to/34ZeOdw" target="blank">
                        <img src="img/img_ofertas/oferta10.jpg">
                        <p class="nombre" title="HOMCOM Triciclo para Bebé 4 en 1 Bicicleta para +18 Meses con Capota Manija de Empuje Ajustable Barra Extraíble Reposapiés Plegable Canasta de Almacenaje 92x51x110 cm Gris.">
                        HOMCOM Triciclo para Bebé 4 en 1 Bicicleta para +18 Meses con Capota Manija de Empuje Ajustable Barra Extraíble Reposapiés Plegable Canasta de Almacenaje 92x51x110 cm Gris.</p>
                        <p class="precio">67.99€</p>
                        <p class="precio2">Precio anterior: <span class="tachado">81.99€</span></p>
                    </a>
                </li>
            </ul>
        </div>
        <a href="ofertas.php">
            <input class="btn_siguiente" type="button" value="Página anterior">
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