<?php
    $enunciados = array("Qual a seleção com mais copas do mundo?", "Qual o país que possuí o apelido terra do sol nascente?", "Quantas letras contêm na escrita da bandeira nacional brasileira", "Quantos noves tem de 0 a 100?", "Qual é o significado da sigla Petrobras?");

    $alternativas[0] = array("Brasil", "Alemanha", "Itália","Japão");
    $alternativas[1] = array("Argentina", "Japão", "Cuba","Rússia");
    $alternativas[2] = array("17", "14", "15","16");
    $alternativas[3] = array("20", "21", "23","26");
    $alternativas[4] = array("Pétroleo Brasileiro", "Petroquimica brasileira", "Petroquimica Brasil","Petroleo brasil");

    $respostas = array(1, 2, 2, 3, 1);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Show do Bilhao</title>
    </head>
    <body>
            <?php
                for ($i=0; $i < 5; $i++) { 
                    echo  nl2br("$enunciados[$i]\n<br>");
                    for ($j=0; $j <4 ; $j++) { 
                        echo nl2br("{$alternativas[$i][$j]}\n");
                    }
                    echo"<br>";
                }

            ?>

    </body>
</html> 