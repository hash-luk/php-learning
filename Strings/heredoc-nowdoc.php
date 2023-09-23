<?php

function geraEmail(string $nome): void 
{

    //Heredoc - remove toda identação do que seja o fim da string
    //tendo o mesmo efeito de aspas duplas;
    $conteudoEmail = <<<FIM
    Olá, $nome!
    
    Estamos entrando em contato para
    {motivo do contato}

    {assinatura}

    FIM;
}

function geraEmail2(string $nome): void 
{

    //Nowdoc - tem o mesmo efeito de aspas simples
    $conteudoEmail = <<<'FIM'
    Olá, $nome!
    
    Estamos entrando em contato para
    {motivo do contato}

    {assinatura}

    FIM;
}


geraEmail("Lucas Patrick");