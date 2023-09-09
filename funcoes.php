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