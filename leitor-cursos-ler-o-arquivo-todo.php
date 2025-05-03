<?php

// pegando linha a linha 
$arquivo = fopen('lista-cursos.txt', 'r');

$tamanhoDoArquivo = filesize('lista-cursos.txt'); // pega o tamanho do arquivo 
$cursos = fread($arquivo, $tamanhoDoArquivo); //segundo parametro é para informar a quantidade de bits que quer ler 

// echo $cursos;

fclose($arquivo);


// SIMPLIFICANDO

$cursosSimplificado = file_get_contents('lista-cursos.txt');
// abrir o arquivo, buscar o conteudo e fechar o arquivo. Tudo em uma única funcao 
// n sao todos os casos que vamos precisar disso


$arrayCursosSimplificado = file('lista-cursos.txt'); //Retorna as linhas do texto para um index do array 


echo $cursosSimplificado;