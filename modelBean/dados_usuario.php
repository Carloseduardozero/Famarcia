<?php
//Abertura do da sessão
session_start();

//Chamando a classe Usuario.php
require_once '../modelBean/Usuario.php';
require_once '../modelDAO/Conexao.php';
//Criando um objeto da classe Usuario.php
$Usuario = new Usuario();
$Conexao = new Conexao();

//Pegando os dados do input do usuario do sistema
$NomeCompleto = filter_input(INPUT_POST,'NomeCompleto');
$Usuario_sistema = filter_input(INPUT_POST,'Usuario');
$Senha = filter_input(INPUT_POST,'Senha');
$ConfirmarSenha = filter_input(INPUT_POST,'ConfirmarSenha');

//Setando as informações para a classe Usuario.php
$Usuario->setNomeCompleto($NomeCompleto);
$Usuario->setUsuario($Usuario_sistema);
$Usuario->setSenha($Senha);
$Usuario->setConfirmarSenha($ConfirmarSenha);

//Parte que faz o cadastro do usuario no banco de dados 
//OBS:Futuramente fazer a separação do SQL do Controller
if ($Usuario->getSenha() == $Usuario->getConfirmarSenha()) {
    //Comunicação com o SGBD
    $query = $Conexao->conectar()->prepare("SELECT * FROM usuario WHERE
    Usuario = :Usuario OR NomeCompleto = :NomeCompleto AND Senha = :Senha");

    //Substituição dos parametros 
    $query->bindParam (":NomeCompleto", $Usuario->getNomeCompleto());
    $query->bindParam (":Usuario", $Usuario->getUsuario());
    $query->bindParam (":Senha", $Usuario->getSenha());
    //Execução da query
    $query->execute();
} else {//Caso as senhas não sejam as mesmas retorna um erro
    $_SESSION["senhaDiferente"] = "As senhas não são as mesmas";
    header("location: ../view/cadastrar_usuario.php");
}

    //Verificação se o número de tabelas foi diferente de 0 ou seja se algo foi encontrado
    if($query->rowCount() == 0){

        //Query reponsavel por preparar o codigo que insere as informações no banco
        $query = $Conexao->conectar()->prepare("INSERT INTO usuario
        (NomeCompleto,Usuario,Senha)VALUES (:NomeCompleto,:Usuario,:Senha)");

        $query-> bindParam(":NomeCompleto",$Usuario->getNomeCompleto());
        $query-> bindParam(":Usuario",$Usuario->getUsuario());
        $query-> bindParam(":Senha",$Usuario->getSenha());
        
        $query->execute();

        header("location: ../index.php");
          $_SESSION["usuSucesso"] = "Usuário cadastrado com sucesso!";
        }else{
          $_SESSION["msg"] = "Usuário já cadastrado!";
          header("location: ../view/cadastrar_usuario.php");
      }