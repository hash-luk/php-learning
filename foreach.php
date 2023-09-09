<?php


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

$contasCorrentes [] = [
        "titular" => "Claudia",
        "saldo" => 1900
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo "$cpf - " . $conta["titular"] . PHP_EOL;
}