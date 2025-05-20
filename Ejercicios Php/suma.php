<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="number" name="numero1">
    <input type="number" name="numero2">
    <input type="submit" name="enviar">
    </form>
    <?php
    include_once "funcionsuma.php";
    if(isset($_POST["enviar"])){
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    echo suma($numero1, $numero2);
    }
    ?>

</body>
</html>