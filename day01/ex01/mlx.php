<?php
    $out = 'x';
    $len2 = 0;
    while ($len2 < 999)
    {
        echo "$out";
        $len2 += 1;
        if ($len2 == 99)
        {
            break;
        }
    }
    print "\n";
?>