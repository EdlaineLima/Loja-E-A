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
    <title>Tela de Login</title>
</head>
<body>
    
    <div class="ok">
            <?php
                if(isset($_SESSION['status_cadastro'])):
            ?> 
            <div>
            <p>Cadastro efetuado!
            Faça login informando o seu usuário e senha <a href="login.php"><span>aqui</span></a></p>
        </div>
            <?php
                endif;
                unset($_SESSION['status_cadastro']);
            ?>
            
           <?php
                if(isset($_SESSION['usuario_existe'])):
            ?>
            <div>
                <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
            </div>
            <?php
                endif;
                unset($_SESSION['usuario_existe']);
            ?>
            <h1>CADASTRO</h1>

        <form action="cadastrar.php" method="POST">
            
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="senha" placeholder="Senha">
            
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>