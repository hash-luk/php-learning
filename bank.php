<?php

function showMessage($message) {
    echo $message . PHP_EOL;
}

function withdraw($account, $value) {

    if($value > $account["saldo"]) {
        showMessage("{$account['titular']} não possui saldo suficiente para saque!");
    } else {
        $account["saldo"] -= $value;
    }

    return $account;
}

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

foreach ($contasCorrentes as $cpf => $conta) {
    showMessage("$cpf - {$conta['titular']} - {$conta['saldo']}");
}