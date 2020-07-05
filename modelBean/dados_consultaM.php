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
 $query =  $conexao->conectar()->prepare("SELECT * from medicamento  where NomeVenda =  :NomeVenda ");
      
 $query->bindValue(":NomeVenda" , $Pesquisa);
 
 

 //Execução da query
 $query->execute();   
 
 $result = $query->fetchAll();//convertendo querry em strinfg=
   

   foreach($result as $value){
           echo "Nome Venda: ".$value['NomeVenda']."<br>";
           echo "Composto Ativo: ".$value['CompostoAtivo']."<br>";
           echo "Combate o Virus: ".$value['CombateVirus']."<br>";
          
           echo "Dose Crianca: ".$value['DoseCrianca']."<br>";
           echo "Dose Adulto: ".$value['DoseAdulto']."<br>";
           echo "Dose Idoso: ".$value['DoseIdoso']."<br>";
           

       }
     