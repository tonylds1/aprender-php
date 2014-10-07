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
        require './inc/Config.inc.php';
        
        
        
        
        $pai = new Pai('Gilberlon');
        $filho = new Filho('Francislei');
        
        echo "<p>O pai se chama ", $pai->getNomeDoPai(), " e tem olhos cor ";
        echo $pai->getCorDosOlhos(), ".</p>";
        
        echo "<hr>";
        
        echo "<p>O filho se chama ", $filho->getNomeDoFilho();
        echo " e tem olhos cor ", $filho->getCorDosOlhos(), ".</p>";
        
        //Erro de conceito
        //Método herdado incorretamente
        echo "<p>O pai do filho se chama ", $filho->getNomeDoPai()
        . "</p>";
        
        //Para corrigir, deve-se fazer uma ASSOCIAÇÃO
        //Conceito correto de associação
        $filho->setPai($pai);
        echo "<p>O pai do filho se chama ", $filho->getPai()->getNomeDoPai()
        . "</p>";
        
        
        ?>
    </body>
</html>
