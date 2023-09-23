<?php

$nome = "Lucas Patrick Pereira";


//A função str_contains recebe a string que deve ser validade e o que precisa conter nela, retornando um boolean
$eDaMinhaFamilia = str_contains($nome, "Pereira");

if($eDaMinhaFamilia) {
    echo "{$nome} é da minha família\n";
} else {
    echo "{$nome} não é da minha família\n";
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://alura.com.br";


//Verifica se uma url começa com o segundo parâmetro passado na função, retornando um boolean
if(str_starts_with($url, "https")) {
    echo "É uma url segura\n";
} else {
    echo "Não é uma url segura\n";
}

//Verifica se uma url termina com o segundo parâmetro passado na função, retornando um boolean
if(str_ends_with($url, ".br")) {
    echo "É um domínio brasileiro\n";
} else {
    echo "Não é um domínio brasileiro\n";
}