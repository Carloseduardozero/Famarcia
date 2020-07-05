<?php
//Abertura do da sessão
session_start();

//Chmando outros arquivos
require_once '../modelBean/Medicamento.php';
require_once '../modelBean/Paciente.php';
require_once '../modelDAO/Conexao.php';

//Criando objetos das Classes Medicamento.php e Paciente.php
$Paciente = new Paciente();
$Medicamento = new Medicamento();
$Conexao = new Conexao();

//Pegando informação dos imput
$NomeVenda = filter_input(INPUT_POST,'NomeVenda');
$CompostoAtivo = filter_input(INPUT_POST,'CompostoAtivo');
$CombateVirus = filter_input(INPUT_POST,'CombateVirus');
$DoseCrianca = filter_input(INPUT_POST,'DoseCrianca');
$DoseAdulto = filter_input(INPUT_POST,'DoseAdulto');
$DoseIdoso = filter_input(INPUT_POST,'DoseIdoso');

//Setando as informações para a Classe Medicamento.php
$Medicamento->setNomeVenda($NomeVenda);
$Medicamento->setCompostoAtivo($CompostoAtivo);
$Medicamento->setCombateVirus($CombateVirus);
//Setando as informações para a Classe Medicamento.php
$Paciente->setDoseCrianca($CompostoAtivo);
$Paciente->setDoseAdulto($DoseAdulto);
$Paciente->setDoseIdoso($DoseIdoso);

//Codigo SQL que futuramente será separado

      $query = $Conexao->conectar()->prepare("SELECT * FROM medicamento WHERE id_medicamento = :id_medicamento");
      //Execução da query
      $query->execute();    

      //Verificação se o número de tabelas foi diferente de 0 ou seja se algo foi encontrado
      if($query->rowCount() == 0){

        //Query reponsavel por preparar o codigo que insere as informações no banco
        $query = $Conexao->conectar()->prepare("INSERT INTO medicamento
        (NomeVenda,CompostoAtivo,CombateVirus,DoseCrianca,DoseAdulto,DoseIdoso)
        VALUES (:NomeVenda,:CompostoAtivo,:CombateVirus,:DoseCrianca,:DoseAdulto,:DoseIdoso)");

        $query-> bindValue(":NomeVenda",$Medicamento->getNomeVenda());
        $query-> bindValue(":CompostoAtivo",$Medicamento->getCompostoAtivo());
        $query-> bindValue(":CombateVirus",$Medicamento->getCombateVirus());        
        $query-> bindValue(":DoseCrianca",$Paciente->getDoseCrianca());
        $query-> bindValue(":DoseAdulto",$Paciente->getDoseAdulto());
        $query-> bindValue(":DoseIdoso",$Paciente->getDoseIdoso());
             
        $query->execute();

        header("location: ../view/cadastra_medicamento.php");
        }else{
          $_SESSION['medicamento'] = "Medicamento já cadastrado!";
          header("location: ../view/cadastra_medicamento.php");
      }