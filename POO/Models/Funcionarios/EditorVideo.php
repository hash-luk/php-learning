<?php

namespace Alura\Banco\Models\Funcionarios;

class EditorVideo extends Funcionario {

    public function calculaBonificacao(): float {
        return 600;
    }
}