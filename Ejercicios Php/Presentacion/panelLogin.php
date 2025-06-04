<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Email</label><input type="text" name="email">
        <br>
        <label>Contraseña</label><input type="password" name="contraseña">
        <br>
        <input type="submit" name="login" value="Iniciar Sesión">
        <input type="submit" name="register" value="Registro">
    </form>
</body>
</html>
<?php
include_once "../Logica/cliente.php";
if(isset($_POST['login'])){
$cliente = new cliente();
$cliente->setNombre($_POST['email']);
$cliente->setNombre($_POST['contraseña']);
}
if(isset($_POST['register'])){
header("Location:panelRegistro.php");
}