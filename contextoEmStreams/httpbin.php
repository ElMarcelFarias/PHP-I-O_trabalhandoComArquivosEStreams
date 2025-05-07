<?php

$contexto = stream_context_create([
    'http' => [
        'method' => 'DELETE',
        'header' => 'X-From: PHP'
    ]
]);

$contexto2 = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-From: PHP \r\n".
                    "Content-Type: text/plain",
        'content' => 'Teste do corpo da req',
    ]
]);

echo file_get_contents('http://httpbin.org/post', false, $contexto2);