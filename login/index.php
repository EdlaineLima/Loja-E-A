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
        <div>
            <?php
                if(isset($_SESSION['nao_autenticado'])):
            ?> 
        
            <p>ERRO: Usuário ou senha Inválidos.</p>
        </div>
            <?php
                endif;
                unset($_SESSION['nao_autenticado']);
            ?>
        

        <h1>LOGIN</h1>
        
        <form action="login.php" method="POST">
            
          <input type="text" name="usuario" placeholder="Usuario">
          <input type="password" name="senha" placeholder="Senha">

          <button type="submit">Entrar</button>

        </form>

        <span>Não é Cadastrado?</span><a class="cad" href="cadastro.php">Cadastre-se</a>

    </div>
        
    
</body>
</html>