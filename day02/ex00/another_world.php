#!/usr/bin/php
<?php
    if ($argc > 1)
    {
        echo preg_replace("/\s{2,}/"," ", trim($argv[1]));
        echo "\n";
    }
?>