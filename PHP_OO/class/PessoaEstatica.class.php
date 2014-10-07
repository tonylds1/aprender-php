<?php

/**
 * Description of PessoaEstatica
 *
 * @author Tarcnux
 */
class PessoaEstatica {
    //Propriedade da classe
    //igual para todos os objetos
    private static $nome;
    
    public function __construct($nome) {
        self::$nome = $nome;
    }
    
    public function digaOi() {
         echo '<p>Oi, meu nome é ', self::$nome,'</p>';
    }
    
    
    //Métodos estáticos
    public static function setNome($nome) {
        self::$nome = $nome;
    }
    
    public static function getNome() {
        return self::$nome;
    }






}
