#!/usr/bin/php
<?php
    if ($argc == 1)
        exit;
    $in = implode(" ", $argv);
    $out = preg_split('/\s+/', $in);
    unset($out[0]);
    sort($out);
    $i = 0;
    while ($out[$i] != NULL)
    {
        echo $out[$i];
        echo "\n";
        $i++;
    }       
?>