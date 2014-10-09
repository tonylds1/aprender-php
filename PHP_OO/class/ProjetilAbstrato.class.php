<?php

/**
 * Description of ProjetilAbstrato
 *
 * @author Tarcnux
 */
abstract class ProjetilAbstrato implements iProjetil{
    public function atira(\iAlvo $alvo) {
        $alvo->acerta($this);
    }

}
