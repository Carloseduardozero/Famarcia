<?php

class Virus {
    //Atributos
    protected $NomeCientifico;
    protected $NomePopular;
    protected $PeriodoIcubacao;
    private $MedicamentoNecessario;
    
    //Métodos Getters/Setters
    function getNomeCientifico() {
        return $this->NomeCientifico;
    }

    function getNomePopular() {
        return $this->NomePopular;
    }

    function getPeriodoIcubacao() {
        return $this->PeriodoIcubacao;
    }
    
    function getMedicamentoNecessario() {
        return $this->MedicamentoNecessario;
    }

    function setNomeCientifico($NomeCientifico) {
        $this->NomeCientifico = $NomeCientifico;
    }

    function setNomePopular($NomePopular) {
        $this->NomePopular = $NomePopular;
    }

    function setPeriodoIcubacao($PeriodoIcubacao) {
        $this->PeriodoIcubacao = $PeriodoIcubacao;
    }
    
    function setMedicamentoNecessario($MedicamentoNecessario) {
        $this->MedicamentoNecessario = $MedicamentoNecessario;
    }

}
