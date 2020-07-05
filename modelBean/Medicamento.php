<?php
require_once './Virus.php';
class Medicamento extends Virus{
    //Atributos
    protected $NomeVenda;
    protected $CompostoAtivo;
    private $CombateVirus;
    
    //Métodos Getters/Setters
    function getNomeVenda() {
        return $this->NomeVenda;
    }

    function getCompostoAtivo() {
        return $this->CompostoAtivo;
    }
    
    function getCombateVirus() {
        return $this->CombateVirus;
    }
    
    function setNomeVenda($NomeVenda) {
        $this->NomeVenda = $NomeVenda;
    }

    function setCompostoAtivo($CompostoAtivo) {
        $this->CompostoAtivo = $CompostoAtivo;
    }

    function setCombateVirus($CombateVirus) {
        $this->CombateVirus = $CombateVirus;
    }
    
}