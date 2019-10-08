<?php
    $c = 1;
    while ($argv[$c] != NULL)
    {
        $out = explode(" ",$argv[$c]);
        $ret = array_filter($out, 'strlen');
        rsort($ret);
        print_r($ret);
        $c++;
    }
?>