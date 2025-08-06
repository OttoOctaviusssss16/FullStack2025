<?php
include_once "../Logica/cliente.php";
include_once "../Persistencia/UsuarioBD.php";
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
        <label class="registro_label">CI</label><input type="int" name="ci" class="ingresotexto">
        <label class="registro_label">Nombre</label><input type="text" name="nombre" class="ingresotexto">
        <br>
        <label class="registro_label">Telefono</label><input type="text" name="telefono" class="ingresotexto">
        <br>
        <label class="registro_label">Direccion</label><input type="text" name="direccion" class="ingresotexto">
        <br>
        <label class="registro_label">Email</label><input type="email" name="email" class="ingresotexto">
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
if(empty($_POST['ci']) || empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['telefono']) || empty($_POST['contraseña']) || empty($_POST['direccion'])) {
    echo "<script>
            alert('Hay datos vacíos, te pegan en tu house bro?');
          </script>";
}else{
$usuario->setCi($_POST['ci']);
$usuario->setNombre($_POST['nombre']);
$usuario->setEmail($_POST['email']);
$usuario->setTelefono($_POST['telefono']);
$usuario->setContraseña($_POST['contraseña']);
$usuario->setDireccion($_POST['direccion']);
$usuario->setTipo("cliente");
$usuario->RegistrarUsuario();
$_SESSION['Usuarios'][]=$usuario;
header("Location: panelLogin.php");
}
}
