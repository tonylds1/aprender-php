<?php

/**
 * Description of Porta
 *
 * @author Tarcnux
 */
class Porta {
    private $dobradica;
    private $fechadura;
    public $estado = 'fechada';
    
    public function setDobradica($dobradica) {
        $this->dobradica = $dobradica;
    }

    public function setFechadura($fechadura) {
        $this->fechadura = $fechadura;
    }

    public function abre($chave) {
        if($this->estado == 'fechada'){
            if($this->fechadura->destranca($chave)){
                if($this->dobradica->dobra()){
                    $this->estado = 'aberta';
                    return true;
                }
            }
        }
        return false;
    }
    
    public function fecha() {
        $this->estado = 'fechada';
    }
}
