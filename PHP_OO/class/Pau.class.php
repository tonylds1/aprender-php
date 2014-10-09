<?php
/**
 * Description of Pau
 *
 * @author Tarcnux
 */
class Pau implements iProjetil,  iAlvo{
    
    public function atira(iAlvo $alvo) {
        $alvo->acerta($this);
    }
    
    public function acerta(iProjetil $projetil) {
        echo "<h1>Poof!</h1>";
    }


}
