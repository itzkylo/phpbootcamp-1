#!/usr/bin/php
<?php
    function comparisonfix($in1, $in2)
    {
        if (is_numeric($in1) && !is_numeric($in2))
            return 1;
        else if (!is_numeric($in1) && is_numeric($in2))
            return -1;
        else 
        {
            if ($a < $b)
                return -1;
            else if ($a > $b)
                return 1;
        }
    }

    if ($argc == 1)
        exit;
    $in = implode(" ", $argv);
    $out = explode(" ", $in);
    unset($out[0]);
    usort($out,'comparisonfix');
    $i = 0;
    while ($out[$i] != NULL)
    {
        echo $out[$i];
        echo "\n";
        $i++;
    }       
?>