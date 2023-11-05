<?php

namespace Alura\Banco\Models;

class Endereco {
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


}