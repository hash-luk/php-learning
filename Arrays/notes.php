<?php

$notas = [
    "João" => 10,
    "Pedro" => 5,
    "Ana" => 8,
    "Dennis" => 4,
    "Carol" => 7
];

//Ordena de forma crescente
sort($notas);


//Ordena de forma inversa
rsort($notas);


//Ordena de forma crescente mantendo as chaves do array
asort($notas);

//Ordena de forma inversa mantendo as chaves do array
arsort($notas);

//Ordena de forma crescente utilizando as chaves do array
ksort($notas);

//Ordena de forma inversa utilizando as chaves do array
krsort($notas);
