<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body{
            margin: 15% 35% 15%;
            
        }
        fieldset{
            text-align: center;
            padding:2%;
        }
        input{
            margin-bottom: 2%;
        }
    </style>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calc'], $_POST['n1'], $_POST['n2'], $_POST['operacao'])) {
            $num1 = $_POST['n1'];
            $num2 = $_POST['n2'];
            $opcao = $_POST['operacao'];

            switch ($opcao) {
                case 'somar':
                    $resultado = $num1 + $num2;
                    break;
                case 'subtrair':
                    $resultado = $num1 - $num2;
                    break;
                case 'multiplicar':
                    $resultado = $num1 * $num2;
                    break;
                case 'dividir':
                    if ($num2 != 0) {
                        $resultado = $num1 / $num2;
                    } else {
                        $resultado = 'Erro: divisão por zero';
                    }
                    break;
                default:
                    $resultado = 'Operação inválida';
                    break;
            }
        }
    ?>

    <form method="post" action="#" >
    <fieldset>
        <legend align="center">Calculadora</legend>
        1° Número: <input type="number" name="n1"> <br>
        2° Número: <input type="number" name="n2"> <br>
        <select name="operacao">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <button name="calc">Calcular</button>
    </fieldset>
    </form>
    <br>
    <fieldset>
        <legend align="center">Resultado</legend>
        <p>
            <?php
                echo isset($resultado) ? $resultado : '';
            ?>
        </p>
    </fieldset>
</body>
</html>