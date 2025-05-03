<?php

// pegando linha a linha 
$arquivo = fopen('lista-cursos.txt', 'r');

//feof ->  Final do arquivo
while (!feof($arquivo)) {
    $curso = fgets($arquivo); //pega uma string até o final da linha

    echo $curso;
}

fclose($arquivo);