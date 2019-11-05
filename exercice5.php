<?php
	$try = 2;

	fwrite(STDOUT, "Veuillez entrer un nombre d'itération" . PHP_EOL);
	$itr = trim(fgets(STDIN));

	if(!is_numeric($itr)) {
		fwrite(STDERR, "Veullez ne rentrer que des nombres !" . PHP_EOL);
		exit();
	}

	$tab = [0 , 1];

	if ($itr >= 2) {
		while ($try <= $itr) {
			$tab[] = $tab[$try - 1] + $tab[$try - 2];
			$try++;
		}
	}
	print_r($tab);
?>