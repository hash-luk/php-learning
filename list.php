<?php

$idadeList = [18, 30, 25, 21, 22, 23, 26, 19];
$idade = $idadeList[3];

list($idadeMaria, $idadeJoao, $idadePedro) = $idadeList;

foreach($idadeList as $idade) {
    echo $idade . PHP_EOL;
}