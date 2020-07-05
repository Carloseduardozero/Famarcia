-<?php
    session_start();//Iniciando a session
    if(!empty($_SESSION['medicamento'])){
        echo $_SESSION['medicamento'];
        $_SESSION = array();
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilo/estilo_cadastrar_med.css">
        <title>Cadastro Medicamento</title>
    </head>
    <body>
        <div class="topo"><!--div para o css do cabeçalho do sistema-->
            <a href="../view/pagina_inicial.php">Voltar!</a>            
        </div>
        <div class="containerMed">
            <!--Formulário para o usuario colocar as informações do remedio
            conforme a dose para cada tipo de paciente-->
            <form action="../modelBean/medicamento_paciente.php" method="POST">
                <input type="text" name="NomeVenda" placeholder="Nome de Venda">
                <input type="text" name="CompostoAtivo" placeholder="Composto Ativo">
                <input type="text" name="CombateVirus" placeholder="Combate o virus">
                <input type="text" name="DoseCrianca" placeholder="Dose para Criança">
                <input type="text" name="DoseAdulto" placeholder="Dose para Adulto">
                <input type="text" name="DoseIdoso" placeholder="Dose para Idoso">            
                <input type="submit" value="Cadastrar">
            </form>            
        </div>
    </body>
</html>
