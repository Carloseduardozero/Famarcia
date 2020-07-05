<?php
require_once './Usuario.php';
class AcessoUsuario extends Usuario{
    //Métodos Getters/Setter usando os atributos que foram herdados da classe Usuario
    function getUsuario() {
        return $this->Usuario;
    }

    function getSenha() {
        return $this->Senha;
    }
    
    function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

    function setSenha($Senha) {
        $this->Senha = $Senha;
    }    
}
