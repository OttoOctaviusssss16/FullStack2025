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
                <li><a class="botonesbarra" href="Presentacion/contacto.php">Contacto</a></li>
            </ul>
    </header>
</body>
</html>
<?php
include_once "Logica/vehiculo.php";
//Vehiculo 1
$vehiculo1= new vehiculo();
$vehiculo1->setNombre("Volkswagen Saveiro");
$vehiculo1->setMarca("Volkswagen");
$vehiculo1->setModelo("Saveiro");
$vehiculo1->setColor("Blanco");
$vehiculo1->setFoto("VolkswagenSaveiro.jpg");
//Vehiculo 2
$vehiculo2= new vehiculo();
$vehiculo2->setNombre("Mercedes Atego");
$vehiculo2->setMarca("Mercedes");
$vehiculo2->setModelo("Atego");
$vehiculo2->setColor("Blanco");
$vehiculo2->setFoto("MercedesAtego2.jpg");
//Vehiculo 3
$vehiculo3= new vehiculo();
$vehiculo3->setNombre("Ferrari 458 Italia");
$vehiculo3->setMarca("Ferrari");
$vehiculo3->setModelo("458 Italia");
$vehiculo3->setColor("Rojo");
$vehiculo3->setFoto("Ferrari 458 Italia.jpg");

$vehiculos=[$vehiculo1, $vehiculo2, $vehiculo3];
echo "<div class='contenedor'>";
foreach ($vehiculos as $vehiculo){
    echo  "<div class='contenido'>  
            <img src='Fotos/". $vehiculo->getFoto()."'>
            <h1>- ". $vehiculo->getNombre(). "</h1>
            <h4>- Marca: ". $vehiculo->getMarca(). "</h4>
            <h4>- Modelo: ". $vehiculo->getModelo()."</h4>
            <h4>- Color: ". $vehiculo->getColor()."</h4>
            </div>";
}
echo "</div>";