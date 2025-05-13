<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="csscalculadora.css">
</head>
<body>
    <div id="divcalculadora">
    <form action="" method="POST">
        <label>Ingrese un número </label>
        <br>
        <input type="number" name="numero1" required>
        <br>
        <label>Ingrese el segundo número </label>
        <br>
        <input type="number" name="numero2" required>
        <br>
        <br>
        <input class="boton" type="submit" name="suma" value="+">
        <input class="boton" type="submit" name="resta" value="-">
        <input class="boton" type="submit" name="division" value="/">
        <input class="boton" type="submit" name="multiplicacion" value="*">
        <input class="boton" type="submit" name="modulo" value="%">
        <br>
        <br>
        <label>Resultado</label>
        <br>
        <input id="resultado" type="text" name="resultado" readonly>
        <br>
        <br>
        <input id="error" type="text" name="error" readonly>
    </div>
<?php
if(isset($_POST["suma"]) && isset($_POST["numero1"]) && isset($_POST["numero2"]) && is_numeric($_POST["numero1"]) && is_numeric($_POST["numero2"]) !=null){
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $resultado = ($numero1 + $numero2);
        echo '<script>document.getElementById("resultado").value = "' . $resultado . '";</script>';
}
if(isset($_POST["resta"]) && isset($_POST["numero1"]) && isset($_POST["numero2"]) && is_numeric($_POST["numero1"]) && is_numeric($_POST["numero2"])){
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $resultado = ($numero1 - $numero2);
        echo '<script>document.getElementById("resultado").value = "' . $resultado . '";</script>';

}
if(isset($_POST["division"]) && isset($_POST["numero1"]) && isset($_POST["numero2"]) && is_numeric($_POST["numero1"]) && is_numeric($_POST["numero2"])){
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    if($numero2!=0){
        echo $resultado = ($numero1 / $numero2);
        echo '<script>document.getElementById("resultado").value = "' . $resultado . '";</script>';

    }else{
        echo '<script>document.getElementById("error").value ="No puedes dividir entre 0";</script>';
    }

}
if(isset($_POST["multiplicacion"]) && isset($_POST["numero1"]) && isset($_POST["numero2"]) && is_numeric($_POST["numero1"]) && is_numeric($_POST["numero2"])){
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $resultado = ($numero1 * $numero2);
        echo '<script>document.getElementById("resultado").value = "' . $resultado . '";</script>';
}
if(isset($_POST["modulo"]) && isset($_POST["numero1"]) && isset($_POST["numero2"]) && is_numeric($_POST["numero1"]) && is_numeric($_POST["numero2"])){
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    if($numero2!=0){
    $resultado = ($numero1 % $numero2);
    echo '<script>document.getElementById("resultado").value = "' . $resultado . '";</script>';
    }else{
        echo '<script>document.getElementById("error").value ="No puedes dividir entre 0";</script>';
    }
}
?>
</body>
</html>