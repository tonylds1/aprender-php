<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo didático de encapsulamento</title>
    </head>
    <body>
        <?php
        include './inc/Config.inc.php';

        $porta = new Porta;
        $porta->setDobradica(new Dobradica);
        $porta->setFechadura(new Fechadura);

        $chave = new Chave;
        $chave->segredo = '1234';

        //$porta->abre($chave);
        //$porta->fecha();
        
        if ($porta->estado == 'fechada') {

            if ($porta->abre($chave)) {
                echo "<p>A porta foi aberta</p>";
            } else {
                echo "<p>A porta continua fechada, chave errada.</p>";
            }
        } else {
            echo "<p>A porta já estava aberta!</p>";
        }
        ?>
    </body>
</html>
