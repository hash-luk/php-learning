<?php

class Conta {
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;
    private static $numeroDeContas = 0;


    public function __construct(string $cpfTitular, string $nomeTitular) {
        $this->cpfTitular = $cpfTitular;
        $this->validaNome($nomeTitular);
        $this->nomeTitular = $nomeTitular;
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

    public function recuperaSaldo():float {
        return $this->saldo;
    }

    public function recuperaCPFTiular():string {
        return $this->cpfTitular;
    }

    public function recuperaNomeTitular():string {
        return $this->nomeTitular;
    }

    private function validaNome(string $nomeTitular):void {
        if(strlen($nomeTitular) < 5) {
            echo "Nome precisa de pelo menos 5 caracteres";
            exit;
        }
    }

    public static function recuperaNumeroDeContas():int {
        return self::$numeroDeContas;
    }
}