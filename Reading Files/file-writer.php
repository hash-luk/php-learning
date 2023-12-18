<?php

$arquivo = fopen('cursos.txt', 'a');

$curso = "\nProgramação";

fwrite($arquivo, $curso);

fclose($arquivo);