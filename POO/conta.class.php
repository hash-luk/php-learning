<?php

class Conta {
    public $cpfTitular;
    public $nomeTitular;
    public $saldo;

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
}