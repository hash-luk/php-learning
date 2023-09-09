<?php

function showMessage(string $message) {
    echo $message . PHP_EOL;
}

function withdraw(array $account, float $value):array 
{

    if($value > $account["saldo"]) {
        showMessage("{$account['titular']} não possui saldo suficiente para saque!");
    } else {
        $account["saldo"] -= $value;
    }

    return $account;
}

function deposit(array $account, float $value):array 
{
    if($value > 0) {
        $account["saldo"] += $value;

        showMessage("Depósito para {$account['titular']} realizado com sucesso!");
    } else {
        showMessage("O valor do depósito precisa ser maior que 0!");
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
$contasCorrentes["145.987.327-64"] = deposit($contasCorrentes["145.987.327-64"], -1050);

foreach ($contasCorrentes as $cpf => $conta) {
    showMessage("$cpf - {$conta['titular']} - {$conta['saldo']}");
}