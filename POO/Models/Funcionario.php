<?php

namespace Alura\Banco\Models;

class Funcionario extends Pessoa {
    private string $cargo;

    public function __construct(string $nome,CPF $cpf,$cargo) {
        parent::__construct($nome,$cpf);

        $this->cargo = $cargo;
    }
	
	public function getCargo(): string {
		return $this->cargo;
	}

    public function alteraNome(string $nome):void {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
}