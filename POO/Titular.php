<?php


class Titular {
    private $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome) {
        $this->cpf = $cpf;
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function getCpf(): string {
        return $this->cpf->getCpf();
    }

    public function getNome(): string {
        return $this->nome;
    }

    private function validaNome(string $nomeTitular):void {
        if(strlen($nomeTitular) < 5) {
            echo "Nome precisa de pelo menos 5 caracteres";
            exit;
        }
    }
}