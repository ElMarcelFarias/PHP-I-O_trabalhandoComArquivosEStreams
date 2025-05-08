<?php 

// Basicamente utilizar a funcao utf8_decode

$meusCursos = file('../WrappersEFiltros/lista-cursos.txt');
$outrosCursos = file('../TrabalhandoNoConsole/cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'sim'];

    fputcsv($arquivoCsv, $linha, ';');
    // fwrite($arquivoCsv, implode(',', $linha));

}

foreach ($outrosCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'NOP'];

    fputcsv($arquivoCsv, $linha, ';');
    // fwrite($arquivoCsv, implode(',', $linha));

}

fclose($arquivoCsv);

// fgetcsv le cada linha do csv