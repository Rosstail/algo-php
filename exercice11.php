<?php

	function isprem($nb) {
		for ($mul=2; $mul <= sqrt($nb); $mul++) {
			if (is_integer($nb / $mul)) {
				return;
			}
		}
		return $nb;
	}

	function loopitr($itr) {
		$nb = 2;
		$nbverif = 0;
		print("les nombres premiers de $nb jusqu'à $itr sont :" . PHP_EOL);
		while ($nbverif <= $itr) {
			if (isprem($nb)) {
				print("$nb ");
				$nbverif++;
			}
			$nb++;
		}
		print("." . PHP_EOL);
	}

	fwrite(STDOUT, "Veuillez entrer un nombre d'itération." . PHP_EOL);
	$itr = trim(fgets(STDIN));

	if(!is_numeric($itr)) {
		fwrite(STDERR, "Veullez ne rentrer que des nombres !" . PHP_EOL);
		exit();
	}

	loopitr($itr);
?>