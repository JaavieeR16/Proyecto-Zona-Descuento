<?php
    include("conexiondb.php");
    if (isset($_POST['registrar'])) {
        if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['contrasena']) >= 1) {
            $nombre = trim($_POST['nombre']);
            $apellidos = trim($_POST['apellidos']);
            $correo = trim($_POST['correo']);
            $contrasena = trim($_POST['contrasena']);
            $fechareg = date("d/m/y");
            $consulta = "INSERT INTO usuarios(nombre, apellidos, correo, contrasena, fecha_reg) VALUES ('".$nombre."','".$apellidos."','".$correo."','".$contrasena."','".$fechareg."')";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado) { 
                ?>
                    <h3 class="ok">¡Te has registrado correctamente!</h3>
                <?php
                    header("Location: formularioinicio.php")    
                ?>
                <?php     
            } else {
                ?>
                <?php
                    include("formularioregistro.php");
                ?>
                    <h2 class="mal">¡ERROR COMPLETE LOS CAMPOS CORRECTAMENTE!</h2>
                <?php
            }
        } else {
            ?>
            <?php
                include("formularioregistro.php");
            ?>
                <h3 class="mal2">¡ERROR COMPLETE LOS CAMPOS!</h3>
            <?php
        }
    }
?>