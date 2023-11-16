<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Idade</title>
</head>
<body>
    <h1>Resultado da Idade</h1>

    <?php
    if (isset($_POST['data_nascimento'])) {
        $data_nascimento = $_POST['data_nascimento'];

        list($dia, $mes, $ano) = explode('/', $data_nascimento);
        $data_atual = new DateTime();      
        $data_nascimento = new DateTime("$ano-$mes-$dia");
        $diferenca = $data_nascimento->diff($data_atual);

        echo "Você tem " . $diferenca->y . " anos, " . $diferenca->m . " meses e " . $diferenca->d . " dias.";
    }
    ?>
</body>
</html>