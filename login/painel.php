<?php

include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Efetuar Pagamento</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/pagamento.css">
</head>

<body>

    <div class="container-fluid">

        <a class="navbar-brand" href="./index.php"><img src="img/logo.png" alt="logo"> Home</a>

        <h2>Olá, Faça sua compra aqui <?php echo $_SESSION['nome']; ?></h2>

        <a href="logout.php">Sair
            <i class="fa-solid fa-right-from-bracket fa-1.5x icon"></i> </a>

        <img class="img-checkout" src="img/checkout.png" alt="Página de pagamento">

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

</body>