<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label>Ingrese el numero del día de la semana</label><input type="number" name="fecha">
    <input type="submit" name="enviar">
    </form>
<?php
if (isset($_POST["enviar"])){
    $numero=($_POST["fecha"]);
    switch($numero) {
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Lunes";
            break;
        case 3:
            echo "Martes";
            break;
        case 4:
            echo "Miercoles";
            break;
        case 5:
            echo "Jueves";
            break;
        case 6:
            echo "Viernes";
            break;
        case 7:
            echo "Sabado";
            break;
    }


    
}
?>
</body>
</html>