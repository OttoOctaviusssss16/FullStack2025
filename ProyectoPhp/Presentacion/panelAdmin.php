<?php
include_once "../Logica/vehiculo.php";
include_once "../Logica/cliente.php";
include_once "agregarImagen.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion - Concesionario</title>
    <link rel="stylesheet" href="../Estilos/EstiloAdmin.css">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label class="login_label">Marca</label><input type="text" name="marca" required>
        <br>
        <label class="login_label">Modelo</label><input type="text" name="modelo" required>
        <br>
        <label class="input.text">Color</label><input type="text" name="color" required>
        <br>
        <label class="input.text">Año</label><input type="text" name="año" required>
        <br> 
        <label class="login_label">Foto</label><input type="file" name="foto" required>
        <br>
        <input type="submit" name="agregar">
    </form>
        <form method="post" action="">
        <button type="submit" name="limpiar_sesion">Limpiar sesión</button>
        </form>
</body>
</html>

<?php
session_start();
if(isset($_POST['limpiar_sesion'])){
    session_destroy();
}
if(isset($_POST['agregar'])){
$vehiculo = new vehiculo();
$vehiculo->setMarca($_POST['marca']);
$vehiculo->setModelo($_POST['modelo']);
$vehiculo->setColor($_POST['color']);
$vehiculo->setAño($_POST['año']);
$nombreCompleto = $_POST['marca'] . " " . $_POST['modelo'];
$vehiculo->setNombre($nombreCompleto);

$foto=CargarImagen();
if($foto != null){
    $vehiculo->setFoto($foto);
}
$_SESSION['vehiculo'][]=$vehiculo;

echo "<table border=1>
        <tr>
        <th>Foto</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Año</th>
        </tr>
        <tr>
        <td><img src='../Fotos/".$vehiculo->getFoto()."' width='100' height='80'>
        <td>".$vehiculo->getMarca()."</td>
        <td>".$vehiculo->getModelo()."</td>
        <td>".$vehiculo->getColor()."</td>
        <td>".$vehiculo->getAño()."</td>
        </table>";
}
if(isset($_SESSION['Usuarios'])){
echo "<table>
      <tr>
      <th>Nombre</th>
      <th>Telefono</th>
      <th>Edad</th>
      <th>Direccion</th>
      <th>Email</th>
      <th>Tipo</th>
      </tr>";
      foreach($_SESSION['Usuarios'] as $usuario){  
     echo  "<tr>
      <td>".$usuario->getNombre()."</td>
      <td>".$usuario->getTelefono()."</td>
      <td>".$usuario->getEdad()."</td>
      <td>".$usuario->getDireccion()."</td>
      <td>".$usuario->getEmail()."</td>
      <td>".$usuario->getTipo()."</td>
      </tr>
     
    ";
      }
     echo  " </table>";
}
?>