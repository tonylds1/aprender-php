<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Debugando com o xDebug</title>
    </head>
    <body>
        <?php
        
        /**
         * No Netbeans
         * Ctrl Shift F5 - Depurar Arquivo
         * 
         * Habilitar as janelas de depuração
         * Alt Shift 1 - Variáveis e 
         * Alt Shift 3 - Pilha de Chamas
         * 
         * Executar com o F7
         * 
         */
        $x = 5;
        $y = 7;
        $lista = array("nome"=>"Tarcísio","cidade"=>"Brusque","estado"=>"Santa Catarina");
        echo "<br>Nome: ",$lista["nome"];
        echo "<br>Cidade: ",$lista["cidade"];
        echo "<br>Estado: ",$lista["estado"];
        
        $objeto = new stdClass();
        $objeto->nome = "Nome no objeto";
        $objeto->celular = "(47) 9215-6691";
        $objeto->telefone = "(47) 3351-2335";
        
        function primeira(){
            $varPrimeira = 1;
            echo "<p style=\"color:red\">Dentro da primeira função: $varPrimeira</p>\n";
            $varPrimeira = segunda($conta);
            echo "<p style=color:red>De volta na primeira função: $varPrimeira</p>\n";
        }
        
        function segunda($varSegunda){
            echo "<p style=\"color:green\">Dentro da segunda função: $varSegunda</p>\n";
            $varSegunda++;
            $varSegunda = terceira($varSegunda);
            echo "<p style=color:green>De volta na segunda função: $varSegunda</p>\n";
            return $varSegunda;
        }
        
        function terceira($varterceira){
            $varterceira++;
            echo "<p style=\"color:blue\">Dentro da terceira função: $varterceira</p>\n";
            return $varterceira;
        }
        
        primeira();
        ?>
    </body>
</html>
