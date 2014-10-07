<?php

/**
 * Description of Filho
 *
 * @author Tarcnux
 */
class Filho extends Pai{
    private $nomeDoFilho;    
    private $pai;
    
    public function __construct($nomeDoFilho) {
        $this->nomeDoFilho = $nomeDoFilho;
    }

    
    public function getNomeDoFilho() {
        return $this->nomeDoFilho;
    }

    public function setNomeDoFilho($nomeDoFilho) {
        $this->nomeDoFilho = $nomeDoFilho;
    }
    
    //Exemplo de associação de objetos
    //Passando um objeto como parâmetro
    public function setPai(Pai $pai) {
        $this->pai = $pai;
    }
    
    public function getPai() {
        return $this->pai;
    }






}
