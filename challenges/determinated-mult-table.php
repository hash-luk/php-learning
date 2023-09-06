<!-- Show a determinate multiplication table from a number -->
<?php

do {
    $number = readline("Write the number to show the table:");
} while(!is_numeric($number));


for ($i = 0; $i <= 10; $i++) {
    echo "$number x $i = " . $number * $i . PHP_EOL;
}