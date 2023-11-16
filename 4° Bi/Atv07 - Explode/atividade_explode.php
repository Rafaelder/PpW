<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $numeros = $_POST['numeros'];

    $numerosArray = explode(',', $numeros);

    $soma = 0;
    foreach ($numerosArray as $numero) {
        $soma += $numero;
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Somar</title>
</head>

<body>
    <form action="#" method="post">
        Entre com uma lista de numeros separados por virgula para serem somados
        <input type="text" name="numeros">
        <button value="Enviar">Enviar</button>
    </form>
    <?php  if(isset($soma)){ echo "<h2>Resultado: $soma</h2>";} ?>
</body>

</html>