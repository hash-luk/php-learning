<?php

namespace Alura\Banco\Models\Conta;

use Alura\Banco\Models\{Pessoa, CPF,Endereco};

use Alura\Banco\Models\Autenticavel;

class Titular extends Pessoa {
    private Endereco $endereco;

    public function __construct(CPF $cpf,string $nome, $endereco) {
        parent::__construct($cpf, $nome);
    
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha):bool {
        return $senha === "abcd";
    }
}