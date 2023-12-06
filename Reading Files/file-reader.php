<?php

$file = fopen('lista.txt', 'r');

while(!feof($file)) {
    $lista = fgets($file);

    echo $lista;
}

fclose($file);