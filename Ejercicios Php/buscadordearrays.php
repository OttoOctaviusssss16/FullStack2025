<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label>Ingrese un nombre a buscar</label><input type="text" name="nombre" placeholder="Ingrese un nombre">
    <input type="submit" name="buscar" value="Buscar">
    <input type="submit" name="listaactivos" value="ListaActivos">
    <input type="submit" name="promedio" value="Promedio de Calificacion">
    </form>
</body>
</html>
<?php
if (isset($_POST['buscar'])){
    $nombre=$_POST['nombre'];
    $encontro=false;
$estudiantes=[
    ["Nombre" => "Juan",
     "Edad" =>16,
     "Calificacion" =>5,
     "Estado"=>"Activo"],
    ["Nombre" => "Pedro",
     "Edad" =>15,
     "Calificacion" =>10,
     "Estado"=>"Activo"],
    ["Nombre" => "María",
     "Edad" =>17,
     "Calificacion" =>9,
     "Estado"=>"Activo"]    
];
echo "<table border=1>
      <tr>
      <th>Nombre</th>
      <th>Edad</th>
      <th>Calificación</th>
      </tr>";
    foreach($estudiantes as $UnEstudiante){
        if($UnEstudiante['Nombre'] == $nombre && $UnEstudiante['Estado'] == "Activo"){
            $encontro=true;
        echo"<tr>
            <td>".$UnEstudiante['Nombre']."</td>
            <td>".$UnEstudiante['Edad']."</td>
            <td>".$UnEstudiante['Calificacion']."</td>
            </tr>";
    
    }
    }
    echo "</table>";
    if(!$encontro){
        echo "No se encontro el estudiante con el nombre $nombre";
    }
}
if (isset($_POST['listaactivos'])){
    $nombre=$_POST['nombre'];
    
$estudiantes=[
    ["Nombre" => "Juan",
     "Edad" =>16,
     "Calificacion" =>5,
     "Estado"=>"Activo"],
    ["Nombre" => "Pedro",
     "Edad" =>15,
     "Calificacion" =>10,
     "Estado"=>"Activo"],
    ["Nombre" => "María",
     "Edad" =>17,
     "Calificacion" =>9,
     "Estado"=>"Activo"]    
];
echo "<table border=1>
      <tr>
      <th>Nombre</th>
      <th>Edad</th>
      <th>Calificación</th>
      </tr>";
    foreach($estudiantes as $UnEstudiante){
        if($UnEstudiante['Estado'] == "Activo"){
        echo"<tr>
            <td>".$UnEstudiante['Nombre']."</td>
            <td>".$UnEstudiante['Edad']."</td>
            <td>".$UnEstudiante['Calificacion']."</td>
            </tr>";
        }
}
}

if (isset($_POST['promedio'])){
    $nombre=$_POST['nombre'];
    
$estudiantes=[
    ["Nombre" => "Juan",
     "Edad" =>16,
     "Calificacion" =>5,
     "Estado"=>"Activo"],
    ["Nombre" => "Pedro",
     "Edad" =>15,
     "Calificacion" =>10,
     "Estado"=>"Activo"],
    ["Nombre" => "María",
     "Edad" =>17,
     "Calificacion" =>9,
     "Estado"=>"Activo"]    
];
echo "<table border=1>
      <tr>
      <th>Nombre</th>
      <th>Edad</th>
      <th>Calificación</th>
      </tr>";
    foreach($estudiantes as $UnEstudiante){
        if($UnEstudiante['Estado'] == "Activo"){
        echo"<tr>
            <td>".$UnEstudiante['Nombre']."</td>
            <td>".$UnEstudiante['Calificacion']."</td>
            |
            </tr>";
        }
}
}
?>