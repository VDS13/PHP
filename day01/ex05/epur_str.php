#!/usr/bin/php
<?php
	$res = array_filter(explode(" ", trim($argv[1])));
	$i = 0;
    foreach($res as $elem) {
        if ($elem != " ")
		{
			$result[$i] = $elem;
			$i++;
		}
		else
			$i++;
	}
	for ($j = 0; $j < $i; $j++)
	{
		echo $result[$j];
		if ($j != $i - 1)
			echo " ";
	}
	echo "\n";
?>