<?php

$texto = "Texto qualquer porra e caramba";


/* 
str_replace recebe os argumentos da seguinte forma: o que substiruir, pelo que substituir, onde substituir
sendo que todos os parametros podem ser arraysou strings.

Caso seja passado um array no primeiro parametro, e uma string na segunda,
todas as ocorrencias do array serão substituidas pela string.

Caso seja passado um array no primeiro parametro, e um array na segunda de mesmo tamanho
ele fará a substituição batendo as posições do array.

Caso seja de tamanhos diferentes o array do primeiro parametro e do segundo, ele vai bater as 
primeiras posições e depois irá remover o restante das strings que não possuem substituição
declarada
*/

echo str_replace(
    ["porra", "caramba"], 
    ["***"], 
    $texto
);