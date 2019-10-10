#!/usr/bin/php
<?php
    function uprep($in)
    {
        return ($in[1].strtoupper($in[2]).$in[3]);
    }

    function checknchange($in)
    {
        $indicator = true;
        $c = 0;
        while ($in[$c])
        {
            if ($in[$c] == ">")
                $indicator = true;
            if ($in[$c] == "<")
                $indicator = false;
            if ($indicator)
                $out = ucfirst($in[$c]);
            else
                $out .= ucfirst($in[$i]);
            $c++;
        }
        return ($out);
    }

    function rep_noup($in)
    {
        return ($in[1].checknchange($in[2].$in[3]));
    }

    if ($argc != 2)
        exit;
    if (!is_readable($input = $argv[1]))
    {
        die("Incorrect file\n");
    }
    $data = file_get_contents($input);
    $data = preg_replace_callback('/(<.*title=\")(.*)(\".*>)/Uis', uprep, $data);
    $data = preg_replace_callback('/(<a.*>)(.*)(<\/a>)/Uis', rep_noup, $data);
    echo $data;
    
?>