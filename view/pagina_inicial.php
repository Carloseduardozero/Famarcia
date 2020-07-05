<?php
    //Abertura do da sessão
    session_start();
        
    if(!empty($_SESSION['NomeCompleto'])){
        echo "Bem-Vindo ".$_SESSION['NomeCompleto'];
        $_SESSION = array();
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../estilo/estillo_pagina_inicial.css">
    <title>Pagina Inicial</title>
</head>
<body>
    <div class="topo"><!--div para o css do cabeçalho do sistema-->
        <a href="../index.php">Sair!</a>   
    </div>
    <div class="CadastraMed">
        <a href="../view/cadastra_medicamento.php"><strong>Cadastrar Medicamente</strong></a>        
    </div>
    <div class="CadastraVirus">
        <a href="../view/cadastra_virus.php"><strong>Cadastrar Vírus</strong></a>        
    </div>

    <div class="ConsultaMedVirus">
        <a href="../view/consultar.php"><strong>Consultar virus </strong></a>        
    </div>

    <div class="ConsultaMedVirus">
        <a href="../view/consultaM.php"><strong>Consultar Medicamento</strong></a>        
    </div>
</body>
</html>
