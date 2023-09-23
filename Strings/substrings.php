<?php
$nome = "Lucas Patrick";
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


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Utilizando o separador que é passsado como primeiro parâmetro, divide a string, devolvendo um array
[$nome, $sobrenome] = explode(" ", $nome);


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$telefones = [
    "(24) 99999 - 9999",
    "(22) 22222 - 2222",
    "(21) 33333 - 3333",
];


//Separa o array, utilizando o separador que foi passado como primeiro parâmetro
echo implode(PHP_EOL, $telefones);


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$nomeEditado = ".,Lucas,.Patrick.,";

//Remove todas as ocorrências que forem passadas no segundo parâmetro, apenas o que estiver nas ponstas da string
echo trim($nomeEditado, ",.");

//Remove todas as ocorrências que forem passadas no segundo parâmetro, apenas do início da string
echo ltrim($nomeEditado, ",.");

//Remove todas as ocorrências que forem passadas no segundo parâmetro, apenas do final da string
echo rtrim($nomeEditado, ",.");
