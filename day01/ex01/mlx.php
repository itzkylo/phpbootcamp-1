<?php
    $out = 'x';
    $len2 = 0;
    while ($len2 < 1000)
    {
        echo "$out";
        $len2 += 1;
        if ($len2 == 100)
        {
            break;
        }
    }
    print "\n";
?>