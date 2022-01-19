<!doctype html>
<html lang="es">
    <head>
        <title>Incio Sesión</title>
        <meta charset="utf-8">
        <link rel="icon" href="img/logogrande.ico">
        <link rel="stylesheet" href="estilos/estiloforminicio.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <img class="milogo" src="img/logotrans.png">
        </header>
        <main>
            <section class="registro">
                <form action="validar.php" method="post">
                    <h4>Iniciar Sesión:</h4>
                    <input class="caja" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
                    <input class="caja" type="password" name="contrasena" id="contraseña" placeholder="Ingrese su Contraseña">
                    <p>Estoy de acuerdo con <a href="terminosycondiciones.html" target="blank">Terminos y Condiciones</a></p>
                    <input class="boton" type="submit" value="Iniciar Sesión">
                    <p><a href="formularioregistro.php">¿Todavía no tiene una cuenta?</a></p>
                </form>
            </section> 
        </main>
    </body>
</html>