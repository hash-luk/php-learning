<?php 

$list = [
    1 => "Lucas",
    '1' => "André",
    1.5 => "Vanessa"
];

foreach ($list as $item) {
    echo $item . PHP_EOL;
}