#!/usr/bin/php
<?php
	array_shift($argv);
	$check = count($argv);
	$res1[0] = trim($argv[0]);
	$res1[1] = trim($argv[1]);
	$res1[2] = trim($argv[2]);
	if ($check == 3)
    {
		if (is_numeric($res1[0]) && is_numeric($res1[2]))
    	{
    	    if ($res1[1] == "+")
    	    {
				$result = $res1[0] + $res1[2];
				echo $result."\n";
			}
			else if ($res1[1] == "-")
			{
				$result = $res1[0] - $res1[2];
				echo $result."\n";
			}
			else if ($res1[1] == "*")
			{
				$result = $res1[0] * $res1[2];
				echo $result."\n";
			}
			else if ($res1[1] == "/")
			{
				if ($res1[2] == 0)
					echo "Incorrect Parameters\n";
				else
				{
					$result = $res1[0] / $res1[2];
					echo $result."\n";
				}
			}
			else if ($res1[1] == "%")
			{
				if ($res1[2] == 0)
					echo "Incorrect Parameters\n";
				else
				{
					$result = $res1[0] % $res1[2];
					echo $result."\n";
				}
			}
			else
				echo "Incorrect Parameters\n";
		}
		else
			echo "Incorrect Parameters\n";
	}
	else
		echo "Incorrect Parameters\n";
?>