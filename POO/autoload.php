<?php

spl_autoload_register(function (string $class) {
    $archivePath = str_replace("Alura\\Banco", "src", $class);
    $archivePath = str_replace("\\", DIRECTORY_SEPARATOR, $archivePath);
    $archivePath.= ".php";

    if (file_exists($archivePath)) {
        require_once $archivePath;
    }
});
