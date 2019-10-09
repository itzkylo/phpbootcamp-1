#!/usr/bin/php
<?php

    if ($argc == 1)
        exit;
    $out = explode(" ", $argv[1]);
    $c = 1;
    while ($out[$c])
    {
        echo $out[$c];
        echo " ";
        $c++;
    }
    echo $out[0];
    echo "\n";
?>