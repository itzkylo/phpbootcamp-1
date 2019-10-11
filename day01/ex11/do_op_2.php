#!/usr/bin/php
<?php
    if ($argc != 2)
    {
        die("Incorrect Parameters\n");
    }
    $in1 = array_filter(explode(" ", $argv[1]));
    $in1 = implode("",$in1);
    if (strstr($in1,"+"))
    {
        $ops = explode("+", $in1);
        if (!is_numeric($ops[1]) || (!is_numeric($ops[0])))
            die("Syntax Error\n");
        else
            die (($ops[0] + $ops[1])."\n");
    }
    if (strstr($in1,"-"))
    {
        $ops = explode("-", $in1);
        if (!is_numeric($ops[1]) || (!is_numeric($ops[0])))
            die("Syntax Error\n");
        else
            die (($ops[0] - $ops[1])."\n");
    }
    if (strstr($in1,"/"))
    {
        $ops = explode("/", $in1);
        if (!is_numeric($ops[1]) || (!is_numeric($ops[0])))
            die("Syntax Error\n");
        else
            die (($ops[0] / $ops[1])."\n");
    }
    if (strstr($in1,"*"))
    {
        $ops = explode("*", $in1);
        if (!is_numeric($ops[1]) || (!is_numeric($ops[0])))
            die("Syntax Error\n");
        else
            die (($ops[0] * $ops[1])."\n");
    }
    if (strstr($in1,"%"))
    {
        $ops = explode("%", $in1);
        if (!is_numeric($ops[1]) || (!is_numeric($ops[0])))
            die("Syntax Error\n");
        else
            die (($ops[0] % $ops[1])."\n");
    }
    else
        die("Syntax Error");
?>