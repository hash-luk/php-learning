<?php

namespace Alura\Banco\Models\Funcionarios;
use Alura\Banco\Models\CPF;
use Alura\Banco\Models\Pessoa;

abstract class Funcionario extends Pessoa {
    private string $cargo;
    private float $salario;

    public function __construct(string $nome,CPF $cpf,$cargo, float $salario) {
        parent::__construct($nome,$cpf);

        $this->cargo = $cargo;
    }

    public function getSalario():float {
        return $this->salario;
    }
	
	public function getCargo(): string {
		return $this->cargo;
	}

    public function alteraNome(string $nome):void {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function calculaBonificacao():float {
        return $this->salario * 0.01;
    }

    public function recebeAumento(float $valorAumento):void {
        if($valorAumento < 0) {
            echo "Aumento deve ser positivo";
        }

        $this->salario += $valorAumento;
    }
}