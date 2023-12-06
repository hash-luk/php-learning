<?php

$file = fopen('lista.txt', 'r');
$size = filesize('lista.txt');

$lista = fread($file, $size);

echo $lista;

fclose($file);