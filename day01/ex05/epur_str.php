#!/usr/bin/php
<?php
    if ($argc != 2)
        exit;
    $out = trim(preg_replace('/\s+/', " ", $argv[1]));
    echo "$out";
?>