<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Concesionario</title>
    <link rel="stylesheet" href="../Estilos/EstiloLogin.css">
</head>
<body>
        <header><h1>Concesionaria Scabino Cabral</h1></header>
         <h1 class="h1registro">Iniciar Sesion </h1>
        <form class="form_login" action="" method="post">
        <label class="login_label"><b>Email</b></label><input type="text" name="email" placeholder="Ingrese su Email" class="ingresotexto">
        <br>
        <label class="login_label"><b>Contraseña</b></label><input type="password" name="contraseña" placeholder="Ingrese su contraseña" class="ingresotexto">
        <br>
        <input type="submit" name="login" value="Iniciar Sesión" class="botonestandar">
        <br>
        <input type="submit" name="register" value="Registro" class="botonestandar">
        <br>
    </form>
</body>
</html>
<?php
include_once "../Logica/cliente.php";
session_start();
$encontrado=false;
if(isset($_POST['login'])){
foreach ($_SESSION['Usuarios'] as $usuario) {
    if ($usuario->getEmail()==$_POST['email'] && $usuario->getContraseña()==$_POST['contraseña']){
        $encontrado=true;
        if($usuario->getTipo()=="admin"){
            header("Location:panelAdmin.php");
        }else{
            header("Location:../index.php");
        }
        }
    }
    if(!$encontrado){
            echo "<script>
            alert('Usuario o Contraseña Incorrecto');
            </script>"; 
        }
    }
if(isset($_POST['register'])){
header("Location:panelRegistro.php");
}
?>