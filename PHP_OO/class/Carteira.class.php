<?php

/**
 * Description of Carteira
 *
 * @author Tarcnux
 */
class Carteira {
    //Só tem acesso nesta classe
    private $valor;
    
    public function __construct() {
        (float)$this->valor = 0;
    }
    
    public function guarda($valor) {
        $this->valor += $valor;
        echo "<p style='color:blue;'>Dinheiro colocado na carteira.</p>";
    }
    
    public function gasta($valor){
        $this->valor -= $valor;
        echo "<p style='color:red'>Dinheiro retirado da carteira.</p>";
    }
    
    public function mostraSaldo() {
        echo "<hr><p>O valor presente na carteira é "
        . "$this->valor </p>";
    }
            

}
