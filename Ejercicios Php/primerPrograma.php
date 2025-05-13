<!DOCTYPE HTML>
<html lang="es">
<head>
</head>
<body>
    <form action="" method="post">
    <label>Nombre</label> <input type="text" name="nombre">
    <input type="submit" name="enviar">
    </form>
    <?php
    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        echo "Hola $nombre";
    }
    
    ?>
    
</body>
</html>

