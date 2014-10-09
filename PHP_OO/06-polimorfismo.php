<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './inc/Config.inc.php';
        
        $pau = new Pau;
        $gato = new Gato;
        
        $joaozinho = new Johnny;
        
        //Polimorfismo
        //Pau aqui é um projétil
        $joaozinho->atira($pau, $gato);
        
        //Pau aqui é um alvo;
        $pedra = new Pedra;
        $joaozinho->atira($pedra, $pau);
        
        //Mas também pode ser projétil e alvo, polimorfismo
        $joaozinho->atira($pau, $pau);
        
        $bola = new Bola;
        $gol = new Gol;
        
        $joaozinho->atira($bola, $gol);
        ?>
    </body>
</html>
