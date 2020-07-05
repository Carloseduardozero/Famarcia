<?php

class Usuario {
    //Atributos
    private $NomeCompleto;
    protected $Usuario;
    protected $Senha;
    private $ConfirmarSenha;
     
    //Métodos Getters/Setters
    function getNomeCompleto() {
        return $this->NomeCompleto;
    }

    function getUsuario() {
        return $this->Usuario;
    }

    function getSenha() {
        return $this->Senha;
    }

    function getConfirmarSenha() {
        return $this->ConfirmarSenha;
    }

    function setNomeCompleto($NomeCompleto) {
        $this->NomeCompleto = $NomeCompleto;
    }

    function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

    function setSenha($Senha) {
        $this->Senha = $Senha;
    }

    function setConfirmarSenha($ConfirmarSenha) {
        $this->ConfirmarSenha = $ConfirmarSenha;
    }

}
