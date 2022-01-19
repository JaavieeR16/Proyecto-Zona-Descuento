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
        <link rel="stylesheet" href="estilos/estiloindex.css">
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
                            <li><a href="index.php" class="select">INICIO</a></li>
                            <li><a href="ofertas.php">OFERTAS</a></li>
                            <li><a href="contacto.php">CONTÁCTANOS</a></li>
                            <li><a href="matar.php">CERRAR SESIÓN</a></li>
                        </ul>
                    </nav>
                    <div class="btn_menu" id="btn_menu"><i class="fas fa-bars"></i></div>
                </div>
            </div>
        </header>
        <div class="container_all" id="container_all">
            <div class="cover">
                <div class="container_cover">
                    <div class="container_info">
                        <h1>LA ZONA DEL DESCUENTO</h1>
                        <h2>¡BIENVENIDO!</h2>
                        <p>He creado esta web para facilitar a la gente la busqueda de ofertas y asi 
                        poder hacer que todo el mundo pueda ahorrar comprando las mejores marcas al mejor precio.
                        Para poder acceder pulse el siguiente botón o entre desde el menú de la parte superior 
                        de la pantalla. ¡A comprar!</p>
                        <a href="ofertas.php">
                            <input type="button" value="Entrar">
                        </a>
                    </div>
                    <div class="container_vector">
                        <img src="img/ordenador_online.png">
                    </div>
                </div>
            </div>
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