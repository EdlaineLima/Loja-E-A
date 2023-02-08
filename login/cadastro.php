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
    <title>Tela de Login</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <style>
        /* RODAPÉ */
        footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(73, 72, 72, 0.548);
            padding-top: 8px;
            margin-top: 4%;
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
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.html"><img src="img/logo.png" alt="logo"> HOME</a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquise aqui" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
    </header>

    <div id="container">
        <?php
        if (isset($_SESSION['status_cadastro'])):
            ?>
            <div>
                <p style="color: green;">Cadastro efetuado!
                    Faça login informando o seu usuário e senha <a href="login.php"><span>aqui</span></a></p>
            </div>
            <?php
        endif;
        unset($_SESSION['status_cadastro']);
        ?>

        <?php
        if (isset($_SESSION['usuario_existe'])):
            ?>
            <div>
                <p style="color: red;">O usuário escolhido já existe. Informe outro e tente novamente.</p>
            </div>
            <?php
        endif;
        unset($_SESSION['usuario_existe']);
        ?>

        <div class="form-login">

            <h1 class="titulo-cad">CADASTRO</h1>

            <form action="cadastrar.php" method="POST">
                <input type="text" name="nome" placeholder="Nome">
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="senha" placeholder="Senha">
                <button type="submit">Enviar</button>
            </form>
        </div>
        <footer>
            <!-- Link para a página inicial -->
            <a href="../index.html"><i title="página inicial" class="fa-solid fa-fw fa-house"></i></a>

            <!-- Mensagem de Copyright e privacidade -->
            <div>
                &copy; 2023 Criado por Edlaine e Ana
                <small><a href="../polices.html" target="_blank" title="Politicas de Privacidade">Políticas de Privacidade</a></small>
            </div>

            <!-- Link para o topo desta mesma página -->
            <a href="#top" title="Topo da Página"><i class="fa-solid fa-fw fa-circle-up"></i></a>
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>