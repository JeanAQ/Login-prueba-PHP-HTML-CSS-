<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Formulario</title>
</head>
<body>
    <form method="post">
        <h1>Ingrese Sus datos</h1>
        <input type="text" name="nombre" placeholder="Ingrese su nombre">
        <input type="text" name="apellido" placeholder="Ingrese su apellido">
        <input type="email" name="correo" placeholder="Correo">
        <input type="submit" name="Register">
    </form>
    <?php
    include('registrar.php');
    ?>
</body>
</html>