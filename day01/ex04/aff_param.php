#!/usr/bin/php
<?php
    array_shift($argv);
    $aff = implode("\n", $argv);
    echo $aff."\n";
?>