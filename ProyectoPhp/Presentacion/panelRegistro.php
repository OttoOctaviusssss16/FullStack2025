<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Concesionaria</title>
    <link rel="stylesheet" href="../Estilos/EstiloLogin.css">
</head>
<body>
    <header><h1>Concesionaria Scabino Cabral</h1></header>
    <h1 class="h1registro"> Registro </h1> 
    <form class="form_registro" action="" method="post">
        <label class="registro_label">Nombre</label><input type="text" name="cliente" class="ingresotexto">
        <br>
        <label class="registro_label">Telefono</label><input type="text" name="telefono" class="ingresotexto">
        <br>
        <label class="registro_label">Edad</label><input type="text" name="edad" class="ingresotexto">
        <br>
        <label class="registro_label">Direccion</label><input type="text" name="direccion" class="ingresotexto">
        <br>
        <label class="registro_label">Email</label><input type="text" name="email" class="ingresotexto">
        <br>
        <label class="registro_label">Contraseña</label><input type="password" name="contraseña" class="ingresotexto">
        <br>
        <input type="submit" name="register" value="Registrarse" class="botonestandar">
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
