<?php
include_once "../Logica/cliente.php";
session_start();
?>
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
if(isset($_POST['register'])){
$usuario = new cliente();
$usuario->setNombre($_POST['cliente']);
$usuario->setTelefono($_POST['telefono']);
$usuario->setEdad($_POST['edad']);
$usuario->setDireccion($_POST['direccion']);
$usuario->setEmail($_POST['email']);
$usuario->setContraseña($_POST['contraseña']);
$usuario->setTipo("cliente");
$_SESSION['Usuarios'][]=$usuario;
header("Location: panelLogin.php");
}
