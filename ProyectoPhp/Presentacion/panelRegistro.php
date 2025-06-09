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
$cliente->setTelefono($_POST['telefono']);
$cliente->setEdad($_POST['edad']);
$cliente->setDireccion($_POST['direccion']);
$cliente->setEmail($_POST['email']);
$cliente->setContraseña($_POST['contraseña']);
echo "<table>
      <tr>    
      <th>Nombre</th>
      <th>Telefono</th>
      <th>Edad</th>
      <th>Direccion</th>
      <th>Email</th>
      <th>Contraseña</th>
      </tr>
      <tr>
      <td>".$cliente->getNombre()."</td>
      <td>".$cliente->getTelefono()."</td>
      <td>".$cliente->getEdad()."</td>
      <td>".$cliente->getDireccion()."</td>
      <td>".$cliente->getEmail()."</td>
      </tr>
      </table>
    ";
}
