<?php

$email = "lucas@empresa.com.br";
$senha = "12345";



//strpos retorna a possição de uma caractere que será verificado, dentro de uma string
$pos = mb_strpos($email, "@");

//Retorna o pedaço de uma string, pegando do primeiro parâmetro passado, 
//que seria de onde iniciaria a contagem, 
//até o ultimo que seria onde finalizaria a contagem de caracteres
$usuario = substr($email, 0, $pos);

//Recebe uma string como parâmetro e retorna o tamanho dessa string em bytes, ou seja não é uma boa verificação caso tenha letras com acentos
var_dump(mb_strlen($senha));


//Recebe uma string como parâmetro e altera para letras maíusculas
mb_strtoupper($usuario);

//Recebe uma string como parâmetro e altera para letras minúsculas
mb_strtolower($usuario);
