<?php
    function ft_split($arg)
    {
        $res = array_filter(explode(" ", $arg));
        sort($res);
        return ($res);
    }
?>