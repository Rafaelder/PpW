<?php
session_start();
if (isset($_SESSION['usuario'])) {
    $user = $_SESSION['usuario'];
}

function Sair()
{
    session_destroy();
}

if (isset($_POST['bttn']) && $_POST['bttn'] == 'sair') {
    Sair();
    header('Location:index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>SisIFPI</title>
</head>
<style>
    body {
        font-family: sans-serif;
        background-color: whitesmoke;
    }

    header {
        background-color: #299da3;
        color: #fff;
    }

    h1 {
        font-size: 2em;
        padding-left: 1%;
        padding-top: 1%;
    }

    nav {

        background-color: #268f95;
    }

    button {
        font-size: 1em;
        border: none;
        background-color: #49c1c7;
        text-decoration: none;
        color: #fff;
        width: 7.5%;
        height: 36px;
        margin: 1%;
        margin-right: 0;
    }


    main {
        margin-top: 2%;
        margin-bottom: 2%;
        background-color: white;
        padding: 20px;
    }

    section {
        margin-bottom: 20px;
    }

    p {
        font-size: 1.5em;
    }

    span {
        font-weight: 900;
    }

    footer {
        background-color: #299da3;
        color: #fff;
        padding: 20px;
    }
</style>

<body>
    <header>
        <h1>SisIFPI</h1>
        <nav>
            <form method="post">
                <button href="#inicio.php">Início</button>
                <button name="bttn" value="sair">Sair</button>
            </form>
        </nav>
    </header>
    <main>
        <section>
            <p>Usuário <span>
                    <?php echo $user; ?>
                </span> Logado no Sistema</>
        </section>
    </main>
    <footer>
        <p>Copyright ©</p>
    </footer>
</body>

</html>