<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Marca</label><input type="text" name="marca">
        <br>
        <label>Modelo</label><input type="text" name="modelo">
        <br>
        <label>Color</label><input type="text" name="color">
        <br>
        <label>Numero de Puertas</label><input type="text" name="numPuerta">
        <br>
        <label>Cantidad de Ruedas</label><input type="text" name="totalRuedas">
        <br>
        <label>Foto</label><input type="file" name="foto">
        <br>
        <input type="submit" name="agregar">
    </form>
</body>
</html>

<?php
include_once "../Logica/vehiculo.php";
if(isset($_POST['agregar'])){
$vehiculo = new vehiculo();
$vehiculo->setMarca($_POST['marca']);
$vehiculo->setModelo($_POST['modelo']);
$vehiculo->setColor($_POST['color']);
$vehiculo->setPuertas($_POST['numPuerta']);
$vehiculo->setRuedas($_POST['totalRuedas']);
echo "<table border=1>
        <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Numero de Puertas</th>
        <th>Total de Ruedas</th>
        </tr>
        <tr>
        <td>".$vehiculo->getMarca()."</td>
        <td>".$vehiculo->getModelo()."</td>
        <td>".$vehiculo->getColor()."</td>
        <td>".$vehiculo->getPuertas()."</td>
        <td>".$vehiculo->getRuedas()."</td>
        </table>";
}
?>