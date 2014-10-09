<?php
/**
 * Description of Pau
 *
 * @author Tarcnux
 */
class Pau extends ProjetilAbstrato implements iAlvo{
       
    public function acerta(iProjetil $projetil) {
        echo "<h1>Poof!</h1>";
    }

}
