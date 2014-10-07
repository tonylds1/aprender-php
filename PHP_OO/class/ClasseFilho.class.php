<?php

/**
 * Description of ClasseFilho
 *
 * @author Tarcnux
 */
class ClasseFilho extends ClasseBase{
    
    public function __construct($nome) {
        parent::__construct($nome);
    }
    
    //Exemplo de polimorfismo
    public function mensagemFilhos() {
        parent::mensagemBase();
        echo "<h2 style='color:deepskyblue'>Esta é uma mensagem da ClasseFilho ",
                "e meu nome é ", parent::getNome(), "</h2>";
    }

}
