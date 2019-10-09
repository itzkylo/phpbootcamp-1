#!/usr/bin/php
<?php
    function ft_is_sort($input)
    {
        $default = $input;
        sort($input);
        $flag =  true;
        foreach ($input as $key=>$value)
            if ($value!=$default[$key])
                $flag = false;
        if ($flag)
            return true;
        else
            return false;
    }
?>