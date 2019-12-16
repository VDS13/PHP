<?php
    function ft_is_sort($tab)
    {
        $res = $tab;
        sort($res);
        $check = array_diff_assoc($tab, $res);
        if ($check == NULL)
            return (true);
        else
        {
            $tab1 = array_reverse($tab);
            $check = array_diff_assoc($tab1, $res);
            if ($check == NULL)
                return (true);
            else
                return (false);
        }
    }
?>