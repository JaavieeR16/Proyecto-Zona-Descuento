<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario Registro</title>
        <link rel="icon" href="img/logogrande.ico">
        <link rel="stylesheet" href="estilos/estiloformregistro.css">
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
                <form action="registrar.php" method="post">
                    <h4>Formulario Regístro:</h4>
                    <input class="caja" type="text" name="nombre" id="nombres" placeholder="Ingrese su Nombre">
                    <input class="caja" type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus Apellidos">
                    <input class="caja" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
                    <input class="caja" type="password" name="contrasena" id="contraseña" placeholder="Ingrese su Contraseña">
                    <p>Estoy de acuerdo con <a href="terminosycondiciones.html" target="blank">Terminos y Condiciones</a></p>
                    <input class="boton" type="submit">
                    <input type="hidden" name="registrar" value="hola">
                    <p><a href="formularioinicio.php">¿Ya tienes una cuenta?</a></p>
                </form>
            </section> 
        </main>
    </body>
</html>