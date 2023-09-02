<?php

$idade = 20;
$nome = "Lucas";

echo "Você só pode entrar se tiver a partir de 18 anos\n" . PHP_EOL;

if($idade >= 18 AND $nome == "Lucas") 
    echo "Você tem mais de 18 anos, pode entrar!";
else 
    echo "Você só tem {$idade} anos. Você não pode entrar!\n";

echo PHP_EOL . "Adeus!";

