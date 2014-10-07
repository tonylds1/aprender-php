<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Composição de objetos</title>
    </head>
    <body>
        <?php
        require './class/Carteira.class.php';
        require './class/DonaDaCarteira.class.php';
        
        $julieta = new DonaDaCarteira;
        $julieta->recebeNaCarteira(100.56);
        $julieta->recebeNaCarteira(99.44);
        $julieta->verSaldoDaCarteira();
        $julieta->pagaDaCarteira(150.15);
        $julieta->verSaldoDaCarteira();
        $julieta->pagaDaCarteira(39.85);
        $julieta->verSaldoDaCarteira();
               
        ?>
    </body>
</html>
