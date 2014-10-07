<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Propriedade Estática</title>
    </head>
    <body>
        <?php
        require './inc/Config.inc.php';
        
        $fulano = new Pessoa('Fulano');
        $beltrano = new Pessoa('Beltrano');
        
        $fulano->digaOi();
        $beltrano->digaOi();
        
        $sicrano = new PessoaEstatica('Sicrano');
        $ecrano = new PessoaEstatica('Ecrano');
        
        $sicrano->digaOi();
        $ecrano->digaOi();
        
        //Métodos estáticos são acessados diretamente da classe
        //Não é necessário instanciar um objeto
        PessoaEstatica::setNome('Nome estático');
        $sicrano->digaOi();
        echo "Não pertenço a um objeto e meu nome é ", PessoaEstatica::getNome();
        
        ?>
    </body>
</html>
