<?php

namespace Alura\Banco\Models\Funcionarios;
use Alura\Banco\Models\CPF;
use Alura\Banco\Models\Pessoa;

abstract class Funcionario extends Pessoa {
    private float $salario;

    public function __construct(string $nome,CPF $cpf, float $salario) {
        parent::__construct($nome,$cpf);
    }

    public function getSalario():float {
        return $this->salario;
    }

    public function alteraNome(string $nome):void {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento):void {
        if($valorAumento < 0) {
            echo "Aumento deve ser positivo";
        }

        $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao(): float; 
}