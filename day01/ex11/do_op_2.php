#!/usr/bin/php
<?php
    if ($argc != 2)
    {
        echo "Incorrect Parameters\n";
        exit;
    }
    $c = 0;
    $input = trim($argv[1]);
    
    while ($input[$c] != " " || ($input[$c] != "+" || $input[$c] != "/" || $input[$c] != "%" || $input[$c] != "*"))
    {
        if ($input[0] == "-" || (is_numeric($input[$c])))
            {
                $in1[$c] = $input[$c];
            }
        $c++;
    }
    echo "$c\n";
    echo "$in1";
    while ($input[$c] == " ")
        $c++;
    
    if ($input[$c] == "+" || $input[$c] == "-" || $input[$c] == "/" || $input[$c] == "%" || $input[$c] == "*")
        $sign = $input[$c];
    $c++;

    while ($input[$c] == " ")
        $c++;
    
    while ($input[$c] != " " &&  $input[$c] != NULL && ($input[$c] != "+" || $input[$c] != "/" || $input[$c] != "%" || $input[$c] != "*"))
        {
            if ($input[$c] == "-" || (is_numeric($input[$c])))
                {
                    $in2[$c] = $input[$c];
                }
            $c++;
        }
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

?>