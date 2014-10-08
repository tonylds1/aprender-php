<?php

/**
 * Description of Pai
 *
 * @author Tarcnux
 */
class Pai {
    //Visível apenas para a mesma classe
    private $nomeDoPai;
    
    //Visível para a mesma classe e suas filhas
    protected $corDosOlhos = 'Castanho amêndoa';
    
    public function __construct($nomeDoPai) {
        $this->nomeDoPai = $nomeDoPai;
    }
    
    public function getNomeDoPai() {
        return $this->nomeDoPai;
    }

    public function getCorDosOlhos() {
        return $this->corDosOlhos;
    }



}
