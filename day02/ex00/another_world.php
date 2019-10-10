#!/usr/bin/php
<?php
    if ($argc < 2)
        exit;
    $in = preg_split('/\s+/', $argv[1]);
    $out = implode(" ",$in);
    $out = trim($out);
    echo $out."\n"
?>