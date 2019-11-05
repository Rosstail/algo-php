<?php
	$itr = 0;
	$tab1 = [0, 1, 3, 6, 10];
	$tab2 = [0, 1, 3, 5, 10];

	if (count($tab1) == count($tab2)) {
		while($itr < count($tab1))
		{
			if ($tab1[$itr] != $tab2[$itr]) {
				print("Les deux tableaux ne sont pas égaux" . PHP_EOL);
				exit();
			}
			$itr++;
		}
		print("Les deux tableaux sont égaux." . PHP_EOL);
	}
	else
		print ("les tableaux ne sont pas égaux en taille." . PHP_EOL);
?>