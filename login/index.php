<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">

    <title>Tela de Login</title>

    <style>
        /* RODAPÉ */
        footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(73, 72, 72, 0.548);
            padding-top: 8px;
            margin-top: 7%;
        }

        footer>a {
            padding: 0.25rem;
            text-decoration: none;
        }

        footer>a:hover {
            background-color: rgb(53, 4, 46);
        }

        footer i {
            font-size: 1.5rem;
            color: #ce07cb86;
            margin: 8px;
        }

        footer>div {
            font-size: 18px;
            font-weight: 700;
        }

        footer>div>small>a {
            padding: 10px;
            text-decoration: none;
            display: block;
            text-align: center;
            color: blueviolet;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.html">
                    <img src="img/logo.png" alt="logo"> Home</a>

            </div>
        </nav>
    </header>

    <div class="container">
        <div>
            <?php
            if (isset($_SESSION['nao_autenticado'])) :
            ?>

                <p>ERRO: Usuário ou senha Inválidos.</p>

            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>
        </div>

        <div class="form-login">

            <h1>LOGIN</h1>

            <form action="login.php" method="POST">

                <input type="text" name="usuario" placeholder="Usuario">

                <input type="password" name="senha" placeholder="Senha">

                <button type="submit">Entrar</button>
            </form>

            <span>Não é Cadastrado?</span><a class="cadastro" href="cadastro.php">Cadastre-se</a>
        </div>
    </div>
    <footer>
        <!-- Link para a página inicial -->
        <a href="index.html"><i title="página inicial" class="fa-solid fa-fw fa-house"></i></a>

        <!-- Mensagem de Copyright e privacidade -->
        <div>
            &copy; 2023 Criado por Edlaine e Ana
            <small><a href="polices.html" target="_blank" title="Politicas de Privacidade">Políticas de Privacidade</a></small>
        </div>

        <!-- Link para o topo desta mesma página -->
        <a href="#top" title="Topo da Página"><i class="fa-solid fa-fw fa-circle-up"></i></a>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>