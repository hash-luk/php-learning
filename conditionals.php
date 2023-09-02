<?php

$idade = 17;
$acompanhantes = 1;

echo "Você só pode entrar se tiver a partir de 18 anos\n" . PHP_EOL;

if($idade >= 18 || ($idade >= 16 && $acompanhantes >= 1)) {
    if($idade >= 18) {
        echo "Você tem 18 anos ou mais, pode entrar!";
    }     
    else {
        echo "Você possui {$idade} anos e está acompanhado(a), pode entrar!";
    }   
}
else {
    echo "Você só tem {$idade} anos. Você não pode entrar!\n";
}

echo PHP_EOL . "Adeus!";

