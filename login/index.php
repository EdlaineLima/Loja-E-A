<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Tela de Login</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.html"><img src="img/logo.png" alt="logo"></a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquise aqui" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
    </header>

    <div class="container">
        <div>
            <?php
            if (isset($_SESSION['nao_autenticado'])):
                ?>

                <p>ERRO: Usuário ou senha Inválidos.</p>

                <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>
        </div>

        <div class="form-login">

            <h1 class="titulo-login">LOGIN</h1>

            <form action="login.php" method="POST">

                <input type="text" name="usuario" placeholder="Usuario">

                <input type="password" name="senha" placeholder="Senha">

                <button type="submit">Entrar</button>
            </form>

            <span>Não é Cadastrado?</span><a class="cadastro" href="cadastro.php">Cadastre-se</a>
        </div>



    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>