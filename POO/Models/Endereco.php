<?php

namespace Alura\Banco\Models;

final class Endereco {
    use AcessaPropriedades;
    private string $rua;
    private string $numero;
    private string $bairro;
    private string $estado;
    private string $cidade;

    public function __construct($rua,$numero,$bairro,$estado,$cidade) {
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->estado = $estado;
        $this->cidade = $cidade;
    }

    public function getRua() {
        return $this->rua;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function __toString(): string {
        return $this->rua ." ". $this->numero . $this->bairro ." ". $this->estado ." ". $this->cidade;
    }



    public function __set($nomeAtributo, $value): void{
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this->$metodo($value);

    }
}