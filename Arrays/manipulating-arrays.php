<?php

$notasBimestre1 = [
    "João" => 10,
    "Pedro" => 5,
    "Ana" => 8,
    "Dennis" => 4,
    "Carol" => 10
];

$notasBimestre2 = [
    "João" => 10,
    "Pedro" => 5,
    "Ana" => 8,
    "Carol" => 10
];

//array_diff() => retorna um novo array, 
//contendo todos os elementos do array que é passado no primeiro parâmetro, 
//que os valores não estejam nos outros arrays que forem passados
var_dump(array_diff($notasBimestre1, $notasBimestre2));


//Mesma função do array_diff, porém realizará a comparação utilizando as chaves
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

//Mesma função do array_diff, porém levará em conta toda a associação do array (tanto a chave quanto valor)
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

$alunosFaltantes = array_diff($notasBimestre1, $notasBimestre2);

//Recebe um array e retorna apenas as cheves desse array. Além do array pode receber mais 2 parâmetros, 
//um elemento pelo qual ele vai buscar, ou seja só vai retornar os elementos
//om o parâmetro passado e o strict que faz uma comparação de tipos também
$nomesDosAlunos = array_keys($alunosFaltantes);


//Recebe um array e retorna apenas os valores daquele array
$notasDosAlunos = array_values($alunosFaltantes);


//Recebe dois arrays onde o primeiro se torna as chaves e o segundo se torna os valores de um novo array. Sendo necessários 2 arrays do mesmo tamanho
var_dump(array_combine($notasDosAlunos, $nomesDosAlunos));


//Recebe um array e inverte, ou seja o que é valor vira chave e o que é chave vira valor
var_dump(array_flip($alunosFaltantes));




///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


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


//Realiza uma junção de todos os arrays que forem passados por parâmetro, sem preservar as chaves. 
//Se forem chaves de strings, a ultima chave sempre vai sobreescrever a anterior
//Sendo que os valores de um são adicionados a um novo array
$alunos2023 = array_merge($alunos2022, $novosAlunos);

//No lugar do array merge, ele não sobrescreve, mas se a chave já existir no primeiro array ele não adiciona
$alunos2023Plus = $alunos2022 + $novosAlunos;


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//O unpacking operator tem o mesmo compartamento que o array_merge, com a única diferença que dessa forma você pode adicionar elementos no meio dos arrays
$alunos2023Spread = [...$alunos2022, ...$novosAlunos];

//O unpacking pode ser também um spread operator
funcao(...[1,2,3]);
function funcao(int $a, int $b, int $c) {}

