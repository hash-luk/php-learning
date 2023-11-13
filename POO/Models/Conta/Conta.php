<?php

namespace Alura\Banco\Models\Conta;

use Alura\Banco\Models\Conta\Titular;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorSacar): void
    {

        $tarifaSaque = $valorSacar * $this->percentualTarifa();

        $valorSaque = $valorSacar + $tarifaSaque;

        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorDeposito): void
    {
        if ($valorDeposito <= 0) {
            echo "Valor insuficiente para depósito";
            return;
        }

        $this->saldo += $valorDeposito;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    public function recuperaCPFTitular(): string
    {
        return $this->titular->getCpf();
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
}
