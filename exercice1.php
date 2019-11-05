<?php
	const NB_BORN_PER_SEC = 2.7;
	const NB_DEATH_PER_SEC = 1.9;

	$ratioBornDeath = NB_BORN_PER_SEC - NB_DEATH_PER_SEC;
	if ($ratioBornDeath > 0) {
		$sign = " +";
	}
	else {
		$sign = " ";
	}

	echo "La variation de population sur terre est de" . "$sign" . "$ratioBornDeath personnes par seconde.\n";
	$ratioBornDeath = $ratioBornDeath * 60;
	echo "La variation de population sur terre est de" . "$sign" . "$ratioBornDeath personnes par minute.\n";
	$ratioBornDeath = $ratioBornDeath * 60;
	echo "La variation de population sur terre est de" . "$sign" . "$ratioBornDeath personnes par heure.\n";
	$ratioBornDeath = $ratioBornDeath * 24;
	echo "La variation de population sur terre est de" . "$sign" . "$ratioBornDeath personnes par jour.\n";
	$ratioBornDeath = $ratioBornDeath * 365;
	echo "La variation de population sur terre est de" . "$sign" . "$ratioBornDeath par an.\n";
?>