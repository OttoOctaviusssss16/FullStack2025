<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
/*$nombres=['Juan', "Pedro", 'María'];
echo $nombres[2];
$nombres[2]="Belén";

foreach ($nombres as $nombre){
    echo $nombre;
}

for($i=0; $i < count($nombres); $i++){
    echo $nombres[$i];
}*/

/*$estudiantes =[
    "Juan" =>16,
    "Pedro" =>17,
    "Diego" =>18
];

echo $estudiantes["Juan"];

foreach($estudiantes as $clave => $valor){
    echo "<br>";
    echo "Nombre ".$clave." Edad ".$valor;
}*/

$estudiantes=[
    ["Nombre" => "Juan",
     "Edad" =>16,
     "Calificacion" =>5],
    ["Nombre" => "Pedro",
     "Edad" =>15,
     "Calificacion" =>10],
    ["Nombre" => "María",
     "Edad" =>17,
     "Calificacion" =>9]    
];
echo   "<table border='1'>
        <tr> 
        <th>Nombre</th>
        <th>Edad</th>
        <th>Calificacion</th>
        </tr>";
foreach($estudiantes as $estudiante){
    echo "<tr>";
    echo "<td>".$estudiante["Nombre"]. "</td>".
         "<td>".$estudiante["Edad"]. "</td>".
         "<td>".$estudiante["Calificacion"];"</td>";
}
echo "</table>"
?>
</body>
</html>