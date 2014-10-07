<?php

/**
 * Description of DonaDaCarteira
 *
 * @author Tarcnux
 */

class DonaDaCarteira {
    private $carteira;
    
    public function __construct() {
        //Exemplo de composição
        //Esta classe é responsável pela criação do objeto carteira
        //Conceito de isolamento de responsabilidades
        $this->carteira = new Carteira;
    }
    
    public function recebeNaCarteira($valor) {
        //Como não é herança, os métodos da classe Carteira devem ser públicos
        //pois são aessados fora do contexto ou família da árvore Carteira
        $this->carteira->guarda($valor);
    }
    
    public function pagaDaCarteira($valor) {
        $this->carteira->gasta($valor);
    }
    
    public function verSaldoDaCarteira() {
        $this->carteira->mostraSaldo();
    }

}
