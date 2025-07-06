<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal - Concesionario</title>
    <link rel="stylesheet" href="Estilos/EstiloIndex.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php"><b>Concesionaria Scabino Cabral</b></li>
                <li><a class="botonesbarra" href="Presentacion/panelLogin.php">Login</a></li>
                <li><a class="botonesbarra" href="Presentacion/panelContacto.php">Contacto</a></li>
            </ul>
    </header>
</body>
</html>
<?php
include_once "Logica/vehiculo.php";
session_start();
//Vehiculo 1
if (!isset($_SESSION['vehiculo'])){
$vehiculos1= new vehiculo();
$vehiculos1->setNombre("Volkswagen Saveiro");
$vehiculos1->setMarca("Volkswagen");
$vehiculos1->setModelo("Saveiro");
$vehiculos1->setColor("Blanco");
$vehiculos1->setAño("2018");
$vehiculos1->setFoto("VolkswagenSaveiro.jpg");
$_SESSION['vehiculo'][]=$vehiculos1;
//Vehiculo 2
$vehiculos2= new vehiculo();
$vehiculos2->setNombre("Mercedes Atego");
$vehiculos2->setMarca("Mercedes");
$vehiculos2->setModelo("Atego");
$vehiculos2->setColor("Blanco");
$vehiculos2->setAño("2024");
$vehiculos2->setFoto("MercedesAtego2.jpg");
$_SESSION['vehiculo'][]=$vehiculos2;
//Vehiculo 3
$vehiculos3= new vehiculo();
$vehiculos3->setNombre("Ferrari 458 Italia");
$vehiculos3->setMarca("Ferrari");
$vehiculos3->setModelo("458 Italia");
$vehiculos3->setColor("Rojo");
$vehiculos3->setAño("2013");
$vehiculos3->setFoto("Ferrari 458 Italia.jpg");
$_SESSION['vehiculo'][]=$vehiculos3;
}
if(isset($_SESSION['vehiculo']) && !empty($_SESSION['vehiculo'])){
   echo "<div class='contenedor'>";
   foreach ($_SESSION['vehiculo'] as $vehiculo) {
       echo "<div class='contenido'>  
               <img src='Fotos/". $vehiculo->getFoto()."'>
               <h1>- ". $vehiculo->getNombre(). "</h1>
               <h4>- Marca: ". $vehiculo->getMarca(). "</h4>
               <h4>- Modelo: ". $vehiculo->getModelo()."</h4>
               <h4>- Color: ". $vehiculo->getColor()."</h4>
               <h4>- Año: ". $vehiculo->getAño()."</h4>
               </div>";
   }
   echo "</div>";
}
?>