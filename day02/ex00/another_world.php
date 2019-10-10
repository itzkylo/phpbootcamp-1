#!/usr/bin/php
<?php
    if ($argc < 2)
        exit;
    $in = preg_split('/\s+/', $argv[1]);
    $out = implode(" ",$in);
    echo $out."\n"
?>

