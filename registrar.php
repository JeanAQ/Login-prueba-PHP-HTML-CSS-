<?php

include("con_db.php");
 
if (isset($_POST['Register'])) {
    if (strlen($_POST['nombre']) >=1 && strlen($_POST['apellido']) >=1 && strlen($_POST['correo']) >=1) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $email = trim($_POST['correo']);
        $fechareg = date("Y/m/d");
        $consulta = "INSERT INTO datos(nombre, apellido, correo, fecha_reg) VALUES ('$nombre','$apellido','$email','$fechareg')";
        $resultado = mysqli_query($conexion,$consulta);
        if ($resultado) {
            ?>
                <h3 class="ok">¡Te has inscrito correctamente.</h3>
            <?php
        } else {
            ?>
                <h3 class="error">¡Ha ocurrido un error!</h3>
            <?php
        }
    } else {
        ?>
            <h3 class="error">¡Todos los campos son obligatorios!</h3>
        <?php
    }
}

?>
