<?php
$contador = 1;
$studentsMax = 15;
$students = [];
$studentsName = array(
    'Johnathon',
    'Anthony',
    'Erasmo',
    'Raleigh',
    'Nancie',
    'Tama',
    'Camellia',
    'Augustine',
    'Christeen',
    'Luz',
    'Diego',
    'Lyndia',
    'Thomas',
    'Georgianna',
    'Leigha',
    'Alejandro',
    'Marquis',
    'Joan',
);

for($i = 1; $i <= $studentsMax; $i++) {
    $students[] = [
        "id" => $i,
        "nome" => $studentsName[$i]
    ];
}

foreach($students as $student) {
    echo $student["id"] ." - ". $student["nome"] . PHP_EOL;
}

while ($contador <= 15) {
    if($contador == 13) {
        echo "#$contador" . PHP_EOL;
    }
    $contador++;
}