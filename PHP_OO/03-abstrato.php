<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conceito de abstração de classes e métodos</title>
    </head>
    <body>
        <?php
        require './inc/Config.inc.php';
        
        $filho = new ClasseFilho('Hércules');
        $filha = new ClasseFilha('Atenas');
        
        //Só para o caso da mensagemBase estiver como public
        //$filho->mensagemBase();
        $filho->mensagemFilhos();
        
        //Só para o caso da mensagemBase estiver como public
        //$filha->mensagemBase();
        $filha->mensagemFilhos();
        ?>
    </body>
</html>
