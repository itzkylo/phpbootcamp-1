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
                $out = ucfirst($in{$c});
            $c++;
        }
    }

    function rep_noup($in)
    {
        return ($in[1].checknchange($in[2].$in[3]));
    }

    if ($argc != 2)
        exit;
    $hfile = fopen("*.html", "w+") or die("Unable to open file");
    



    fclose($hfile);
?>