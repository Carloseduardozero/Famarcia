<?php //Serve para conectar com o banco de dados em PDO

class Conexao{
    //Atributos
    private $usuario;
    private $senha;
    private $banco;
    private $servidor;
    private static $pdo;//Static define que o atributo pertence a essa classe
    
    //Metodo construtor
    public function __construct(){
        $this->servidor = "localhost";
        $this->banco = "farmacia";
        $this->usuario = "root";
        $this->senha = "";
    }
    
    //Funcão para fazer a conexão com o banco
    public function conectar(){
        try{
            if(is_null(self::$pdo)){
                //Caso já tenha sido instaciando alguma vez ele não roda o if e vai direto para o retorno
                self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
            }
            return self::$pdo;
        } catch (PDOException $ex) {
            echo $ex->getMessage();//Retornando erros de conexão
        }
    }
}