<?php
	$day = 01;
	$month = 01;
	$year = 2010;

    fwrite(STDOUT, "Le début du dépôt s'effectue le : $year / $month / $year" . PHP_EOL);

    $ddate = 31;
    $mdate = 12;
    $ydate = date("Y");

    fwrite(STDOUT, "La fin de cette année sera au : $ddate / $mdate / $ydate" . PHP_EOL);

    $money = 100;

    fwrite(STDOUT, "Au départ, le montant sur le compte est de $money \$." . PHP_EOL);

    while ($month < $mdate || $year < $ydate) {
    	$money = $money + 100;
    	$month++;
    	if ($month == 13) {
    		$year++;
    		$month = 1;
    		$money = 1.02 * $money;
    	}
    }
    fwrite(STDOUT, "A la fin de la l'année $ydate, le montant sera de $money \$." . PHP_EOL);
?>