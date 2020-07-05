<?php

//Chamando a classe Consulta.php
require_once '../modelBean/Consulta.php';
require_once '../modelDAO/Conexao.php';
//Criando objeto a partir da classe de consulta
$Consulta = new Consulta();
$conexao = new conexao();

//Pegando as informações do input
//$SelectPesquisa = filter_input(INPUT_POST,'SelectPesquisa');
$Pesquisa = filter_input(INPUT_POST,'Pesquisa');



 //Comunicação com o SGBD
 $query =  $conexao->conectar()->prepare("SELECT * from virus  where NomeCientifico =  :NomeCientifico ");
      
 $query->bindValue(":NomeCientifico" , $Pesquisa);
 
 

 //Execução da query
 $query->execute();   
 
 $result = $query->fetchAll();//convertendo querry em strinfg=
   

   foreach($result as $value){
           echo "Nome cientifico: ".$value['NomeCientifico']."<br>";
           echo "Nome  popular: ".$value['NomePopular']."<br>";
           echo "Periodo de incubação: ".$value['PeriodoIcubacao']."<br>";
           echo "Medicamento que combate: ".$value['MedicamentoNecessario']."<br>";

       }
     