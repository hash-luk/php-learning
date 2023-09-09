<?php


$contasCorrentes = [
    12345678910 => [
        "titular" => "Lucas",
        "saldo" => 1000
    ],
    14598732764 => [
        "titular" => "Vinicius",
        "saldo" => 2000
    ],
    12131301293 => [
        "titular" => "André",
        "saldo" => 1900
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo "$cpf - " . $conta["titular"] . PHP_EOL;
}