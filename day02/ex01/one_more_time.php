#!/usr/bin/php
<?php
	date_default_timezone_set('Europe/Paris');
	setlocale(LC_ALL, 'fr_FR');
	if ($argc === 2)
    {
        $arraym = array(1 => 'janvier', 2 => 'février', 3 => 'mars', 4 => 'avril', 5 => 'mai', 6 => 'juin',
		7 => 'juillet', 8 => 'août', 9 => 'septembre', 10 => 'octobre', 11 => 'novembre', 12 => 'décembre');
		$arrayw = array(1 => 'lundi', 2 => 'mardi', 3 => 'mercredi', 4 => 'jeudi', 5 => 'vendredi', 6 => 'samedi', 7 => 'dimanche');
        $date = explode(" ", $argv[1]);
        if (count($date) === 5)
        {
			$date[0] = array_search(lcfirst($date[0]), $arrayw);
			$date[2] = array_search(lcfirst($date[2]), $arraym);
            $datet = explode(":", $date[4]);
            $date[4] = $datet[0];
            $date[5] = $datet[1];
			$date[6] = $datet[2];
			if (is_numeric($date[0]) && is_numeric($date[2]))
			{
				if ((preg_match('/^(0?[1-9]|[1-2][0-9]|[3][0-1])$/', $date[1]) != 0) && (preg_match('/^([0-9]{4})$/', $date[3]) != 0))
				{
					if ((preg_match("/^(0[1-9]|1[0-9]|2[0-4])$/", $date[4]) != 0) && (preg_match("/^([0-5][0-9])$/", $date[5]) != 0) &&
					(preg_match("/^([0-5][0-9])$/", $date[6]) != 0))
					{
						$time = $date[3] . '-' . $date[2] . '-' . $date[1] . ' ' . $date[4] . ':' . $date[5] . ':' . $date[6];
						$time = strtotime($time);
						echo $time."\n";
					}
					else
						echo "Wrong Format\n";
				}
				else
					echo "Wrong Format\n";
			}
			else
				echo "Wrong Format\n";
		}
		else
			echo "Wrong Format\n";
    }
?>