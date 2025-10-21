<?php

require __DIR__ . '/../vendor/autoload.php';


use App\ContaBancaria;


$conta = new ContaBancaria(
    'BRB',
    'Eliel',
    '775',
    "1231231230-12312",
    0.0
);


var_dump($conta->exibirDadosDaConta());
