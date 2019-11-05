<?php
	
	$loop = true;
	print("Veuillez entrer autant de nombre que vous voulez." . PHP_EOL . 
		"Entrez \"DONE\" pour terminer.	" . PHP_EOL);
	while ($loop == true) {
		$tab[] = trim(fgets(STDIN));
		$itr = count($tab);
		if ($tab[$itr - 1] == "DONE") {
			array_pop($tab);
			$loop = false;
			break;
		}
		if (!is_numeric($tab[$itr - 1])) {
			array_pop($tab);
			print("Veuillez n'entrer que des nombres." .PHP_EOL);
		}
	}

	$itr = count($tab);
	$calc = 0;
	$comp = $itr - 1;

	while ($comp >= 0)
	{
		$calc = $calc + $tab[$comp];
		$comp--;
	}
		print("Le nombre de valeur est de " . $itr . " et la moyenne globale des valeurs est de " . $calc / $itr . PHP_EOL);

?>