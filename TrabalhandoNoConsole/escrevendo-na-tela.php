<?php

$tela = fopen('php://stdout', 'w');
$tela = fopen('php://stderr', 'w'); // saida de erro
fwrite($tela, 'Olá mundo');


// facilitando

// fwrite(STDOUT, 'Olá mundo');
// fwrite(STDERR, 'Olá mundo');