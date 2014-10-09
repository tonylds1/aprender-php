<?php
/**
 * Description of Parangole
 *
 * @author Tarcnux
 */
class Parangole {
    public function __construct($parangole) {
        //Teste se cria a variável sem que esteja declarada.
        $this->parangole = $parangole;
    }
    
    public function __destruct() {
        echo "<p>Parangolé diz $this->parangole</p>";
    }
}

//Preguiça de criar outra página
$teste = new Parangole('Alo Ha');
