<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Nombre</label><input type="text" name="cliente">
        <br>
        <label>Telefono</label><input type="text" name="telefono">
        <br>
        <label>Edad</label><input type="text" name="edad">
        <br>
        <label>Direccion</label><input type="text" name="direccion">
        <br>
        <label>Email</label><input type="text" name="email">
        <br>
        <label>Contraseña</label><input type="password" name="contraseña">
        <br>
        <input type="submit" name="register" value="Registrarse">
    </form>
</body>
</html>
<?php
include_once "../Logica/cliente.php";
if(isset($_POST['register'])){
$cliente = new cliente();
$cliente->setNombre($_POST['cliente']);
$cliente->setNombre($_POST['telefono']);
$cliente->setNombre($_POST['edad']);
$cliente->setNombre($_POST['direccion']);
$cliente->setNombre($_POST['email']);
$cliente->setNombre($_POST['contraseña']);
}
