<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Login</title>
    <link rel="stylesheet" href="../Estilos/EstiloLogin.css">
</head>
<body>
        <header>Hola</header>
        <form class="form_login_registro" action="" method="post">
        <label class="login_label">Email</label><input type="text" name="email" placeholder="Ingrese su Email" class="ingresotexto">
        <br>
        <label class="login_label">Contraseña</label><input type="password" name="contraseña" placeholder="Ingrese su contraseña" class="ingresotexto">
        <br>
        <input type="submit" name="login" value="Iniciar Sesión" class="botonestandar">
        <input type="submit" name="register" value="Registro" class="botonestandar">
    </form>
</body>
</html>
<?php
include_once "../Logica/cliente.php";
//Cliente 1
$usuario1= new cliente();
$usuario1->setNombre("Juan");
$usuario1->setTelefono("099123456");
$usuario1->setEdad(17);
$usuario1->setDireccion("Bolivia");
$usuario1->setEmail("boliviano@bolivia.com");
$usuario1->setContraseña("Nacional1974");
//Cliente 2
$usuario2= new cliente();
$usuario2->setNombre("Octavio");
$usuario2->setTelefono("099234567");
$usuario2->setEdad(18);
$usuario2->setDireccion("Peru");
$usuario2->setEmail("peru@peruano.com");
$usuario2->setContraseña("peruano");
$clientes=[$usuario1, $usuario2];
if(isset($_POST['login'])){
if ($usuario1->getEmail() == $_POST['email'] && $usuario1->getContraseña()== $_POST['contraseña'] ){
        if ($usuario1->getTipo() == "admin"){
        header("Location:panelAdmin.php");
    }else{
    header("Location:index.php");
}
}else{
    echo "
    <script>
    alert('Usuario o Contraseña Incorrectos');
    </script>";
}}
if(isset($_POST['register'])){
header("Location:panelRegistro.php");
}
?>