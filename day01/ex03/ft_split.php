<?php  
    function ft_split($input_line)
    {
        $out = explode(" ", $input_line);
        $ret = array_filter($out, 'strlen');
        sort($ret);
        return ($ret);
    }
?>