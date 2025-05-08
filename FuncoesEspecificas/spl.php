<?php 

$arquivoCursos = new SplFileObject('cursos-spl.csv', 'r');

while (!$arquivoCursos->feof()) {
    $linha = $arquivoCursos->fgetcsv();

    echo $linha[0] . PHP_EOL;
    
}

$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());

echo $date->format('d/m/Y');