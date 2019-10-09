<?php

    if ($argc == 1)
        exit;
    $in = explode(" ", $argv[1]);
    $out = array_reverse($in);
    echo $out2 = implode(" ", $out);
    
?>