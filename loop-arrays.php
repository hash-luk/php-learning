<?php

$idadeList = [18, 30, 25, 21, 22, 23, 26, 19];

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

echo PHP_EOL;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}