<?php

$arquivo = "agenda.txt";

if (file_exists($arquivo)) {
    $dados = file($arquivo);
} else {
    $dados = array();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    $novoDado = implode(",", array($nome, $telefone, $email)) . "\n";

    if ((!in_array($novoDado, $dados))) {
        $dados[] = $novoDado;
        if (file_put_contents($arquivo, implode("", $dados), LOCK_EX) === false) {
            echo "Erro ao escrever no arquivo.";
            exit;
        }
    }

}

if (isset($_GET['delete'])) {
    $indexToDelete = $_GET['delete'];
    unset($dados[$indexToDelete]);
    file_put_contents($arquivo, implode("", $dados), LOCK_EX);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Agenda</title>
    <style>
        body {
            font-family: sans-serif;
        }

        h1 {
            text-align: center;
        }

        form {
            margin: 0 auto;
            width: 300px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #000;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        .delete-btn {
            background-color: #ff0000;
            color: #fff;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>Agenda</h1>

    <form action="agenda.php" method="post">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="telefone" placeholder="Telefone" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <button type="submit">Salvar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dados as $index => $linha): ?>
                <?php $linhas = explode(",", $linha); ?>
                <tr>
                    <td>
                        <?= $linhas[0] ?>
                    </td>
                    <td>
                        <?= $linhas[1] ?>
                    </td>
                    <td>
                        <?= $linhas[2] ?>
                    </td>
                    <td><button class="delete-btn" onclick="deleteRow(<?= $index ?>)">Apagar</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>


        <script>
            function deleteRow(index) {
                var row = document.getElementsByTagName("tr")[index + 1];
                row.parentNode.removeChild(row);

                fetch('agenda.php?delete=' + index)
                    .then(response => response.text())
                    .then(data => console.log(data))
                    .catch(error => console.error(error));
            }
        </script>

</body>

</html>