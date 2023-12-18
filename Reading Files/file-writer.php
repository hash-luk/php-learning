<?php

$arquivo = fopen('cursos.txt', 'w');

$curso = 'Programação';

fwrite($arquivo, $curso);

fclose($arquivo);