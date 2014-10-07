<?php

/**
 * Description of ClasseFilha
 *
 * @author Tarcnux
 */
class ClasseFilha extends ClasseBase{
    
    public function __construct($nome) {
        parent::__construct($nome);
    }

    public function mensagemFilhos() {
        parent::mensagemBase();
         echo "<h2 style='color:deeppink'>Esta é uma mensagem da ClasseFilho ",
                "e meu nome é ", parent::getNome(), "</h2>";
    }

}
