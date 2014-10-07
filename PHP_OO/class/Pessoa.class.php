<?php

/**
 * Description of Pessoa
 *
 * @author Tarcnux
 */
class Pessoa {
    //Propriedade do objeto
    //único para cada objeto
    private $nome;
    
    function __construct($nome) {
        $this->nome = $nome;
    }
    
    public function digaOi() {
        echo '<p>Oi, meu nome é ', $this->nome, '</p>';
    }
    
    function setNome($nome) {
        $this->nome = $nome;
    }

}
