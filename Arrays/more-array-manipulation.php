<?php

$alunos2022 = [
    0 => "João",
    1 => "Pedro",
    2 => "Ana",
    3 => "Dennis",
    4 => "Carol"
];

$novosAlunos = [
    5 => "Fernando",
    6 => "Lucas",
    7 => "Vitor",
    8 => "Thiago"
];

$alunos2023Spread = [...$alunos2022, ...$novosAlunos];


//Recebe um array como primeiro parâmetro e na mesma ideia de syntax do spread operator
//recebe vários outros parâmetros, que serão adicionados ao final do array. Retorna o número de elementos
//que esse array passou a ter.
array_push($alunos2023Spread, "Jonh");


//Uma outra forma de adicionar elementos ao final do array
$alunos2023Spread[] = "Jonh";

//Funciona da mesma forma que o array_push, com a diferença que adiciona os elementos ao início do array
array_unshift($alunos2023Spread, "Stephanie");


//Recebe um array e remove o primeiro elemento deste array, também reordena todos os índices em caso de índices numéricos.
//Chaves de string não serão modificadas
array_shift($alunos2023Spread);

//Recebe um array e remove o último elemento deste array. Ambos array_shift e array_pop retornam o elemento que foi removido
array_pop($alunos2023Spread);


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$dados = ["Vinicius", 10, 24];


//Cria as variáveis de acordo com as possicões do array passado. Com a ideia de conceito de tupla
list($nome, $nota, $idade) = $dados;
//Mesma funcionalidade da função list(), apenas uma syntaxe menor
[$nome, $nota, $idade] = $dados;




$dados = [
   "nome" => "Vinicius", 
   "nota" => 10, 
   "idade" => 24
];
//Também é possivel realizar com arrays contendo chaves, sendo necessário informar a qual chave se refere
["nome" => $nome, "nota" => $nota, "idade" => $idade] = $dados;

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//Transforma todas as chaves do array passado em variáveis e atribui a essa variável o seu valor
//Nunca deve ser usada em variáveis que você não confia ou não fez nenhum tratamento, como as que vem de uma url por exemplo
//Pois pode alterar o comportamento da aplicação sem você notar
extract($dados);



//Recebe as variáveis que você quer compactar e retorna um array
compact("nome", "nota", "idade");