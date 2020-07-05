<?php
    session_start();//Iniciando a session
    if(!empty($_SESSION['usuSucesso'])){
        echo $_SESSION['usuSucesso'];
        $_SESSION = array();
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo/estilo_index.css">
        <title>Tela de Acesso</title>
    </head>
    <body>
        <div class="conteinerAcesso">
            <form action="./modelBean/dados_acesso.php" method="POST">
                <input type="text" name="Usuario" placeholder="Nome de Usuário">
                <input type="password" name="Senha" placeholder="Senha">
                <input type="submit" value="Acessar">
            </form>
            <a href="./view/cadastrar_usuario.php">Já é cadastrado?<strong>Cadastre-se!</strong></a>
        </div>
    </body>
</html>
