<?php

//Chmando outros arquivos
require_once '../modelBean/Virus.php';
require_once '../modelDAO/Conexao.php';

//Criando objetos das Classes Medicamento.php e Paciente.php
$Virus = new Virus();
$Conexao = new Conexao();

//Pegando as informações do Input
$NomeCientifico = filter_input(INPUT_POST,'NomeCientifico');
$NomePopular = filter_input(INPUT_POST,'NomePopular');
$PeriodoIcubacao = filter_input(INPUT_POST,'PeriodoIcubacao');
$MedicamentoNecessario = filter_input(INPUT_POST,'MedicamentoNecessario');

//Setando as informações para a classe Virus.php
$Virus->setNomeCientifico($NomeCientifico);
$Virus->setNomePopular($NomePopular);
$Virus->setPeriodoIcubacao($PeriodoIcubacao);
$Virus->setMedicamentoNecessario($MedicamentoNecessario);

//Codigo SQL que futuramente será separado

      $query = $Conexao->conectar()->prepare("SELECT * FROM virus WHERE id_virus = :id_virus");
      //Execução da query
      $query->execute();    

      //Verificação se o número de tabelas foi diferente de 0 ou seja se algo foi encontrado
      if($query->rowCount() == 0){

        //Query reponsavel por preparar o codigo que insere as informações no banco
        $query = $Conexao->conectar()->prepare("INSERT INTO virus
        (NomeCientifico,NomePopular,PeriodoIcubacao,MedicamentoNecessario)
        VALUES (:NomeCientifico,:NomePopular,:PeriodoIcubacao,:MedicamentoNecessario)");

        $query-> bindValue(":NomeCientifico",$Virus->getNomeCientifico());
        $query-> bindValue(":NomePopular",$Virus->getNomePopular());
        $query-> bindValue(":PeriodoIcubacao",$Virus->getPeriodoIcubacao());        
        $query-> bindValue(":MedicamentoNecessario",$Virus->getMedicamentoNecessario());
             
        $query->execute();

        header("location: ../view/cadastra_virus.php");
        }else{
          $_SESSION["virus"] = "Vírus já cadastrado!";
          header("location: ../view/cadastra_virus.php");
      }