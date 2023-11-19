<?php

namespace Alura\Banco\Models;

trait AcessaPropriedades {
    public function __get(string $nomeAtributo) {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        echo $nomeAtributo;
        exit();
    }
}