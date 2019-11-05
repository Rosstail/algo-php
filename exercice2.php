<?php
	
	fwrite(STDOUT, "Veuillez entrer une année." . PHP_EOL);
	$year = trim(fgets(STDIN));
	//if(intval($year) == $year){
	if(is_numeric($year)) {
		if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
			fwrite(STDOUT, "L'année $year est bissextile." . PHP_EOL);
		}
		else {
			fwrite(STDOUT, "L'année $year est normale." . PHP_EOL);
		}
	}
	else {
		fwrite(STDERR, "Erreur, veuillez entrer une année." . PHP_EOL);
	}

 ?>