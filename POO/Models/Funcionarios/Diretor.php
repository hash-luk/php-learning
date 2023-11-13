<?php

namespace Alura\Banco\Models\Funcionarios;

class Diretor extends Funcionario {
    public function calculaBonificacao():float {
        return $this->getSalario() * 2;
    }

    public function autenticacao(string $senha):bool {
        return $senha === "1234";
    }
}