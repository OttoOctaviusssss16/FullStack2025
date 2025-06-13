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
        <label class="login_label">Email</label><input type="text" name="email" placeholder="Ingrese su Email" class="ingresotexto">
        <br>
        <label class="login_label">Contraseña</label><input type="password" name="contraseña" placeholder="Ingrese su contraseña" class="ingresotexto">
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
$usuario2->setTipo("admin");
$clientes=[$usuario1, $usuario2];
$encontrado=false;
if(isset($_POST['login'])){
foreach ($clientes as $cliente) {
    if ($cliente->getEmail()==$_POST['email'] && $cliente->getContraseña()==$_POST['contraseña']){
        $encontrado=true;
        if($cliente->getTipo()=="admin"){
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