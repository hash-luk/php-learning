<?php

class Conta {
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;

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
    
    public function defineCPF(string $cpf):void {
        $this->cpfTitular = $cpf;
    }

    public function defineNome(string $nome):void {
        $this->nomeTitular = $nome;
    }

    public function recuperaSaldo():float {
        return $this->saldo;
    }

    public function recuperaCPFTiular():string {
        return $this->cpfTitular;
    }

    public function recuperaNomeTitular():string {
        return $this->nomeTitular;
    }
}