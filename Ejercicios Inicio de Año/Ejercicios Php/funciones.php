<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="nombre">
    <input type="text" name="apellido">
    <input type="submit" name="enviar">
    </form>
    <?php
    if(isset($_POST["enviar"])){
    $nombreingreso = $_POST["nombre"];
    $apellidoingreso = $_POST["apellido"];
    Saludo($nombreingreso, $apellidoingreso);
    }
    function Saludo($nombre, $apellido){
        echo "Hola " . $nombre . " " . $apellido;
    }

    ?>

</body>
</html>