<?php 

// $teclado = fopen('php://stdin', 'r'); //stdin sempre vai ser modo leitura

// $novoCurso = fgets($teclado);

// file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND);


// como facilitar a utilizacao

$novoCurso = trim(fgets(STDIN));

file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND);