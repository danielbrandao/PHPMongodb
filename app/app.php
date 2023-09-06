<?php

$client = new MongoDB\Client('mongodb://localhost:27017');
$database = $client->selectDatabase('veiculo');
$collection = $database->selectCollection('carro');

$document = [
    'marca' => 'Cherry',
    'modelo' => 'Tyggo',
    'preco' => 88000,
    'ano' => 2022,
    'categoria' => 'Utilitário',
    'cambio' => 'Automático'
];

$collection->insert($document);

header('Location: success.php');


?>