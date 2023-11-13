<?php

namespace Alura\Banco\Models\Conta;

class ContaCorrent extends Conta {
    protected function percentualTarifa():float {
        return 0.05;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Valor solicitado, ultrapassa o saldo disponível na conta";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}