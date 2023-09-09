<?php

function showMessage(string $message) {
    echo $message . "<br><br>";
}

function showAccount(string $cpf , array $account) 
{
    ["titular" => $titular, "saldo" => $saldo] = $account;

    $html = "<dt><h3>$titular - $cpf</h3></dt>";
    $html .= "<dd>Saldo: $saldo</dd><br>";
    echo $html;
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

function ownerCapitalLetters(array &$account)
{
    $account["titular"] = mb_strtoupper($account["titular"]);
}