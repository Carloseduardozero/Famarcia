<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilo/estilo_consultar.css">
        <title>Pagina de Consulta</title>
    </head>
    <body>
        <div class="topo"><!--div para o css do cabeçalho do sistema-->
            <a href="../view/pagina_inicial.php">Voltar!</a>            
        </div>
        <div class="containerConsulta">
            <!--Formulário para fazer consulta de medicamento e vírus-->
            <form action="../modelBean/dados_consulta.php" method="POST">
                <input type="text" name="Pesquisa" placeholder="Digite  o nome de um Medicamento ou Vírus">
               <!--  <select name="SelectPesquisa">
                    <option value="ConsultMedicamento">Medicamento</option>
                    <option value="ConsultVirus">Vírus</option>
                </select>-->
                <input type="submit" value="Consultar"> 
            </form>            
        </div>
    </body>
</html>
