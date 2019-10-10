#!/usr/bin/php
<?php
    if ($argc != 4)
    {
        echo "Incorrect Parameters\n";
        exit;
    }
    $in1 = trim($argv[1]);
    $sign = trim($argv[2]);
    $in2 = trim($argv[3]);

    if ($sign == "+")
        echo ($in1 + $in2)."\n";
    else if ($sign == "-")
        echo ($in1 - $in2)."\n";
    else if ($sign == "/")
        echo ($in1 / $in2)."\n";
    else if ($sign == "*")
        echo ($in1 * $in2)."\n";
    else if ($sign == "%")
        echo ($in1 % $in2)."\n";
    else
        {
            echo "\n";
            exit;
        }
?>