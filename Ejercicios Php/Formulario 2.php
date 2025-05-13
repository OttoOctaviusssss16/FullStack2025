<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Nombre</label> <input type="text" name="nombre">
        <input type="submit" name="enviar">
<?php
if(isset($_POST["enviar"])){
    echo "Nombre " . $_POST["nombre"];
}
?>
</body>
</html>