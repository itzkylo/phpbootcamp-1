#!/usr/bin/php
<?php
    function hyper_cmp($in1, $in2)
    {
       $c = 0;
       $t_line = "abcdefghijklmnopqrstuvwxyz1234567890!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";

       while ($c < strlen($in1) || ($c < strlen($in2)))
       {
            $indx1 = stripos($t_line, $in1[$c]);
            $indx2 = stripos($t_line, $in2[$c]);
            if ($indx1 > $indx2)
                return 1;
            else if ($indx1 < $indx2)
                return -1;
            else
                $c++; 
       } 
    }

    if ($argc == 1)
        exit;
    
    $in = 1;
    $out = array();
    foreach ($argv as $elemnt)
    {
        if ($in++ > 1)
        {
            $tmp_o = preg_split("/ +/", trim($elemnt));
            if ($tmp_o[0] != " ")
                $out = array_merge($out, $temp_o);
        }
    }
    usort($out,'hyper_cmp');
    foreach ($out as $elemnt)
        echo "$elemnt"."\n";  
?>