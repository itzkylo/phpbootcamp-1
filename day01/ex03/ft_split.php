<?php  
    function ft_split($input_line)
    {
        $out = preg_split('/\s/', $input_line);
        $ret = array_filter(array_map('trim',$out));
        return ($ret);
    }
?>