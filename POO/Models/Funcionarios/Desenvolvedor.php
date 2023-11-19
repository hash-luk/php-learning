<?php


namespace Alura\Banco\Models\Funcionarios;

class Desenvolvedor extends Funcionario {
    public function sobeCargo() {
        $this->recebeAumento($this->getSalario() * 0.75);
    }

    public function calculaBonificacao():float {
        return 500.0;
    }
}