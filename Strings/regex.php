<?php 

$telefones = [
    "(24) 99999 - 9999",
    "(22) 2222 - 2222",
    "(21) 3333 - 3333",
];


foreach($telefones as $telefone) {
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';

    $telefoneValido = preg_match(
        $regex, 
        $telefone,
        $match
    );

    if($telefoneValido) {
        echo "Telefone válido" . PHP_EOL;
    } else {
        echo "Telefone inválido" . PHP_EOL;
    }


    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}