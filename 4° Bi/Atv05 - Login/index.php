<?php
session_start();
$user = "elder";
$pass = "123";
if (isset($_POST['bttn']) && $_POST['bttn'] == "b1") {
    $nome = $_POST['user'];
    $senha = $_POST['pass'];
    if ($user == "" || $pass == "") {
        echo "<script:alert('Por favor, preencha todos os campos!');</script>";
    } else {
        if ($user == $nome && $pass == $senha) {
            $_SESSION["usuario"] = $nome;
            $_SESSION['time'] = time();
            header("Location:inicio.php");
        } else {
            echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
        }
    }
}
// @session_start(); if(!isset($_SESSION['usuario'])){header("Location: index.php"); exit();}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        font-size: 135%;
    }

    .container {
        display: flex;
        height: 100vh;
        align-items: center;
        justify-content: center;
        background-color: #f0f8ff;

    }

    .login-box {
        width: 300px;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border: 1px solid black;
    }

    .header {
        color: white;
        background-color: rgb(28, 151, 151);
        padding: 15px;
    }

    h1 {
        margin: 0;
    }

    .login-form {
        padding: 15px;
    }

    .login-form input {
        width: 100%;
        padding: 10px;
        margin-top: 25px;
        margin-bottom: 25px;
        box-sizing: border-box;
        border: 1px solid #ccc;
    }

    .login-form button {
        width: 25%;
        height: 45px;
        font-size: 80%;
        border: 1px solid rgba(128, 128, 128, 0.39);
        border-radius: 0;
        background-color: rgba(128, 128, 128, 0.363);
    }

    .meio {
        margin-left: 25%;
    }
</style>

<body>
    <form name="login" method="post">
        <div class="container">
            <div class="login-box">
                <div class="header">
                    <h1>Login</h1>
                </div>
                <div class="login-form">
                    Usuário:
                    <br>
                    <input name="user" type="text">
                    <br>
                    Senha:
                    <br>
                    <input name="pass" type="password">
                    <br>
                    <span class="meio">
                        <button name="bttn" value="b1" type="submit">Entrar</button>
                        <button type="reset">Limpar</button>
                    </span>
                </div>
            </div>
        </div>
    </form>
</body>

</html>