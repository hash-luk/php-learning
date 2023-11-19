<?php

namespace Alura\Banco\Models;

abstract class Pessoa {
    protected string $nome;
    private CPF $cpf;

    public function __construct($nome,$cpf) {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

	public function getNome(): string {
		return $this->nome;
	}

	public function getCpf(): string {
		return $this->cpf->getCpf();
	}

    protected function validaNome(string $nomeTitular):void {
        if(strlen($nomeTitular) < 5) {
            echo "Nome precisa de pelo menos 5 caracteres";
            exit;
        }
    }
}