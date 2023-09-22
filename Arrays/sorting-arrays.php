<?php 

$notas = [
    [
        "nome" => "Maria",
        "nota" => 9
    ],
    [
        "nome" => "Pedro",
        "nota" => 5
    ],
    [
        "nome" => "Lucas",
        "nota" => 10
    ]
];


function ordenaNotas(array $nota1, array $nota2): int {
    return $nota2["nota"] <=> $nota1["nota1"];
}

usort($notas, "ordenaNotas");
var_dump($notas);