#!/usr/bin/php
<?php
    if ($argc == 1)
        exit;
    $out = trim(preg_replace('/\s+/', " ", $argv[1]));
    echo "$out";
    echo "\n";
?>