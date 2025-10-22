<?php

require __DIR__ . '/../vendor/autoload.php';


use App\ContasTipo\ContaCorrente;
use App\ContasTipo\ContaPoupanca;

use App\ContaBancaria;


$conta = new ContaCorrente(
    'BRB',
    'Eliel',
    '775',
    "1231231230-12312",
    0.0
);

$conta->setSaldo(100);

var_dump($conta->obterSaldo());
