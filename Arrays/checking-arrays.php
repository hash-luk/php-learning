<?php 


$notas = [
    "João" => null,
    "Pedro" => 5,
    "Ana" => 8,
    "Dennis" => 4,
    "Carol" => 10
];

if(is_array($notas)) {
    echo "Sim é um array" . PHP_EOL;
}

if(array_is_list($notas)) {
    echo "Sim é uma lista";
}


//Verifica se a chave existe
if(array_key_exists("Pedro" ,$notas)) {
    echo "Pedro fez a prova!";
}


//Verifica se o valor existe e não é nulo
if(isset($notas["João"])) {
    echo "João fez a prova!";
}


//Verifica se o elemento existe no array, idependente da chave. A flag strict em termos simples altera o operador "==" para "==="
if(in_array(10, $notas, true)) {

    //Faz uma busca no array e caso encontre o valor, devolve a chave associado a esse valor
    $nota10 = array_search(10, $notas, true);
    
    if($nota10) {
        echo "{$nota10} tirou 10!";
    }
}
