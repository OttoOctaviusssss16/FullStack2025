<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label>Nombre</label><input type="text" name="nombre" required>
    <input type="submit" name="enviar">
</form>

</body>
</html>




<?php
session_start();
if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $_SESSION['nombre']=$nombre;
    header("Location: ejemplosesiones2.php");
}