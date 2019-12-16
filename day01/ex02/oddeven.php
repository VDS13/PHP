#!/usr/bin/php
<?php
	$stdin = fopen('php://stdin', 'r');
	while (!feof($stdin))
	{
		echo "Enter a number: ";
		$buf = fgets($stdin);
		if ($buf)
		{
			$num =str_replace("\n", "", $buf);
			if (is_numeric($num))
			{
				if ($num % 2 === 0)
					echo "The number ".$num." is even\n";
				else
					echo "The number ".$num." is odd\n"; 
			}
			else
				echo "'".$num."'"." is not a number\n";
		}
		else
			echo "\n";
	}
	fclose($stdin);
?>