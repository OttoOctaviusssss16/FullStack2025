<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <label>Numero </label><input type="number" name="numero">
    <input type="submit" name="enviar">

<?php
if(isset($_POST["enviar"])){
    if(is_numeric($_POST["numero"])){
        echo "Tu número es " . $_POST["numero"];
    }
}
?>
</body>
</html>