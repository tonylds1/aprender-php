<?php

/**
 * Description of ClasseBase
 *
 * @author Tarcnux
 */
abstract class ClasseBase {
    //Classe abstrata não pode ser instanciada na forma de um objeto
    //Ela deve ser extendida por outra classe
    protected $nome;
    
    protected function __construct($nome) {
        $this->nome = $nome;
    }
    
    protected function getNome() {
        return $this->nome;
    }

    //Alterar para public e dar o exemplo de acesso, linhas 20 e 24 do arquivo 03-abstrrato
    //public function mensagemBase() {
    protected function mensagemBase() {
        echo "<h1>Mensagem da classe Base</h1>";
    } 
    //O método abstrato não possui corpo
    //Apenas uma assinatura que obriga as
    //classes filhas implementarem suas funcionalidades.
    abstract function mensagemFilhos();
}
