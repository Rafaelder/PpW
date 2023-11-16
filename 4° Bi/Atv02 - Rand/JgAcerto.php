<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Acerto</title>
    <link rel="stylesheet" href="jgAcerto.css">
    <script src="./jgAcerto.js"></script>
    <style>
        body {
            margin: 10% 30%;
        }

        h2 {
            color: rgba(0, 89, 255, 0.822);
            font-weight: lighter;
        }

        button {
            width: 65px;
            height: 25px;
        }

        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        input[type=number] {
            -moz-appearance: textfield;
            appearance: textfield;
        }
    </style>
</head>

<body>
    <?php
            if(isset($_POST['num'], $_POST['enviar'])){
                $numero = $_POST['num'];
                $sortes = "";
                $Resultado = "<h2 color='red'> VOCÊ EROU</h2>";
                for($i=0; $i < 5; $i++){
                    $sort = rand(1, 20);
                    $sortes .= $sort . " ";
                    if($numero == $sort){
                        $Resultado = "<h2 color='blue'> VOCÊ ACERTOU</h2>";
                    }
                }

            }
        ?>

    <form method="post">
        <h1>Jogo de Acerto</h1> <br>
        Digite um número entre 1 e 20
        <input type="number" class="num" name="num"> <br>
        <button class="botao" name=enviar>Verificar</button>
        <fieldset>
            <legend>Resultado</legend>
            <span>
                <?php if(isset($Resultado)){ echo $Resultado; } ?>
            </span>
            Número Digitado: <?php if(isset($numero)){ echo $numero; } ?> <br>
            Números Sorteados: <?php if(isset($sortes)){ echo $sortes; } ?>

        </fieldset>
    </form>
</body>
</html>