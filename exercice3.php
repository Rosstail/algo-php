<?php
	fwrite(STDOUT, "Veuillez entrer un n° de jour." . PHP_EOL);
	$day = trim(fgets(STDIN));
	fwrite(STDOUT, "Veuillez entrer un n° de mois." . PHP_EOL);
	$month = trim(fgets(STDIN));
	fwrite(STDOUT, "Veuillez entrer une année." . PHP_EOL);
	$year = trim(fgets(STDIN));

	if(!(is_numeric($year) && is_numeric($month) && is_numeric($day))) {
		fwrite(STDERR, "Veullez ne rentrer que des nombres !" . PHP_EOL);
		exit();
	}
	else {
        if ($year >= 0) {
            if ($month >= 1 && $month <= 12) {
                if (($month % 2 == 1 || $month == 8) && $day >= 1 && $day <= 31)
                    fwrite(STDOUT, "Votre date de naissance est le $day / $month / $year." . PHP_EOL);
                else if ($month % 2 == 0 && $month != 2 && $month != 7 && $day >= 1 && $day <= 30)
                    fwrite(STDOUT, "Votre date de naissance est le $day / $month / $year." . PHP_EOL);
                else if ($month == 2) {
                    if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
                        if ($day >= 1 && $day <= 29)
                            fwrite(STDOUT, "Votre date de naissance est le $day / $month / $year." . PHP_EOL);
                        else
                        {
                            fwrite(STDERR, "Votre date est invalide." . PHP_EOL);
                            exit();
                        }
                    }
                    else if ($day >= 1 && $day <= 28)
                        fwrite(STDOUT, "Votre date de naissance est le $day / $month / $year." . PHP_EOL);
                    else
                    {
                        fwrite(STDERR, "Votre date est invalide." . PHP_EOL);
                        exit();
                    }
                }
                else
                {
                    fwrite(STDERR, "Votre date est invalide." . PHP_EOL);
                    exit();
                }
            }
        }
        else
        {
            fwrite(STDERR, "Votre date est invalide." . PHP_EOL);
            exit();
        }

        $ddate = date("d");
        $mdate = date("m");
        $ydate = date("Y");
        fwrite(STDOUT, "Aujourd'hui nommes le : $ddate / $mdate / $ydate" . PHP_EOL);

        $year = $ydate - $year;

        if ($ddate - $day < 0)
        	$month--;
        if ($mdate - $month < 0)
        	$year--;
        if ($year < 0)
        {
        	fwrite(STDERR, "Marty ! Tu vis dans le futur !" . PHP_EOL);
        	exit();
        }

        fwrite(STDOUT, "Vous avez $year ans." .PHP_EOL);
    }
?>