<?php

/**
 * Description of Fechadura
 *
 * @author Tarcnux
 */
class Fechadura {
    //A fechadura possui o segredo private, 
    //não é possuível saber, só testando mesmo
    private $segredo = '1234';
    
    public function destranca($chave) {
        if($chave->segredo == $this->segredo){
            return true;
        }else {
            return false;
        }
    }
}
