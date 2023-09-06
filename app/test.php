<?php
//Requisitando o vendor autoload
#require_once('../vendor/autoload.php');

//Utilizamos o cliente mongo
use MongoDB\Client;

//Iniciamos uma nova conexão com o mongo através do servidor local e porta padrão
$mongo = new Client('mongodb://localhost:27017');

//Obtemos a lista de bancos existentes
$bases = $mongo->listDatabases();

//Percorremos todos os bancos existentes
foreach ($bases as $base) {

    //Obtemos o nome do banco
    echo $base->getName() . '<br>';
}