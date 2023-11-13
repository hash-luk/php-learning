<?php

namespace Alura\Banco\Models\Service;

use Alura\Banco\Models\Funcionarios\Funcionario;

class ControladorBonificacao {

    private $totalBonificacao = 0;
    public function adicionaBonificacao(Funcionario $funcionario) {
        $this->totalBonificacao += $funcionario->calculaBonificacao();
    }

    public function getTotalBonificacao():float {
        return $this->totalBonificacao;
    }
}