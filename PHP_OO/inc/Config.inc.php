<?php

//Método mágico
//Recebe o nome da classe após a utilização do operador new
function __autoload($Class) {
    
    /**
     * Nome da pasta onde estão as classes
     */
    $dirName = 'class';
    
    if(file_exists("{$dirName}/{$Class}.class.php")):
        //ensagem de Debug - deve ser comentada
        echo "<br>Existe o arquivo {$dirName}/{$Class}.class.php e está sendo incluído.<hr>";
        require_once("{$dirName}/{$Class}.class.php");
    else:
        die("<br>Erro ao incluir {$dirName}/{$Class}.class.php<hr>");
    endif;
}

