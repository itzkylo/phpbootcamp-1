<?php
    if ($argc == 1)
        exit;
    $in = implode(" ", $argv);
    $out = explode(" ", $in);
    unset($out[0]);
    usort($out,'strnatcasecmp');
    $i = 0;
    while ($out[$i] != NULL)
    {
        echo $out[$i];
        echo "\n";
        $i++;
    }       
?>
