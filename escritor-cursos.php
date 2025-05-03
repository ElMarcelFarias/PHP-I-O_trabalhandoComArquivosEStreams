<?php

// $arquivo = fopen('cursos-php.txt', 'w'); sobreescreve o arquivo
$arquivo = fopen('cursos-php.txt', 'a'); // da um append no final do arquivo
$arquivo = fopen('cursos-php.txt', 'r+'); // tanto para leitura, tanto para escrita
$arquivo = fopen('cursos-php.txt', 'w+'); // enfim, documentacao do fopen

$curso = "\nDesign Patters PHP II: Boas práticas de programacao";

fwrite($arquivo, $curso);

fclose($arquivo);