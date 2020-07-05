<?php
require_once './Medicamento.php';
class Paciente extends Medicamento {
    //Atributos
    private $DoseCrianca;
    private $DoseAdulto;
    private $DoseIdoso;
    
    //Método Getters/Setters
    function getDoseCrianca() {
        return $this->DoseCrianca;
    }

    function getDoseAdulto() {
        return $this->DoseAdulto;
    }

    function getDoseIdoso() {
        return $this->DoseIdoso;
    }

    function setDoseCrianca($DoseCrianca) {
        $this->DoseCrianca = $DoseCrianca;
    }

    function setDoseAdulto($DoseAdulto) {
        $this->DoseAdulto = $DoseAdulto;
    }

    function setDoseIdoso($DoseIdoso) {
        $this->DoseIdoso = $DoseIdoso;
    }

}
