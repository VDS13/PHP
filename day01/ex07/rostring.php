#!/usr/bin/php
<?php
    array_shift($argv);
    $res = implode(" ", $argv);
	$res1 = array_filter(explode(" ", $res));
	$i = 0;
	while ($res1[$i])
		$i++;
	$i--;
	while ($i >= 0)
	{
		echo $res1[$i];
		if ($i != 0)
			echo " ";
        $i--;
	}
	echo "\n";
?>