<?php

namespace Alura\Banco\Models\Conta;

use Alura\Banco\Models\Conta\Titular;

class Conta {
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;


    public function __construct(Titular $titular) {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct() {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorSacar):void {
        if($valorSacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 
        
        $this->saldo -= $valorSacar;
    }

    public function depositar(float $valorDeposito):void {
        if($valorDeposito <= 0) {
            echo "Valor insuficiente para depósito";
            return;
        } 

        $this->saldo += $valorDeposito;  
    }

    public function transferir(float $valorATransferir, Conta $contaDestino):void {
        if($valorATransferir > $this->saldo) {
            echo "Valor solicitado, ultrapassa o saldo disponível na conta";
            return;
        } 

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir); 
    }

    public function recuperaNomeTitular():string {
        return $this->titular->getNome();
    }

    public function recuperaCPFTitular():string {
        return $this->titular->getCpf();
    }

    public function recuperaSaldo():float {
        return $this->saldo;
    }

    public static function recuperaNumeroDeContas():int {
        return self::$numeroDeContas;
    }
}