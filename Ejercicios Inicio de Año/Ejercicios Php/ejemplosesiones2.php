<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="submit" name="salir" value="Salir">
    </form>
</body>
</html>

<?php
session_start();
$_SESSION['nombre'];
if(isset($_SESSION['nombre'])){
    echo "Nombre" . $_SESSION['nombre'];
}else {
    header("Location: ejemplosesiones.php");
}

if(isset($_POST['salir'])){
    session_destroy();
    echo "<script>
            location.reload();
          </script>";
}
?>
