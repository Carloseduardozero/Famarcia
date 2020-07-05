<?php
    session_start();//Iniciando a session
    if(!empty($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }
    
    if(!empty($_SESSION['senhaDiferente'])){
        echo $_SESSION['senhaDiferente'];
    }
    $_SESSION = array();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilo/estilo_cadastrar_usuario.css">
        <title>Cadastrar Usuario</title>
    </head>
    <body>
        <div class="containerUsuario">
            <!--Formulário para cadastrar o usuário do sistema-->
            <form action="../modelBean/dados_usuario.php" method="POST">
                <input type="text" name="NomeCompleto" placeholder="Nome Completo">
                <input type="text" name="Usuario" placeholder="Nome de Usuário">
                <input type="password" name="Senha" placeholder="Senha">
                <input type="password" name="ConfirmarSenha" placeholder="Confirmar Senha">
                <input type="submit" value="Cadastrar">
            </form>
            <a href="../index.php">Já é cadastrado?<strong>Acessar!</strong></a>            
        </div>
    </body>
</html>
