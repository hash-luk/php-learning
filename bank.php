<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        "titular" => "Lucas",
        "saldo" => 1000
    ],
    '145.987.327-64' => [
        "titular" => "Vinicius",
        "saldo" => 2000
    ],
    '121.313.012-93' => [
        "titular" => "André",
        "saldo" => 1900
    ]
];

$contasCorrentes["123.456.789-10"] = withdraw($contasCorrentes["123.456.789-10"], 1050);
$contasCorrentes["145.987.327-64"] = deposit($contasCorrentes["145.987.327-64"], -1050);

ownerCapitalLetters($contasCorrentes["123.456.789-10"]);

foreach ($contasCorrentes as $cpf => $conta) {
    ["titular" => $titular, "saldo" => $saldo] = $conta;

    showMessage("$cpf - $titular - $saldo");
}