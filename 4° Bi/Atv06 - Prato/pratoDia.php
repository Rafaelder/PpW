<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prato do Dia</title>
    <style>
        .container {
            display: flex;      
            margin-top: 5%;
            justify-content: center; 
        }
        td,
        th {
            border: 2px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: rgb(98 4 255 / 38%);
            width: 26%;
        }
        caption.cima {
            padding: 10px;
            caption-side: top;
            text-align: center;
        }
        caption.baixo {
            padding: 10px;
            caption-side: bottom;
            text-align: left;
        }

        table {
            width: 60%;
            border-collapse: collapse;
            border: 2px solid black;
            letter-spacing: 1px;
            font-family: sans-serif;
            font-size: 120%;
        }
        .dia-atual {
            background-color:#c90606cc;
            color:white;
        }
    </style>
</head>
<body>
    <?php
        //setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        //date_default_timezone_set('America/Sao_Paulo');    
        //echo strftime('%A, %d de %B de %Y', strtotime('today'));
        $data = date('D');
        $semana = array(
            'Sun' => 'Domingo', 
            'Mon' => 'Segunda-Feira',
            'Tue' => 'Terca-Feira',
            'Wed' => 'Quarta-Feira',
            'Thu' => 'Quinta-Feira',
            'Fri' => 'Sexta-Feira',
            'Sat' => 'Sábado'
        );
        $pratoDoDia = array(
            'Sun' => 'Lasanha a quatro queijos', 
            'Mon' => 'Frango ao molho madeira',
            'Tue' => 'Arroz à grega',
            'Wed' => 'Feijoada à moda da casa',
            'Thu' => 'Nhoque paulista',
            'Fri' => 'Bacalhau ao forno',
            'Sat' => 'Feijão branco'
        );
        $precoDoDia = array(
            'Sun' => 'R$ 12,60', 
            'Mon' => 'R$ 10,00',
            'Tue' => 'R$ 09,40',
            'Wed' => 'R$ 11,20',
            'Thu' => 'R$ 08,50',
            'Fri' => 'R$ 15,20',
            'Sat' => 'R$ 10,00'
        );
    ?>

    <div class="container">
        
        <table id="tabela-prato-do-dia">
            <caption class="cima"><h1>Prato do Dia</h1></caption>
            <caption class="baixo">
                    Hoje é <strong> <?PHP echo $semana["$data"]; ?> </strong><br>
                    Nossa sugestão para hoje é : <strong> <?php echo $pratoDoDia[$data]; ?></strong> <br>
                    Preço : <strong> <?php echo $precoDoDia[$data]; ?> </strong><br>
            </caption>
            <tr>
                <th>Elemento</td>
                <th>Dia da semana</td>
                <th>Prato do dia</td>
                <th>Preço</td>
            </tr>
            <tr>
                <td>0</td>
                <td>Domingo</td>
                <td> Lasanha a quatro queijos</td>
                <td>R$ 12,60</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Segunda-feira</td>
                <td> Frango ao molho madeira</td>
                <td>R$ 10,00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Terça-feira</td>
                <td>Arroz à grega</td>
                <td>R$ 09,40</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Quarta-feira</td>
                <td>Feijoada à moda da casa</td>
                <td>R$ 11,20</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Quinta-feira</td>
                <td>Nhoque paulista</td>
                <td>R$ 08,50</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Sexta-feira</td>
                <td>Bacalhau ao forno</td>
                <td>R$ 15,20</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Sábado</td>
                <td>Feijão branco</td>
                <td>R$ 10,00</td>
            </tr>
        </table>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var dataAtual = new Date().getDay();
        console.log(dataAtual);
        var linhas = document.getElementById('tabela-prato-do-dia').getElementsByTagName('tr');
        console.log(linhas);
        for (var i = 0; i <= 7; i++) {
            if (i === dataAtual + 1) {
                linhas[i].classList.add('dia-atual');
                break;
            }
        }
    });
</script>
</body>
</html>