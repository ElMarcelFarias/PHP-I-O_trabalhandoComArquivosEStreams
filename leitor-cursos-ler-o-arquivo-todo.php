<?php

// pegando linha a linha 
$arquivo = fopen('lista-cursos.txt', 'r');

$tamanhoDoArquivo = filesize('lista-cursos.txt'); // pega o tamanho do arquivo 
$cursos = fread($arquivo, $tamanhoDoArquivo); //segundo parametro é para informar a quantidade de bits que quer ler 

echo $cursos;

fclose($arquivo);