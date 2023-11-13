<?php

namespace Alura\Banco\Models\Funcionarios;

class Gerente extends Funcionario {
    public function calculaBonificacao():float {
        return $this->getSalario();
    }
}