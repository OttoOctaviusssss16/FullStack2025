<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label>Monto a Ahorrar</label><input type="number" name="earnings" required>
    <br>
    <label>Meses</label><input type="number" name="meses" required>
    <br>
    <label>Ahorro Inicial (Opcional)</label><input type="number" name="initearnings">
    <br>
    <input type="submit" name="enviar">
</form>
<?php
    $ahorros = $_POST["earnings"];
    $meses = $_POST["meses"];
    $ahorrosinciales =$_POST["initearnings"] !== "" ? intval($_POST["initearnings"]) : 0;
    $ahorropormes = 0;
    $contadormeses = 1;

    if (isset($_POST["enviar"])) {
        if (isset($ahorros) && isset($meses) && isset($ahorrosinciales)) {
            if (is_numeric($ahorros) && is_numeric($meses) && is_numeric($ahorrosinciales)) {
                if ($ahorros > 0 && $meses > 0 && $ahorrosinciales >= 0) {
                    $ahorropormes = ($ahorros - $ahorrosinciales) / $meses;
                    echo "Tu ahorro por mes es: $ahorropormes<br>";
                    while ($contadormeses <= $meses) {
                        $totalahorrado = $ahorrosinciales + $ahorropormes * $contadormeses;
                        echo "Mes " . $contadormeses . ": $totalahorrado<br>";
                        $contadormeses++;
                    }
                } else {
                    echo "Error, ingresá un monto y un número de meses válidos";
                }
            } else {
                echo "Error, Los ingresos deben ser números";
            }
        } else {
            echo "Ingrese los datos requeridos";
        }
    }
?>
</body>
</html>
