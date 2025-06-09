<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label>Numero</label><input type="number" name="numero">
    <input type="submit" name="enviar">
</form>
<?php
$contador=0;
$numero=$_POST['numero'];
if(isset($_POST['enviar'])) {
    while($contador<=$numero){
        echo $contador;
        echo "<br>";
        $contador++;

    if($contador==5){
    continue;
}
}
}
?>
</body>
</html>