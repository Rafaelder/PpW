<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php
    if (isset($_POST['id'], $_POST['nota1'], $_POST['nota2'], $_POST['nota3'], $_POST['media_exercicios'])) {
        $id = $_POST['id'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $media_exercicios = $_POST['media_exercicios'];

        $media_aproveitamento = ($nota1 + $nota2 * 2 + $nota3 * 3 + $media_exercicios) / 7;

        $conceito = '';
        if ($media_aproveitamento >= 9.0) {
            $conceito = 'A';
        } elseif ($media_aproveitamento >= 7.5) {
            $conceito = 'B';
        } elseif ($media_aproveitamento >= 6.0) {
            $conceito = 'C';
        } elseif ($media_aproveitamento >= 4.0) {
            $conceito = 'D';
        } else {
            $conceito = 'E';
        }

        echo "Número de Identificação: " . $id . "<br>";
        echo "Média de Aproveitamento: " . $media_aproveitamento . "<br>";
        echo "Conceito: " . $conceito . "<br>";
    }
    ?>
</body>
</html>
