<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Como obter as dimensões de uma imagem</title>
    </head>
    <body>
        <h1>Como obter as caracteristicas da imagem abaixo?</h1>
        <div>
        
        <?php
          list($width, $height, $type, $attr) = getimagesize("url/to/image.jpg"); 
        ?>
            <table>
              <th>
              <td>Atributo</td>
              <td>valor</td>
              </th>
              <tr>
                <td>width</td>
                <td>$width</td>
              </tr>
              
              <tr>
                <td>height</td>
                <td>$height</td>
              </tr>
              
              <tr>
                <td>type</td>
                <td>$type</td>
              </tr>
              
              <tr>
                <td>Attribute</td>
                <td>$attr</td>
              </tr>
            </table>
        </div>
        
    </body>
</html>

  
  
