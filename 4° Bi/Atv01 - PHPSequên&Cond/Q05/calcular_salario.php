<!DOCTYPE html>
<html>
<head>
    <title>Novo Salário</title>
</head>
<body>
    <h1>Novo Salário</h1>

    <?php
    if (isset($_POST['salario'], $_POST['cargo'])) {
        $salario = $_POST['salario'];
        $cargo = $_POST['cargo'];

        if ($cargo === 'gerente') {
            $aumento = 0.10;
        } elseif ($cargo === 'engenheiro') {
            $aumento = 0.20; 
        } elseif ($cargo === 'tecnico') {
            $aumento = 0.30; 
        } else {
            $aumento = 0.40; 
        }

        $novo_salario = $salario * (1 + $aumento);

        $diferenca = $novo_salario - $salario;
        
        echo "Salário anterior: R$ " . $salario . "<br>";
        echo "Novo salário: R$ " . $novo_salario . "<br>";
        echo "Diferença: R$ " . $diferenca . "<br>";
    }
    ?>
</body>
</html>
