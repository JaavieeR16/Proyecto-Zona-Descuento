<?php
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    session_start();
    $_SESSION['correo']=$correo;
    include('db.php');
    $consulta="SELECT * FROM usuarios where correo='$correo' and contrasena='$contrasena'";
    $resultado=mysqli_query($conexion,$consulta);
    $filas=mysqli_num_rows($resultado);
    if($filas){  
        $_SESSION['misesion'] = true;
        header("Location: index.php");
    }else{
        ?>
        <?php
            include("formularioinicio.php");
        ?>
        <h2 class="mal">¡ERROR EN LA AUTENTICACIÓN!</h2>
        <h3 class="mal2">Por favor intentelo de nuevo.</h3>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>