<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label>Ingrese un área para recibir recomendaciones</label><input type="text" name="area">
    <input type="submit" name="enviar">
    </form>


<?php
if(isset($_POST["enviar"])){
    $area=($_POST["area"]);
    recomendaciones($area);
}
function recomendaciones($area1){
    switch($area1){
        case "Tecnologia":
            echo "Recomendaciones para tecnología: MaxPC";
            break;
        case "Deportes":
            echo "Recomendaciones para deportes: ESPN";
            break;
        case "Educacion":
            echo "Recomendaciones para deportes: Udemy";
            break;
        default:
            echo "Use una de estas opciones: Tecnologia, Deportes, Educacion";
            break;
    }
}
?>
</body>
</html>