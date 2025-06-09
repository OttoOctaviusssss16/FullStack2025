<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label>Ingrese numero</label><input type="number" name="numero" required>
    <br>
    <input type="submit" name="enviar">
    </form>
<?php
if (isset($_POST['enviar'])) {
    $numero = $_POST['numero'];
    switch($numero) {
        case 1:
            echo "El numero ingresado es 1";
            break;
        case 2:
            echo "El numero ingresado es 2";
            break;
        case 3:
            echo "El numero ingresado es 3";
            break;
        default:
        echo "Ingrese 1, 2 o 3";
        break;
    }
}
?>
</body>
</html>