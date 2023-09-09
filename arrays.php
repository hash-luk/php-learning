<?php

$idadeList = [18, 30, 25, 21, 22, 23, 26, 19];
$idade = $idadeList[3];

$conta1 = [
    "titular" => "Lucas",
    "saldo" => 1000
];

$conta2 = [
    "titular" => "Vinicius",
    "saldo" => 2000
];

$conta3 = [
    "titular" => "André",
    "saldo" => 1900
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]["titular"] . PHP_EOL;
}
