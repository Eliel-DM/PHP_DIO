<?php

require __DIR__ . '/../vendor/autoload.php';


use App\ContaBancaria;


$conta = new ContaBancaria();
$conta->setBanco("BRB");



var_dump($conta->getBanco());
