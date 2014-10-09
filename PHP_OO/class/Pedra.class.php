<?php

/**
 * Description of Pedra
 *
 * @author Tarcnux
 */
class Pedra implements iProjetil{
    public function atira(iAlvo $alvo) {
        $alvo->acerta($this);
    }

}
