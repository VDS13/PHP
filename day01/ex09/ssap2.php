#!/usr/bin/php
<?php
	array_shift($argv);
	$ress = implode(" ", $argv);
	$result = array_filter(explode(" ", trim($ress)));
	$res = implode(" ", $result);
	$resl = strtolower($res);
	$res1l = array_filter(explode(" ", $resl));
    $res1 = array_filter(explode(" ", $res));
    $i = 0;
    $leader = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>[\]^_`{|}~";
	$k = 0;
    while ($res1l[$i + 1][$k])
    {
        $s1 = strpos($leader, $res1l[$i][$k]);
        $s2 = strpos($leader, $res1l[$i + 1][$k]);
        if ($s1 > $s2)
        {
            $templ = $res1l[$i];
            $res1l[$i] = $res1l[$i + 1];
            $res1l[$i + 1] = $templ;
            $temp = $res1[$i];
            $res1[$i] = $res1[$i + 1];
            $res1[$i + 1] = $temp;
			$i = 0;
			$k = 0;
        }
        else if ($s1 == $s2)
        {
			if (!$res1l[$i + 1][$k + 1] && $res1l[$i][$k + 1])
			{
				$templ = $res1l[$i];
            	$res1l[$i] = $res1l[$i + 1];
            	$res1l[$i + 1] = $templ;
            	$temp = $res1[$i];
            	$res1[$i] = $res1[$i + 1];
            	$res1[$i + 1] = $temp;
				$i = 0;
				$k = 0;
			}
			else if (($res1l[$i + 1][$k + 1] && !$res1l[$i][$k + 1]) || (!$res1l[$i][$k + 1] && !$res1l[$i + 1][$k + 1]))
			{
				$i++;
				$k = 0;
			}
			else
				$k++;
		}
        else
        {
            $i++;
            $k = 0;
        }
    }
    $i = 0;
    while ($res1[$i])
    {
        echo $res1[$i];
        echo "\n";
        $i++;
    }
?>