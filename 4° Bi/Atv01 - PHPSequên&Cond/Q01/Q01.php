<!DOCTYPE html>
<html>
<head>
    <title>Ordem Crescente</title>
</head>
<body>
<?php

$valor1 = 15;
$valor2 = 8;
$valor3 = 20;

$valores = [$valor1, $valor2, $valor3];

sort($valores);

foreach ($valores as $valor) {
    if ($valor === max($valores)) {
        echo "<span style='color: red;'>$valor</span><br>";
    } else {
        echo "<span style='color: gray;'>$valor</span><br>";
    }
}
?>
</body>
</html>
