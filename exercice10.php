<?php

	function iscresc($tab, $i) {
		return $tab[$i] <= $tab[$i + 1];
	}

	function iscomplete($tab) {
		$nbverif = 0;
		$arrsize = count($tab) - 1;
		for ($i = 0; $i < $arrsize; $i++) { 
			if (iscresc($tab, $i))
				$nbverif++;
			else {
				print("Le tableau n'est pas croissant." . PHP_EOL);
				break;
			}
		}
		if ($nbverif == $arrsize)
			print("Le tableau est croissant." . PHP_EOL);
	}

	function tabnb() {
		$loop = true;
		print("Veuillez entrer autant de nombre que vous voulez." . PHP_EOL . 
			"Entrez \"FIN\" pour terminer." . PHP_EOL);
		while ($loop == true) {
			$tab[] = trim(fgets(STDIN));
			$itr = count($tab);
			if ($tab[$itr - 1] == "FIN") {
				array_pop($tab);
				$loop = false;
				break;
			}
			if (!is_numeric($tab[$itr - 1])) {
				array_pop($tab);
				print("Veuillez n'entrer que des nombres." . PHP_EOL);
			}
		}
		iscomplete($tab);
	}

	tabnb();
?>