<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php
    if (isset($_POST['x1'], $_POST['y1'], $_POST['x2'], $_POST['y2'])) {
        $x1 = $_POST['x1'];
        $y1 = $_POST['y1'];
        $x2 = $_POST['x2'];
        $y2 = $_POST['y2'];

        $distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

        echo "A distância entre os pontos P($x1,$y1) e P($x2,$y2) é: " . $distancia;
    }
    ?>
</body>
</html>