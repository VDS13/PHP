#!/usr/bin/php
<?php
    array_shift($argv);
    $res = implode(" ", $argv);
    $res1 = array_filter(explode(" ", $res));
    sort($res1);
    $i = 0;
    while ($res1[$i])
    {
        echo $res1[$i];
        echo "\n";
        $i++;
    }
?>
