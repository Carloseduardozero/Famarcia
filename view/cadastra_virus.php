<?php
    session_start();//Iniciando a session
    if(!empty($_SESSION['virus'])){
        echo $_SESSION['virus'];
        $_SESSION = array();
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilo/estilo_cadastrar_virus.css">        
        <title>Cadasta Virus</title>
    </head>
    <body>
        <div class="topo"><!--div para o css do cabeçalho do sistema-->
            <a href="../view/pagina_inicial.php">Voltar!</a>            
        </div>
        <div class="containerVirus">
            <!--Formulário para cadastrar virus-->
            <form action="../modelBean/dados_virus.php" method="POST">
                <input type="text" name="NomeCientifico" placeholder="Nome Cientifico">
                <input type="text" name="NomePopular" placeholder="Nome Popular">
                <input type="text" name="PeriodoIcubacao" placeholder="Periodo de Icubação">
                <input type="text" name="MedicamentoNecessario" placeholder="Medicamento Necessário">
                <input type="submit" value="Cadastrar">
            </form>            
        </div>
    </body>
</html>
