<?php

$jsonData = file_get_contents("medals.json");
$medalsData = json_decode($jsonData, true);


//Primeira coisa é listar o número de países participantes

echo PHP_EOL;
echo "Foram " . count($medalsData) . " países participantes!\n\n";

//Segunda coisa fazer com que os nomes dos países fiquem em letras maíusculas

$countrieWCapitalLetters = array_map(function($country){
    return strtoupper($country["pais"]);
},$medalsData);

echo "Nome dos países participantes: \n\n";

foreach ($countrieWCapitalLetters as $country) {
    echo "{$country}\n";
}

//Terceira coisa é mostrar os países com mais medalhas, seguindo a regra ouro, prata e bronze

usort($medalsData, function($country1, $country2){
    return $country2["medalhas"]["ouro"] - $country1["medalhas"]["ouro"];
});

usort($medalsData, function($country1, $country2){
    $medals1 = $country1["medalhas"];
    $medals2 = $country2["medalhas"];

    return $medals2["ouro"] - $medals1["ouro"] !== 0 
           ? $medals2["ouro"] - $medals1["ouro"] 
           : ($medals2["prata"] - $medals1["prata"] !== 0
           ? $medals2["prata"] - $medals1["prata"] 
           : $medals2["bronze"] - $medals1["bronze"]);
});


echo "Países ordendos pelo número de medalhas: \n\n";

foreach($medalsData as $country => $medal) {
    echo "{$medal['pais']} => \n";
    echo "\t Ouro -  {$medal['medalhas']['ouro']}\n";
    echo "\t Prata -  {$medal['medalhas']['prata']}\n";
    echo "\t Bronze -  {$medal['medalhas']['bronze']}\n\n";
}


//Por último deve-se informar o número de medalhas distribuídas na competição

$sumOfmedals = array_reduce($medalsData, function($counterMedals ,$item) {
    $counterMedals += $item["medalhas"]["ouro"];
    $counterMedals += $item["medalhas"]["prata"];
    $counterMedals += $item["medalhas"]["bronze"];
    return $counterMedals;
});


echo "Número de medalhas distribuídas ao total: \n\n";
echo "{$sumOfmedals} medalhas\n\n";


//Funcionalidade adicional: filtar apenas os países que não contenham espaço no nome

$countrysWithNoSpaceName = array_filter($medalsData, function($item) {
    return strpos($item["pais"], " ") === false;
});


echo "Países com nome sem espaço: \n";

foreach($countrysWithNoSpaceName as $country) {
    echo "{$country['pais']} \n";
}
