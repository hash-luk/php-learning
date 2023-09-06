<!-- Create a program that print only odd numbers until 100 -->
<?php 

for ($i = 0; $i <= 100; $i++) {
    if($i % 2 != 0) {
        echo $i . PHP_EOL;
    }
}