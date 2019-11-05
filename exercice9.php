<?php

	function isvoy($letter) {
		return $letter == 'A' || $letter == 'E' || $letter == 'I' || $letter == 'O' || $letter == 'U' || $letter == 'Y'
			|| $letter == 'a' || $letter == 'e' || $letter == 'i' || $letter == 'o' || $letter == 'u' || $letter == 'y';
	}

	function str($str) {
		$nbr = 0;
		for ($i = 0; $i < strlen($str); $i++) { 
			if (isvoy($str[$i])) {
				$nbr++;
			}
		}
		print("Le nombre de voyelle présent dans $str est de $nbr." . PHP_EOL);
	}

	print("Veuillez entrer votre texte." . PHP_EOL);
	$str = trim(fgets(STDIN));

	str($str);
?>