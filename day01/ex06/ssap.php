<?php
    $c = 1;
    $ind = 0;
    while ($argv[$c] != NULL)
    {
        
        $out = explode(" ",$argv[$c]);
        $ret = array_filter($out, 'strlen');
        sort($ret);
        $c++;
    }
    while ($ret[$i] != NULL)
        {
            echo $ret[$i];
            echo "\n";
            $i++;
        }
?>