<?php

declare(strict_types=1);

namespace App;
use App\Contratos\DadosContaBancariaInterface;

use App\Contratos\OperacoesContaBancariaInterface;


abstract class ContaBancaria implements DadosContaBancariaInterface, OperacoesContaBancariaInterface{

    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    protected float $saldo;

    //Contututor para facilitar a implementação 

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function exibirDadosDaConta(): array{
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo,
        ];
    }


    public abstract function obterSaldo() : string;



    public function setBanco(string $banco): void {
        $this->banco = $banco;
    }
    public function getNomeTitular(): string {
        return $this->nomeTitular;
    }
    public function setNomeTitular(string $nomeTitular): void {
        $this->nomeTitular = $nomeTitular;
    }
    public function getNumeroAgencia(): string {
        return $this->numeroAgencia;
    }
    public function setNumeroAgencia(string $numeroAgencia): void {
        $this->numeroAgencia = $numeroAgencia;
    }
    public function getNumeroConta(): string {
        return $this->numeroConta;
    }
    public function setNumeroConta(string $numeroConta): void {
        $this->numeroConta = $numeroConta;
    }
    public function getSaldo(): float{
        return $this->saldo;
    }
    public function setSaldo(float $saldo): void {
        $this->saldo = $saldo;
    }

}
