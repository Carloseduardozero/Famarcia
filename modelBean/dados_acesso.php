<?php

//Abertura do da sessão
session_start();

//Chamando a classe AcessoUsuario
require_once '../modelBean/AcessoUsuario.php';
require_once '../modelDAO/Conexao.php';
//Criando um objeto dessa Classe
$Acesso = new AcessoUsuario();
$Conexao = new Conexao();

//Pegando as informações do input do usuario
$Usuario_sistema = filter_input(INPUT_POST,'Usuario');
$Senha = filter_input(INPUT_POST,'Senha');

//Setando as informações para a classe AcessoUsuario
$Acesso->setUsuario($Usuario_sistema);
$Acesso->setSenha($Senha);

//Validando acesso do usuário, fazendo uma consulta se o usuário existe no banco de dados
//Futuramente separar SQL do resto do codigo 
 //Comunicação com o SGBD
  $query = $Conexao->conectar()->prepare("SELECT * FROM usuario WHERE Usuario = :Usuario AND Senha = :Senha");
  $query->bindValue (":Usuario", $Acesso->getUsuario());
  $query->bindValue (":Senha", $Acesso->getSenha());

  $query->execute();
  
if($query->rowCount() != 0){//Verificando se é encotrado algum usuário
    
        $query = $Conexao->conectar()->prepare("SELECT * FROM usuario WHERE Usuario = :Usuario AND Senha = :Senha");
        $query->bindParam (":Usuario", $Acesso->getUsuario());
        $query->bindParam (":Senha", $Acesso->getSenha());
        $query->execute();
          
        if($query->rowCount() != 0){
            //Manipulação de informações que foram retirados do banco
            foreach($query->fetchAll() as $valor){
                $_SESSION['NomeCompleto'] = $valor['NomeCompleto'];
            }
            header("location: ../view/pagina_inicial.php");
        }
}else{
    header("location: ../index.php");
}